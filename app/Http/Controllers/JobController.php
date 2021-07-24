<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Aircraft;
use App\Models\Customer;
use App\Models\Job;
use App\Models\Partnumber;


class JobController extends Controller
{
    public function index()
    {
        $aircrafts= Aircraft::all();
        $customers= Customer::all();
        $partnumbers= Partnumber::all();
        

        $jobs = Job::join('aircraft', 'jobs.aircraft_number', '=', 'aircraft.id')
              ->join('customers', 'jobs.customer_number', '=', 'customers.id')
              ->join('partnumbers', 'jobs.part_number', '=', 'partnumbers.id')
              ->get(['jobs.*', 'aircraft.Aircraft','customers.Customer','partnumbers.part_number']);
        

        return view('project.view_job',['jobs'=>$jobs,'customers'=>$customers,'partnumbers'=>$partnumbers]);
    }

    public function create()
    {
        $aircrafts= Aircraft::all();
        $customers= Customer::all();
        $partnumbers= Partnumber::all();

        return view('project.add_job',['aircrafts'=>$aircrafts,'customers'=>$customers,'partnumbers'=>$partnumbers]);

    }

    public function store(Request $request)
    {

        $this->validate($request,[

            'job_number' => 'required',
            'work_details' => 'required'
            


        ]);

        // dd($request->all());
        $jobs = new Job;
        $jobs->job_number = $request->job_number;
        $jobs->customer_number = $request->customer_number;
        $jobs->aircraft_number = $request->aircraft_number;
        $jobs->part_number = $request->part_number;
        $jobs->serial_number = $request->serial_number;
        $jobs->job_number = $request->job_number;
        $jobs->tsn = $request->tsn;
        $jobs->tsd = $request->tsd;
        $jobs->work_details = $request->work_details;
        $jobs->po_no = $request->po_no;
        $jobs->file = $request->file;
        $jobs->notes = $request->notes;
        $jobs->save();

        return redirect('/');

    }

    public function edit($id)
    {


        $jobs = Job::find($id);
        $aircrafts= Aircraft::all();
        $customers= Customer::all();
        $partnumbers= Partnumber::all();

        return view('project.edit_job',['jobs'=>$jobs,'aircrafts'=>$aircrafts,'customers'=>$customers,'partnumbers'=>$partnumbers]);


    }

    public function update($id)
    {
        $jobs = Job::find($id);
        $jobs->job_number = $request->job_number;
        $jobs->customer_number = $request->customer_number;
        $jobs->aircraft_number = $request->aircraft_number;
        $jobs->part_number = $request->part_number;
        $jobs->serial_number = $request->serial_number;
        $jobs->job_number = $request->job_number;
        $jobs->tsn = $request->tsn;
        $jobs->tsd = $request->tsd;
        $jobs->work_details = $request->work_details;
        $jobs->po_no = $request->po_no;
        $jobs->file = $request->file;
        $jobs->notes = $request->notes;
        $jobs->save();

    }

    public function finddetails($id){

        $description = Partnumber::find($id);
        return view('project.add_job',['description'=>$description]);
    }

   

}
