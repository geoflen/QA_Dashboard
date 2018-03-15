<?php

namespace qadashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use qadashboard\Training;
use DataTables;

class TrainingController extends Controller
{

	/**
	 * Display a listing of the resource
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function index(Request $request)
	{
	
    	return view('training.index');

	}
	/**
	 * Display a listing of the resource
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function trainingData(Request $request)
	{
		
		// return datatables()->of(Training::all());
		return Datatables::of(Training::query())->make(true);


    }

	/**
	 * Show the form for creating a new resource
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function create()
	{
		return view('training.create');
	}

	/**
	 * Store a newly created resource in storage
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)

    {
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
        ]);


        $training = new Training;

        $training->start_date = $request->get('start_date');
        $training->end_date = $request->get('end_date');
        $training->location = $request->get('location');
        $training->description = $request->get('description');
        $training->ip = $request->get('ip');
        $training->save();

        // Training::create($request->all());
        return redirect()->route('training.index')
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
		$training = Training::find($id);
		return view('training.show',compact('training'));

	}

	/*
	 * Show the form for editing te specified resource
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */


	public function edit($id)
	{
		$training = Training::find($id);



		return view('training.edit', compact('training'));

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
        $training = Training::find($id);
        request()->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        // Auditor::find($id)->update($request->all());
        $training->start_date = $request->get('start_date');
        $training->end_date = $request->get('end_date');
        $training->location = $request->get('location');
        $training->description = $request->get('description');
        $training->ip = $request->get('ip');
        $training->save();

        return redirect()->route('training.index')
                        ->with('success','Training updated successfully');
    }

	/*
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */

	public function destroy($id)
	{
		Training::find($id)->delete();

		return redirect()->route('training.index')
							->with('success', 'Training deleted successfully');
	}


}





