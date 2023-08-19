<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;



class ActivityLog extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'action', 'description'];
    public function user() {
        return $this->belongsTo(User::class);
        }


}

