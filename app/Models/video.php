<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'url_video',
        'project_id',
    ];

    // Schema::create('video', function (Blueprint $table) {
    //     $table->id();
    //     $table->string('name');
    //     $table->string('path');
    //     $table->string('url_video');
    //     $table->string('project_id');
    //     $table->timestamps();
    // });

}
