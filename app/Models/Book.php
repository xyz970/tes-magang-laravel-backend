<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    
    protected $fillable = [
        'title', 'author', 'cover', 'publisher', 'country', 'publish_date', 'desc', 'status'
    ];

    protected function id(): Attribute {
        return Attribute::make(
            set: fn() => Str::uuid(),
        );
    }
}
