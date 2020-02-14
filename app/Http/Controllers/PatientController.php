<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('backend.patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request,[
            'patient_name' => 'required',
            'address' => 'required',
        ]);
        $patient = new Patient;
        $patient->patient_name = $request->patient_name;
        $patient->guardian_name = $request->guardian_name;
        $patient->guardian_phone = $request->guardian_phone;
        $patient->address = $request->address;
        $patient->nid = $request->nid;
        $patient->age = $request->age;
        $patient->type = $request->type;
        $patient->drug = $request->drug;
        $patient->contruct_period = $request->contruct_period;
        $patient->contruct_amount = $request->contruct_amount;
        $patient->advance_amount = $request->advance_amount;
        $patient->joining_date = $request->joining_date;
        $patient->comments = $request->comments;
        if($request->image){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/patients'),$imageName);
            $patient->image = $imageName;
        }
        $patient->save();
        return redirect()->route('patients.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('backend.patient.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('backend.patient.edit',compact('patient'));
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
        $patient = Patient::findOrFail($id);
        $patient->patient_name = $request->patient_name;
        $patient->guardian_name = $request->guardian_name;
        $patient->guardian_phone = $request->guardian_phone;
        $patient->address = $request->address;
        $patient->nid = $request->nid;
        $patient->age = $request->age;
        $patient->type = $request->type;
        $patient->drug = $request->drug;
        $patient->contruct_period = $request->contruct_period;
        $patient->contruct_amount = $request->contruct_amount;
        $patient->advance_amount = $request->advance_amount;
        $patient->joining_date = $request->joining_date;
        $patient->comments = $request->comments;
        if($request->image){
            if($patient->image){
                $old_image = public_path('images/patients/'.$patient->image);
                unlink($old_image);
            }
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            // return $imageName;
            $request->image->move(public_path('images/patients'),$imageName);
            $patient->image = $imageName;
        }
        $patient->update();
        return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::findOrFail($id)->delete();
        return redirect()->route('patients.index');
    }
}
