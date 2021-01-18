<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

    }
    public function store(Request $request){
        $request->save();
    }
    public function saveNews(Request $request){
        $p=new News($request->all());
        $this->store($p);
        return response('welcome');
    }
}
