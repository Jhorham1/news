<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class NewsController extends Controller
{
    /**
     *  Authenticator method
     *
     * NewsController constructor.
     */
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
        $q=0;
        return view('news.index',compact('news','q'));
    }

    public function indexpage($q){

    }

    /**
     * Save News in the database
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $new = $request->all();
        $new=News::create($new);
        return redirect()->route('index');
    }

    /**
     * Show create view
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(){
        return view('news.create');
    }

    /**
     * Show a New whit a Id
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id){
        $new = News::find($id);
        return view('news.show', compact('new'));
    }

    /**
     * Delete a New
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
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
