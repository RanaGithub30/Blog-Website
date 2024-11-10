<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class UserPostService{
      public function post(){
            $posts = Post::where('author', Auth::user()->id)->with(['comments'])->orderBy('id', 'desc')->paginate(10);
            return $posts;
      }

      public function post_save($data){
             Post::create([
                'title' => $data['title'],
                'content' => $data['content'],
                'author' => Auth::user()->id,
             ]);

             return true;
      }

      public function post_delete($postId){
              Post::find($postId)->delete();
              return true;
      }

      public function post_edit($postId){
             $post = Post::find($postId);
             return $post;
      }

      public function post_update($data, $postId){
        Post::whereId($postId)->update([
           'title' => $data['title'],
           'content' => $data['content'],
        ]);

        return true;
    }
}