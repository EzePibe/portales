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
    
    public function formEdit($id) {
        $character = Character::findOrFail($id);
        return view('characters.edit', [
            'character' => $character
        ]);
    }
    
    public function create(Request $request) {
        $data  = $request->all();
        $request->validate(
            Character::rules(),
            Character::rulesTexts()
        );
        $request->validate(
            Character::rulesImage(),
            Character::rulesImageTexts()
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

    public function edit(Request $request, $id)
    {
        $request->validate(Character::rules(), Character::rulesTexts());

        $data = $request->input();

        $character = Character::findOrFail($id);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . "." . $file->clientExtension();
            $file->storeAs('characters', $image, 'public');
            $data['image'] = $image;
            $lastImage = $character->image; // Guardamos el nombre "viejo" para poder eliminarla.
        }

        // Editamos.
        $character->update($data);

        // Si no hubo error de edición, eliminamos la imagen anterior, si la cambiaron.
        if($request->hasFile('image')) {
            unlink(public_path('storage/characters/' . $lastImage));
        }

        return redirect()
            ->route('characters.index')
            ->with('message.success', 'Agente ' . $character->name . ' editado correctamente.');
    }

    public function delete($id) {
        $characters = Character::findOrFail($id);
        $image = $characters->image; 
        $characters->delete();

        if($characters->_hasImage()) {
            unlink(public_path('storage/characters/' . $image));
        }

        return redirect()->route('characters.index')
        ->with('message.success', 'Agente "' . $characters->name . '" eliminado correctamente');
    }
}
