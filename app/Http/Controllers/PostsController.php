<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Posts;
use DB;
use Illuminate\Support\Facades\Validator;


class PostsController extends Controller
{
    //
    public function showCreatePosts()
    {
        return view('posts.create.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'slug' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        DB::beginTransaction();
        try{
            $save = Posts::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'category' => $request->category,
                'body' => $request->body
            ]);
            DB::commit();
            $status = true;
        }catch(Exception $error) {
            DB::rollback();
            $status = false;
        }

        return response()->json($status);
    }
}
