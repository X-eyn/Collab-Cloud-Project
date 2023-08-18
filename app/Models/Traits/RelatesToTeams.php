<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait RelatesToTeams
{
    public function scopeForCurrentTeam(Builder $query): void
    {
        $query->where('team_id', auth()->user()->currentTeam->id);
    }
}
