<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class NewsController extends Controller
{

    public function index(){

        $news=News::orderBy('id', 'ASC')->paginate();
        return view('news.index',compact('news'));
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
