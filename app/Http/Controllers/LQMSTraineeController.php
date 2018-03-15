<?php

namespace qadashboard\Http\Controllers;

use Illuminate\Http\Request;
use qadashboard\LQMSTrainee;

class LQMSTraineeController extends Controller
{
    //
    /**
	 * Display a listing of the resource
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function index(Request $request)
	{
		$lqmsTrainees =LQMSTrainee::orderBy('id', 'DESC')->paginate(5);

    	return view('lqms.index', compact('lqmsTrainees'))
    		->with('i', ($request->input('page', 1) - 1) *5);
	}

	/**
	 * Show the form for creating a new resource
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function create()
	{
		return view('lqms.create');
	}

	/**
	 * Store a newly created resource in storage
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)

    {
        $this->validate($request, [
            'name' => 'required',
            'phone_number' => 'required',
        ]);

        $lqmsTrainee = new lqmsTrainee;

        $lqmsTrainee->name = $request->get('name');
        $lqmsTrainee->phone_number = $request->get('phone_number');
        $lqmsTrainee->designation =$request->get('designation');
        $lqmsTrainee->facility = $request->get('facility');
        $lqmsTrainee->email = $request->get('email_address');
        $lqmsTrainee->save();

        // LQMSTrainee::create($request->all());
        return redirect()->route('lqms.index')
                        ->with('success','LQMS Trainee created successfully');
    }


	/**
	 * Display the specified resource
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */

	public function show($id)
	{
		$lqmsTrainee = LQMSTrainee::find($id);
		return view('lqms.show',compact('lqmsTrainee'));

	}

	/*
	 * Show the form for editing te specified resource
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */


	public function edit($id)
	{
		$lqmsTrainee = LQMSTrainee::find($id);

		return view('lqms.edit', compact('lqmsTrainee'));

	}

	/*
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */

	public function destroy($id)
	{
		LQMSTrainee::find($id)->delete();

		return redirect()->route('lqms.index')
							->with('success', 'LQMS Trainee deleted successfully');
	}
}
