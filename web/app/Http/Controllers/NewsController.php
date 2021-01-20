<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show index News
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $news=News::orderBy('id', 'Desc')->paginate();
        return view('news.index',compact('news'));
    }
    public function store(Request $request){
        $new = $request->all();
        $neww=News::create($new);
        return redirect()->route('index');
    }
    public function create(){
        return view('news.create');
    }
    public function show($id){
        $new = News::find($id);
        return view('news.show', compact('new'));
    }

    public function edit(){

    }
    public function destroy($id)
    {
        News::find($id)->delete();
        return back();
    }

    //get news Retrofit
    public function getNews(){
        $news=News::all();
        return response()->json($news);
    }
}
