<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Niitlel;

class NiitlelController extends Controller
{
    //
    public function index()
    {
        $niitlels= Niitlel::orderBy('created_at','desc')->paginate(20);
        return view('admin/niitlels.index',compact('niitlels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.niitlels.create');
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
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg'
        ]);
       
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move('images', $imageName);
        $input_data['image'] = "".$imageName;
        Niitlel::create($input_data);
        return redirect()->route('niitlels.index')->with('message','Нийтлэл нэмэгдлээ');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(niitlel $niitlel)
    {
        return view('admin.niitlels.show',compact('niitlel'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(niitlel $niitlel)
    {
        return view('admin.niitlels.edit',compact('niitlel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niitlel $niitlel)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if (!$request->hasFile('image'))
        {
            $niitlel->title = $request->title;
            $niitlel->body = $request->body;
            $niitlel->save();
        }
        else{
            $input_data = $request->all();
            $imageName = time().'.'.$request->image->extension();  
   
            $request->image->move('images', $imageName);
            $input_data['image'] = "".$imageName;
            $niitlel->update($input_data);
        }

        
        return redirect()->route('niitlels.show', $niitlel->id)->with('message','Нийтлэл амжилттай засагдлаа');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(niitlel $niitlel)
    {
        $niitlel->delete();
        return redirect()->route('niitlels.index')->with('message','Нийтлэл амжилттай устгагдлаа');
    }
}
