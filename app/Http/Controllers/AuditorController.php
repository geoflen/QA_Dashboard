<?php

namespace qadashboard\Http\Controllers;

use Illuminate\Http\Request;
use qadashboard\Auditor;
use qadashboard\Certification;
use qadashboard\AuditorCertification;
use Datatables;

class AuditorController extends Controller
{
    /**
	 * Display a listing of the resource
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function index(Request $request)
    {
    	$auditors = Auditor::orderBy('id', 'Desc')->paginate(10);

    	return view('auditor.index', compact('auditors'))
    					->with('i', ($request->input('page', 1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('auditor.create');
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

        $auditor = new Auditor;

        $auditor->name = $request->get('name');
        $auditor->phone_number = $request->get('phone_number');
        $auditor->organization = $request->get('organization');
        $auditor->email = $request->get('email_address');
        $auditor->designation = $request->get('designation');
        $auditor->save();

        // Auditor::create($request->all());
        return redirect()->route('auditor.index')
                        ->with('success','Auditor created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $auditor =Auditor::findOrFail($id);
        //dd($auditor);
        return view('auditor.edit', compact('auditor'));
    }

    public function show($id)
    {
        $auditor = Auditor::findOrFail($id);
        return view('auditor.show', compact('auditor'));
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
        $auditor = Auditor::find($id);
        request()->validate([
            'name' => 'required',
            'phone_number' => 'required',
        ]);
        // Auditor::find($id)->update($request->all());
        $auditor->name = $request->get('name');
        $auditor->phone_number = $request->get('phone_number');
        $auditor->organization = $request->get('organization');
        $auditor->email = $request->get('email');
        $auditor->designation = $request->get('designation');
        $auditor->save();

        return redirect()->route('auditor.index')
                        ->with('success','Auditor updated successfully');
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Auditor::find($id)->delete();

        return redirect()->route('auditor.index')
                            ->with('success', 'Auditor deleted successfully');
    }
}




