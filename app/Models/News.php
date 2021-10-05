<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\News
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $date
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class News extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'text', 'date', 'image'];


    /*
    * @return Array
    */
    public static function rules() {
        return [
            'title' => 'required|min:2',
            'text' => 'required|min:2',
            'image' => 'mimes:jpg,webp,png',
        ];
    } 
    
    /*
    * @return Array
    */
    public static function rulesTexts() {
        return [
            'title.required' => 'El título es obligatorio',
            'title.min' => 'El título debe tener por lo menos 2 caracteres',
            'text.required' => 'El texto es obligatorio',
            'text.min' => 'El texto debe tener por lo menos 2 caracteres',
            'image.mimes' => 'Solo se permiten imagenes del tipo JPG, WEBP y PNG',
        ];
    } 

    /*
    * @return bool
    */
    public function _hasImage() {
        return $this->image != '' && file_exists(public_path('/storage/imgs/' . $this->image));
    }
}
