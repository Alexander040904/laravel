<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;
    protected $table = 'pots';
    protected function title():Attribute{
    /*     mutadores: set get :accesores */
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            }, get: function($value){
                return ucfirst($value);
            }
        );

    }



}
