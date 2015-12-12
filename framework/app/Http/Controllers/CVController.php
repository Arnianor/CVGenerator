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
        // $cvs = CV::where('user_id',$request->user()->id)->get();

        return view('pages.cvs.index',[
            'cvs' => $cvs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pages.cvs.create',[
            'cvs' => $this->cvs,
            'user' => $request->user()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate entries
        // No entries to validate for a CV.

        // Create the entry.
        $request->user()->cvs()->create([
            'name' => $request->name,
        ]);

        return redirect('/cvs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
    public function destroy(Request $request,CV $cv)
    {
        $this->authorize('destroy',$cv);

        $this->delete();

        return redirect('/cvs');
    }
}
