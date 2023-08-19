<?php
namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes trait

class Folder extends Model
{
    use SoftDeletes; // Use the trait

    protected $fillable = [
        'name'
    ];

    protected $dates = ['deleted_at']; // Add the deleted_at column

    public static function booted(): void
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
