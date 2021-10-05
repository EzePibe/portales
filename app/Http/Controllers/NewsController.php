<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::all();
        return view('news.index', [
            'news' => $news
        ]);
    }
    
    public function news_id($id) {
        $news = News::findOrFail($id);
        return view('news.news', [
            'news' => $news
        ]);
    }
    
    public function form() {
        return view('news.form');
    }
    
    public function create(Request $request) {
        $data  = $request->all();
        $request->validate(
            News::rules(),
            News::rulesTexts()
        );
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $data['image'] = time() . '.' . $file->extension();
            $file->storeAs('imgs', $data['image'], 'public');
        }

        $data['date'] = date('Y-m-d H-i-s');
        News::create($data);
        return redirect()->route('news.form')
        ->with('message.success', 'Noticia creada correctamente');
    }

    public function delete($id) {
        $news = News::findOrFail($id);
        $image = $news->image; 
        $news->delete();

        if($news->_hasImage()) {
            unlink(public_path('storage/imgs/' . $image));
        }

        return redirect()->route('news.index')
        ->with('message.success', 'Noticia "' . $news->title . '" eliminada correctamente');
    }
}
