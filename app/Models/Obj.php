<?php

namespace App\Models;

use App\Models\Obj;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use App\Models\Traits\RelatesToTeams;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Obj extends Model
{
    use RelatesToTeams, HasRecursiveRelationships, Searchable;

    protected $table = 'objects';

    public $asYouType = true;

    protected $fillable = [
        'parent_id'
    ];

    public static function booted(): void
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });

        static::deleting(function ($model) {
            optional($model->objectable)->delete();
            $model->descendants->each->delete();
        });
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'team_id' => $this->team_id,
            'name' => $this->objectable->name,
            'path' => $this->ancestorsAndSelf->pluck('objectable.name')->reverse()->join('/')
        ];
    }

    public function objectable(): MorphTo
    {
        return $this->morphTo();
    }

    public function children()
    {
        return $this->hasMany(Obj::class, 'parent_id','id');
    }
}
