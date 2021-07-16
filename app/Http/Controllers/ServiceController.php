<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
 public function index(){
     $services =Service::where('status', 2)->get();
     $categories=Category::pluck('name','id');

     return view('front.servicios', compact('services','categories'));
 }
}
