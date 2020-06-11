<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts= Post::orderBy('created_at','desc')->paginate(20);
        return view('admin/posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input_data=$request->all();

        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'image'=>'required'
        ]);
       
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move('images', $imageName);
        $input_data['image'] = "".$imageName;
        Post::create($input_data);
        return redirect()->route('posts.index')->with('message','Мэдээ нэмэгдлээ');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
        ]);
        if (!$request->hasFile('image'))
        {
            $post->title = $request->title;
            $post->body = $request->body;
            $post->save();
        }
        else{
            $input_data = $request->all();
            $imageName = time().'.'.$request->image->extension();  
   
            $request->image->move('images', $imageName);
            $input_data['image'] = "".$imageName;
            $post->update($input_data);
        }

        
        return redirect()->route('posts.show', $post->id)->with('message','Мэдээ амжилттай засагдлаа');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('message','амжилттай устгагдлаа');
    }
}
