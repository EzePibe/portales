<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = "characters";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 
        'role', 
        'image', 
        'biography',
        'q_title',
        'q_text',
        'e_title',
        'e_text',
        'c_title',
        'c_text',
        'x_title',
        'x_text'
    ];


    /*
    * @return Array
    */
    public static function rules() {
        return [
            'name' => 'required|min:2',
            'role' => 'required|min:2',
            'image' => 'required|mimes:jpg,webp,png',
            'biography' => 'required|min:2',
            'q_title' => 'required|min:2',
            'q_text' => 'required|min:2',
            'e_title' => 'required|min:2',
            'e_text' => 'required|min:2',
            'c_title' => 'required|min:2',
            'c_text' => 'required|min:2',
            'x_title' => 'required|min:2',
            'x_text' => 'required|min:2',
        ];
    } 
    
    public static function rulesTexts() {
        return [
            'name.required' => 'El Nombre es obligatorio',
            'role.required' => 'El Rol es obligatorio',
            'image.required' => 'La imagen es obligatoria',
            'biography.required' => 'La biografía es obligatoria',
            'q_title.required' => 'El título de la habilidad Q es obligatorio',
            'q_text.required' => 'El texto de la habilidad Q es obligatorio',
            'e_title.required' => 'El título de la habilidad E es obligatorio',
            'e_text.required' => 'El texto de la habilidad E es obligatorio',
            'c_title.required' => 'El título de la habilidad C es obligatorio',
            'c_text.required' => 'El texto de la habilidad C es obligatorio',
            'x_title.required' => 'El título de la habilidad X es obligatorio',
            'x_text.required' => 'El texto de la habilidad X es obligatorio',
            
            'name.min' => 'El Nombre debe tener por lo menos 2 caracteres',
            'role.min' => 'El Rol debe tener por lo menos 2 caracteres',
            'image.mimes' => 'Solo se permiten imagenes del tipo JPG, WEBP y PNG',
            'biography.min' => 'La biografía debe tener por lo menos 2 caracteres',
            'q_title.min' => 'El título de la habilidad Q debe tener por lo menos 2 caracteres',
            'q_text.min' => 'El texto de la habilidad Q debe tener por lo menos 2 caracteres',
            'e_title.min' => 'El título de la habilidad E debe tener por lo menos 2 caracteres',
            'e_text.min' => 'El texto de la habilidad E debe tener por lo menos 2 caracteres',
            'c_title.min' => 'El título de la habilidad C debe tener por lo menos 2 caracteres',
            'c_text.min' => 'El texto de la habilidad C debe tener por lo menos 2 caracteres',
            'x_title.min' => 'El título de la habilidad X debe tener por lo menos 2 caracteres',
            'x_text.min' => 'El texto de la habilidad X debe tener por lo menos 2 caracteres',
        ];
    } 

    /*
    * @return bool
    */
    public function _hasImage() {
        return $this->image != '' && file_exists(public_path('/storage/characters/' . $this->image));
    }
}
