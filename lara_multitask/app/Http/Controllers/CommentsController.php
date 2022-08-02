<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $data = Comments::all();
        return view('comment')->with('lists', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = session()->get('adminname');
        if($user="Admin"){
            $usernames = "Admin";
        }
        else{
            $usernames = "Customer";
        }

        $comment = new Comments;
        $comment->usernames = $usernames;
        $comment->comment = $request->comments;
        $comment->save();

        return redirect('/comments')->with('success', 'Saved Successfully.');
    }

    public function show(Comments $comments)
    {
        //
    }

    public function edit(Comments $comments)
    {
        //
    }

    public function update(Request $request, Comments $comments)
    {
        //
    }

    public function destroy(Comments $comments)
    {
        //
    }
}
