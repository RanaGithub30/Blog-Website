<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\{UserPostService};

class UserPostManageController extends Controller
{
    //

    protected $userPostService;

    public function __construct(UserPostService $userPostService)
    {
        $this->userPostService = $userPostService;
    }

    public function post(){
        $posts = $this->userPostService->post();
        return view('user.post.list', compact('posts'));
    }
    
    public function post_add(){
        return view('user.post.add');
    }
    
    public function post_save(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $posts = $this->userPostService->post_save($request->all());
        return redirect()->back()->with('success', 'Post Added Successfully');
    }
    
    public function post_delete($postId){
        $this->userPostService->post_delete($postId);
        return redirect('/user/post')->with('success', 'Post Deleted Successfully');
    }
    
    public function post_edit($postId){
        $post = $this->userPostService->post_edit($postId);
        return view('user.post.edit', compact('post'));
    }

    public function post_update(Request $request, $postId){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $posts = $this->userPostService->post_update($request->all(), $postId);
        return redirect('/user/post')->with('success', 'Post Updated Successfully');
    }
}