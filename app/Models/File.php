<?php
namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes trait

class File extends Model
{
    use SoftDeletes; // Use the trait

    protected $fillable = [
        'name',
        'size',
        'path'
    ];

    protected $dates = ['deleted_at']; // Add the deleted_at column

    public function sizeForHumans()
    {
        $bytes = $this->size;

        $units = ['bytes', 'KB', 'MB', 'GB', 'TB', 'PB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 1) . ' ' . $units[$i];
    }

    public static function booted(): void
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });

        // Modify the deleting event to prevent physical deletion
        static::deleting(function ($model) {
            if (!$model->isForceDeleting()) {
                return;
            }

            Storage::disk('local')->delete($model->path);
        });
    }
}
