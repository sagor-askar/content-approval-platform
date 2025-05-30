<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostApproved;
use App\Mail\PostRejected;

class ApprovalController extends Controller
{
    public function approvalStories()
    {
        $allContent = Post::where('status', 'pending')->get();
        $approvedContent = Post::where('status', 'approved')->get();
        $archivedContent = Post::where('status', 'archived')->get();

        return view('approval.index', compact('allContent', 'approvedContent', 'archivedContent'));
    }

    // update status
    public function updateStatus(Request $request, Post $post)
    {
        $request->validate(['status' => 'required|in:approved,rejected']);

        $post->status = $request->status;
        $post->save();

        // send mail notification
        if($post->status === 'approved'){
            Mail::to($post->user->email)->send(new PostApproved($post));
        } elseif ($post->status === 'rejected') {
            Mail::to($post->user->email)->send(new PostRejected($post));
        }

        return redirect()->back()->with('success',"Post {$post->status} Successfully");
    }
}
