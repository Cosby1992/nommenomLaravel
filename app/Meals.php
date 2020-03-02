<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{

    protected $fillable = [
        'name',
        'description',
        'origin_country',
        'category',
        'image'
    ];


    /*  |||||||||||| FROM MEALS MIGRATIONS |||||||||||

        $table->bigIncrements('id');
        $table->string('name');
        $table->string('description');
        $table->string('origin_country');
        $table->string('category');
        $table->string('image');
        $table->timestamps();
    */
}
