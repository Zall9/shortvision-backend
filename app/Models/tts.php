<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Schema::create('tts', function (Blueprint $table) {
//     $table->id();
//     $table->string('model');
//     $table->string('output_file_name');
//     $table->string('path');
//     $table->string('text');
//     $table->timestamps();
// });
class tts extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'output_file_name',
        'path',
        'text',
    ];
}
