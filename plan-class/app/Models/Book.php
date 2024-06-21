<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'books';

    protected $fillable = [
        'author',
        'title',
        'subtitle',
        'edition',
        'publishing_company',
        'year_of_publication',
        'book_cover',
    ];

    public function relUsers(){
        return $this->hasMany('App\Models\User', foreignKey:'id', localKey:'user_id');
    }

}
