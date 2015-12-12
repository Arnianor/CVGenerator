<?php

namespace App\Http\Controllers;

use App\CV;
use App\Repositories\CVRepository;

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

        // Create the CV first.
        $request->user()->cvs()->create([
            'name' => $request->name,
        ]);

        // Update the user's data.
        $request->user()->update([
            'surname' => $request->surname,
            'lastname' => $request->lastname,
            'address' => $request->address,
        ]);

        // Now we should just create sections and fill with the data given to save time.
        $request->user()->sections()->create([
            'type' => 'not filled either'
        ]);

        $request->user()->jobs()->create([
            'name' => $request->enterprise,
            'location' => $request->enterpriseStreet,
            'title' => $request->job_name,
            'description' => 'not filled yet',
            'start_date' => $request->enterpriseBeginDate,
            'end_date' => $request->enterpriseEndDate,
        ]);

        $request->user()->educations()->create([
            'name' => $request->school,
            'location' => $request->schoolStreet,
            'title' => $request->degree,
            'description' => 'not filled yet',
            'start_date' => $request->degreeBeginDate,
            'end_date' => $request->degreeEndDate,
        ]);

        $request->user()->languages()->create([
            'name' => $request->language,
            'level' => $request->languageLevel,
            'creditation' => $request->languageDegree,
        ]);

        return redirect('/cvs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $this->authorize('destroy', $cv);

        $cv->delete();

        return redirect('/cvs');
    }
}
