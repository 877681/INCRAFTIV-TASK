<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Employer;

class JobController extends Controller
{
    public function index() {
    
        $jobs = job::with('employer')->latest()->simplePaginate(5);
       // return view('index');
        return view('jobs.index', [ 
            'jobs' => $jobs,
        ]);
    }

    public function jobIndex(){
        
        $jobs = Job::with('employer')->latest()->simplePaginate(5);

        return view('jobs.index', [

            'jobs' => $jobs
        ]);
    }

    public function create() {
            
        return view('jobs.create');

    }

    public function show(Job $job) {
                
        return view('jobs.show', ['jobs' => $job]);

    }

    public function edit(Job $job) {

        return view('jobs.edit', ['job'=> $job]);

    }

    public function showEmployers(Job $job) {

        return view('Employer' , ['employer' => $job]);

    }

    public function store() {

                
        //validation 

        request()->validate([
            'title' =>['required', 'min:3'],
            'salary' =>['required'],
            
        ]);
        
            Job::create([
                'title' => request('title'),
                'salary' => request('salary'),
                'employer_id'=> 1,

            ]);
            
            return redirect('/jobs');
            
    }

    public function update(Job $job) {

        //validate 
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);
        
        //authorize (on hold...) -> to check whether or not the use is authorized to update the job
        //apdate job 
        //  //if job id is null then it will throw a fail message
        //there are two ways to update the jobs 
//###########################################################
        //first
        // $job->title = request('title');
        // $job->salary = request('salary');
        // $job->save();
        // //second 

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        //and persist
        //redirect to the job page 
        return redirect( '/jobs'.'/' . $job->id);

    }

    public function destroy(Job $job) {
        
    //authorize on hold....

        $job->delete();

        return  redirect('/jobs');

    }
}
