<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function services(){
        return view("pages.services.index",[
            "services" => Services::all()
        ]);
    }

    public function servicesCreate(){
        return view("pages.services.add");
    }

    public function servicesDoCreate(Request $request){
        // dd("devanno andhika putra");
        // dd($request->all());

        $services = new Services();
        $services->name = $request->name;
        $services->price = $request->price;
        $services->save();
        return redirect("/services");
    }

    public function servicesEdit($id){
        // dd($id);
        return view("pages.services.edit",[
            "services" => Services::find($id)
        ]);
    }

    public function servicesDoEdit(Request $request, $id){
        $services = Services::find($id);
        $services->name = $request->name;
        $services->price = $request->price;
        $services->save();
        return redirect("/services");
    }

    public function servicesDoDelete($id){
        $services = Services::find($id);
        $services->delete();
        return redirect("/services");
    }

    public function faq(){
        return view("pages.faq.index");
    }

    public function portofolio(){
        return view("pages.portofolio.index");
    }

    public function blog(){
        return view("pages.blog.index");
    }

    public function contact(){
        return view("pages.contact.index");
    }
}