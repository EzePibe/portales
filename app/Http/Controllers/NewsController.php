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

    public function formEdit($id) {
        $news = News::findOrFail($id);
        return view('news.edit', [
            'news' => $news
        ]);
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

    public function edit(Request $request, $id)
    {
        $request->validate(News::rules(), News::rulesTexts());

        $data = $request->input();

        $news = News::findOrFail($id);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . "." . $file->clientExtension();
            $file->storeAs('imgs', $image, 'public');
            $data['image'] = $image;
            $lastImage = $news->image; // Guardamos el nombre "viejo" para poder eliminarla.
        }

        // Editamos.
        $news->update($data);

        // Si no hubo error de edición, eliminamos la imagen anterior, si la cambiaron.
        if($request->hasFile('image')) {
            unlink(public_path('storage/imgs/' . $lastImage));
        }

        return redirect()
            ->route('news.index')
            ->with('message.success', 'Noticia editada correctamente.');
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
