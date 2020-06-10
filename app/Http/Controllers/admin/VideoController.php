<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Video;

class VideoController extends Controller
{
    //
    public function index()
    {
        $videos= Video::orderBy('created_at','desc')->paginate(20);;
        return view('admin/videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
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
            'embed_code'=>'required',
        ]);
        $input_data=$request->all();
        if(empty($input_data['status'])){
            $input_data['status']=0;
        }
        video::create($input_data);
        return redirect()->route('videos.index')->with('message','Бичлэг нэмэгдлээ');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return view('admin.videos.show',compact('video'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $this->validate($request,[
            'embed_code'=>'required'
        ]);
        $video->update($request->all());
        return redirect()->route('videos.index')->with('message','Бичлэг амжилттай засагдлаа');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('message','Бичлэг амжилттай устгагдлаа');
    }
}
