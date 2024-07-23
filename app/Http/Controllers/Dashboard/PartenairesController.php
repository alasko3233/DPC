<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartenairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners=Partner::all();
        return view('dashboard.Pages.Config.Partners.index',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Pages.Config.Partners.create');
        
    }

    public function saveIMG(Request $request, $name){
        if($request->hasFile($name)){
            $image = $request->file($name);

            $file_extension = $image->getClientOriginalExtension();
            $file_name = uniqid();
            $name='partner';
            $image_name = $name.'_'.$file_name.'.'.$file_extension;
            $path = public_path() . "/assets/omafes/img/partner/";
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
            'image'         => 'required',


        ]);
$img=$this->saveIMG($request, 'image');
        $partner=Partner::create([
            'name'=>   $request->name,
            'image_p' =>    $img,
    
        ]);
        return redirect()->route('manage-partenaire.index')->with('success', 'Le partenaire a été ajouté avec succès !');



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
        
        $partner=Partner::findOrFail($id);
        return view('dashboard.Pages.Config.Partners.edit',compact('partner'));

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
        $partner=Partner::findOrFail($id);
        $imgr=$this->saveIMG($request, 'image');

        $partner->update([
            'name'=>   $request->name,
            'image_p' =>    $imgr,
        ]);
        return redirect()->route('manage-partenaire.index')->with('success', 'Le partenaire a été modifier avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $partner=Partner::findOrFail($id);
        $partner->delete($request->all());
        return redirect()->route('manage-partenaire.index')->with('success', 'Le partenairea été suprimé avec succès !');

    }
}
