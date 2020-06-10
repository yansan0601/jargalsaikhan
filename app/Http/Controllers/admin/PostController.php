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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
        ]);
        $input_data=$request->all();
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
    public function edit($id)
    {
        $menu_active=4;
        $post=Post::findOrFail($id);
        return view('admin.posts.edit',compact('menu_active','post'));
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
        $update_coupon=Coupon_model::findOrFail($id);
        $this->validate($request,[
            'coupon_code'=>'required|min:5|max:15|unique:coupons,coupon_code,'.$update_coupon->id,
            'amount'=>'required|numeric|between:1,99',
            'expiry_date'=>'required|date'
        ]);
        $input_data=$request->all();
        if(empty($input_data['status'])){
            $input_data['status']=0;
        }
        $update_coupon->update($input_data);
        return redirect()->route('coupon.index')->with('message','Edit Coupon Already!');
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
