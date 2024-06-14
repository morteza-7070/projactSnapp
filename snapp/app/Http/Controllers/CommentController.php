<?php

namespace App\Http\Controllers;

use App\Models\CategoryFood;
use App\Models\Comment;

use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments=Comment::all();

        return view('comments.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {  $comments=Comment::all();
        $users=User::all();
        $foods=CategoryFood::all();
        return view('comments.create',compact('users','foods','comments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',


        ]);
       Comment::create([
           "content"=>$request->content,
           "order_id"=>$request->order_id,
           'food_id'=>$request->food_id


       ]);
       return redirect()->route('Comment.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment,string $id)
    {
        $comments=Comment::FindOrFail($id);
        $users=User::all();
        $foods=CategoryFood::all();
        return view('comments.edit',compact('comments','id','users','foods'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $comments=Comment::FindOrFail($id);
        $request->validate([]);
        $comments->update([
            "content"=>$request->content,

            "order_id"=>$request->order_id,
            'food_id'=>$request->food_id,

        ]);
        return redirect()->route('Comment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment,string $id)
    {
        $comments=Comment::FindOrFail($id);
        $comments->delete();
        return redirect()->route('Comment.index');
    }
}
