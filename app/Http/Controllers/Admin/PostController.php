<?php

namespace App\Http\Controllers\Admin;


use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    protected $PostRepository;

    function __construct(PostRepository $PostRepository){
      $this->PostRepository = $PostRepository;
    }

    public function index(){
      $post = $this->PostRepository->getAlllist();
      return view('ALL/Post/home')
      ->withPost($post);

    }
    // Edit post
    public function FormEdit($id=''){
       $post = $this->PostRepository->getbyId($id);
       // dd($post)l
       return view('ALL/Post/edit')
       ->withPost($post);
    }
    public function submitedit(Request $request){
      $post = $request->all();

      if($post['content']!=null){

          $data = $this->PostRepository->editdata($post);

          if(!$data)
          {
            \App::abort(500);
          }

         return  redirect()->route('post.home')->with('success','Update Success!');
      }

      else{
            return redirect()->route('post.edit',$post['id'])->with('error','Update Error,Value Must Be Not Null!');
      }

    }

    // Detail
    public function FormDetail($id){

        $post = $this->PostRepository->getbyId($id);

        return view('ALL/Post/detail')->withPost($post);
    }

    // Delete
    public function delete($id){

        $post = $this->PostRepository->delete($id);

        if(!$post){
            \App::abort(500);
        }
        return redirect()->route('post.home')->with('success','Delete Success!');
    }
}
