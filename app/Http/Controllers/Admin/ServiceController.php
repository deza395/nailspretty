<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;



class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('admin.services.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('name','id');
        return view('admin.services.create',compact('categories'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $service=Service::create($request ->all());
        if($request->file('file')){
            $url=Storage::put('posts',$request->file('file'));
            $service->image()->create([
                'url'=>$url
            ]);
            
        }
        return redirect()->route('admin.services.edit',$service)->with('info','el servicio se creo con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Service $service)
    {
        return view('admin.services.create', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $categories=Category::pluck('name','id');
        return view('admin.services.edit', compact('service','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest  $request, Service $service)
    {
        $service->update($request->all());
        if($request->file('file')){
          $url= Storage::put('posts',$request->file('file'));

          if($service->image){
              Storage::delete($service->image->url);

              $service->image->update([
                  'url'=>$url
              ]);

          }else{
              $service->image()->create([
               'url'=>$url
              ]);
          }
        }
        return redirect()->route('admin.services.edit',$service)->with('info','el servicio se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service ->delete();
        return redirect()->route('admin.servicies.index')->with('info','el servicio se elimino con exito');
    }
}
