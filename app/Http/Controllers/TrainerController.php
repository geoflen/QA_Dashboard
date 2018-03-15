<?php

namespace qadashboard\Http\Controllers;

use Illuminate\Http\Request;
use qadashboard\Trainer;

class TrainerController extends Controller
{
	/**
	 * Display a listing of the resource
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function index(Request $request)
	{
		$trainers =Trainer::orderBy('id', 'DESC')->paginate(15);

    	return view('trainer.index', compact('trainers'))
    		->with('i', ($request->input('page', 1) - 1) *5);
	}

	/**
	 * Show the form for creating a new resource
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function create()
	{
		return view('trainer.create');
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


        $trainer = new Trainer;

        $trainer->name = $request->get('name');
        $trainer->phone_number = $request->get('phone_number');
        $trainer->organization = $request->get('organization');
        $trainer->email = $request->get('email');
        $trainer->designation = $request->get('designation');
        $trainer->save();

        // Training::create($request->all());
        return redirect()->route('trainer.index')
                        ->with('success','Training created successfully');
    }

	/**
	 * Display the specified resource
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */

	public function show($id)
	{
		$trainer = Trainer::find(1);
		return view('trainer.show',compact('trainer'));

	}

	/*
	 * Show the form for editing te specified resource
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */


	public function edit($id)
	{
		$trainer = Trainer::find(1);

		return view('trainer.edit', compact('trainer'));

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
        $training = Trainer::find($id);
        request()->validate([
            'name' => 'required',
            'organization' => 'required',
        ]);
        // Auditor::find($id)->update($request->all());
        $training->name = $request->get('name');
        $training->phone_number = $request->get('phone_number');
        $training->organization = $request->get('organization');
        $training->email = $request->get('email');
        $training->designation = $request->get('designation');
        $training->save();

        return redirect()->route('trainer.index')
                        ->with('success','Trainer updated successfully');
    }

	/*
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */

	public function destroy($id)
	{
		Trainer::find($id)->delete();

		return redirect()->route('trainer.index')
							->with('success', 'Trainer deleted successfully');
	}


}





