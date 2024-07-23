<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::all();
        return view('dashboard.Pages.Config.News.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Pages.Config.News.create');
        
    }

    public function saveIMG(Request $request, $name){
        if($request->hasFile($name)){
            $image = $request->file($name);

            $file_extension = $image->getClientOriginalExtension();
            $file_name = uniqid();
            $name='news';
            $image_name = $name.'_'.$file_name.'.'.$file_extension;
            $path = public_path() . "/assets/omafes/img/news/";
            $image->move($path, $image_name);

            return $image_name;
        }

        return null;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'details'     => 'required',
            // 'image'         => 'required',


        ]);
// $img=$this->saveIMG($request, 'image');
        $news=News::create([
            'name'=>    $request->name,
            'details'=>   $request->details,
            'contenu'=>    $request->editordata,
            // 'image_p'=> $img,
    
        ]);
        return redirect()->route('manage-new.index')->with('success', 'News ajouté avec succès !');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $new=News::findOrFail($id);
        return view('dashboard.Pages.Config.News.edit',compact('new'));

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
        $new=News::findOrFail($id);
        $imgr=$this->saveIMG($request, 'image');

        $new->update([
            'name'=>    $request->name,
            'details'=>   $request->details,
            'contenu'=>    $request->editordata,
            // 'image_p'=>       $request->image,
            ]);
        return redirect()->route('manage-new.index')->with('success', 'news a été modifier avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $new=News::findOrFail($id);
        $new->delete($request->all());
        return redirect()->route('manage-new.index')->with('success', 'News à été suprimé avec succès !');

    }
}