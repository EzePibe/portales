<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index() {
        $characters = Character::all();
        return view('characters.index', [
            'characters' => $characters
        ]);
    }
    
    public function character($id) {
        $character = Character::findOrFail($id);
        return view('characters.character', [
            'character' => $character
        ]);
    }
    
    public function form() {
        return view('characters.form');
    }
    
    public function create(Request $request) {
        $data  = $request->all();
        $request->validate(
            Character::rules(),
            Character::rulesTexts()
        );
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $data['image'] = time() . '.' . $file->extension();
            $file->storeAs('characters', $data['image'], 'public');
        }
        Character::create($data);
        return redirect()->route('characters.form')
        ->with('message.success', 'Agente creado correctamente');
    }

    public function delete($id) {
        $characters = Character::findOrFail($id);
        $image = $characters->image; 
        $characters->delete();

        if($characters->_hasImage()) {
            unlink(public_path('storage/characters/' . $image));
        }

        return redirect()->route('characters.table')
        ->with('message.success', 'Agente "' . $characters->name . '" eliminado correctamente');
    }
}
