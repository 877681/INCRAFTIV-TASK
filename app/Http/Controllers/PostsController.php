<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\posts;
use App\Models\User;

class PostsController extends Controller
{
       public function index() {
    
        $posts = posts::with('User')->latest()->simplePaginate();
       // return view('index');
        return view('post.index', [ 
            'posts' => $posts,
        ]);
    }


    public function create() {
            
        return view('post.create');

    }

    public function show($id) {
               $data = posts::find($id); 

        return view('post.show', ['posts' => $data]);

    }

    public function edit( $id) {
        
        $data = posts::find($id);

        return view('post.edit', ['posts'=> $data]);

    }


    public function store() {

                
        //validation 

        request()->validate([
            'title' =>['required', 'min:3'],
            'desc' =>['required'],
            
        ]);
        
            posts::create([
                'title' => request('title'),
                'description' => request('desc'),
                'user_id'=> 1,

            ]);
            
            return redirect('/posts');
            
    }

    public function update($id) {

        //validate 
        request()->validate([
            'title' => ['required', 'min:3'],
            'desc' => ['required'],
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
        $postData = posts::find($id);
        $postData->update([
            'title' => request('title'),
            'description' => request('desc'),
        ]);
        //and persist
        //redirect to the job page 
        return redirect( '/posts'.'/' . $id);

    }

    public function destroy( $id) {
        
    //authorize on hold....

        $postData = posts::find($id);
        $postData->delete();

        return  redirect('/posts');

    }

    public function form() {

        return view('post.form');
    }

}
