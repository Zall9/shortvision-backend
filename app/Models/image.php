<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'url_image',
        'project_id',
    ];

    // Schema::create('image', function (Blueprint $table) {
    //     $table->id();
    //     $table->string('name');
    //     $table->string('path');
    //     $table->string('url_image');
    //     $table->string('project_id');
    //     $table->timestamps();
    // });

}
