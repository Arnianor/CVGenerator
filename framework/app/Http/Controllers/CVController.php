<?php

namespace App\Http\Controllers;

use App\CV;
use App\Education;
use App\Hobby;
use App\Language;
use App\Repositories\CVRepository;

use App\Section;
use App\Skill;
use App\Work;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CVController extends Controller
{

    /**
     * The CVRepository instance.
     *
     * @var CVRepository
     */
    protected $cvs;

    /**
     * Create a new controller instance.
     *
     * @param CVRepository $cvs
     */
    public function __construct(CVRepository $cvs)
    {
        $this->middleware('auth');

        $this->cvs = $cvs;
    }

    /**
     * Display a list of all of the user's cvs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cvs = $this->cvs->forUser($request->user());

        return view('pages.cvs.index', [
            'cvs' => $cvs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pages.cvs.create', [
            'cvs' => $this->cvs,
            'user' => $request->user()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate entries
        // No entries to validate for a CV.

        //var_dump($request);
        //TODO change firstOr*** to ***
        // Create the CV first.
        $cv = $request->user()->cvs()->firstOrCreate([
            'name' => $request->name,
        ]);

        // Update the user's data.
        $request->user()->update([
            'surname' => $request->surname,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'telephone' => $request->telephone,
        ]);

        // Build the subsections first.
        $work = $request->user()->jobs()->firstOrNew([
            'name' => $request->enterprise,
            'location' => $request->enterpriseAddress,
            'title' => $request->job_name,
            'description' => 'not filled yet',
            'start_date' => $request->enterpriseBeginDate,
            'end_date' => $request->enterpriseEndDate,
        ]);

        $education = $request->user()->educations()->firstOrNew([
            'name' => $request->school,
            'location' => $request->schoolAddress,
            'title' => $request->degree,
            'description' => 'not filled yet',
            'start_date' => $request->degreeBeginDate,
            'end_date' => $request->degreeEndDate,
        ]);

        $language = $request->user()->languages()->firstOrNew([
            'name' => $request->language,
            'level' => $request->languageLevel,
            'creditation' => $request->languageDegree,
        ]);

        // New build the sections.
        $workSection = new Section(['type' => 'work']);
        $languageSection = new Section(['type' => 'language']);
        $educationSection = new Section(['type' => 'education']);

        // First attach the sections to the user
        $request->user()->sections()->saveMany([
            $workSection,
            $educationSection,
            $languageSection,
        ]);

        // Now attach them to the cv
        $cv->sections()->saveMany([
            $workSection,
            $educationSection,
            $languageSection,
        ]);

        // Now attach each section with it's correct subsection.
        $languageSection->language()->save($language);
        $language->save();

        $workSection->job()->save($work);
        $work->save();

        $educationSection->education()->save($education);
        $education->save();

        // Now save the sections.
        $workSection->save();
        $educationSection->save();
        $languageSection->save();

        return redirect('/cvs');
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param CV $cv
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CV $cv)
    {
        // Get the cv sections.
        $sections = $cv->sections()->get();

        // Build empty subsections.
        $workSection = array();
        $languageSection = array();
        $educationSection = array();
        $hobbySection = array();
        $skillSection = array();

        // For each section, determine it's type, and append it's data to the corresponding subsection.
        foreach ($sections as $section)
        {
            $w = Work::whereSectionId($section->id)->get(['name', 'location', 'title', 'description', 'start_date', 'end_date'])->toArray();
            $l = Language::whereSectionId($section->id)->get(['name', 'level', 'creditation'])->toArray();
            $e = Education::whereSectionId($section->id)->get(['name', 'location', 'title', 'description', 'start_date', 'end_date'])->toArray();
            $h = Hobby::whereSectionId($section->id)->get(['text'])->toArray();
            $s = Skill::whereSectionId($section->id)->get(['name', 'level', 'description'])->toArray();

            if(count($w) != 0)
            array_push($workSection, $w);
            if(count($l) != 0)
            array_push($languageSection, $l);
            if(count($e) != 0)
            array_push($educationSection, $e);
            if(count($h) != 0)
            array_push($hobbySection, $h);
            if(count($s) != 0)
            array_push($skillSection, $s);
        }

        return view('pages.cvs.show', [
            'cv' => $cv,
            'user' => $request->user(),
            'workSection' => $workSection,
            'languageSection' => $languageSection,
            'educationSection' => $educationSection,
            'hobbySection' => $hobbySection,
            'skillSection' => $skillSection,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param CV $cv
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CV $cv)
    {

        return view('errors.wip');
        /*
        $this->authorize('destroy', $cv);

        $cv->delete();

        return redirect('/cvs');
        */
    }
}
