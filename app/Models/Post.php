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

    protected function casts(){
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }
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
   /*  protected $fillable = [
        'title',
        'slug',
        'category',
        'content',
        
    ]; */
    protected $guarded = [
        'is_active',
       
    ];
    public function getRouteKeyName(){
        return "slug";
    }



}
