<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class NewsController extends Controller
{
    /**
     * Show index News
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $news=News::orderBy('id', 'ASC')->paginate();
        return view('news.index',compact('news'));
    }
    public function store(Request $request){
        $new = $request->all();
        $neww=News::create($new);
        return redirect()->route('news.index');
    }
    public function create(){
        return view('news.create');
    }
    public function saveNews(Request $request){
        $p=new News($request->all());
        $this->store($p);
        return response('welcome');
    }
}
