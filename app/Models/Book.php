<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'boo_title',
        'boo_description',
        'boo_abstract',
        'boo_date_published',
        'boo_isbn',
        'boo_author',
    ];
}
