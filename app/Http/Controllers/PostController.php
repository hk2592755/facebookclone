<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = auth()->user();
        $data = $user->post;
        return view('post.createpost')->with('posts',$data);
        //
    }


    public function post()
    {
        return view('post');
        //
    }

    public function createpost()
    {
        return view('createpost');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = auth()->user();


        $logged_in_user_id = $user->id;
        $post = new Post();
        $desc = $request->input('description');
        $post->user_id = $logged_in_user_id;



        $post->description = $desc;
        //---------Upload File----

        if($request->hasFile('file_path'))
          {
             $file = $request->file('file_path');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads',$filename);
             $post->file_path = $filename;
          }

          $post->save();

          return redirect('post');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
