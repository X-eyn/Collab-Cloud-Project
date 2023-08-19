<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityLog;

class ActivityLogController extends Controller
{
    public function index()
    {
        $teamId = auth()->user()->currentTeam->id;
        $logs = ActivityLog::with(['user', 'team'])
                    ->where('team_id', $teamId)
                    ->latest()
                    ->paginate(20);

        return view('activity-log.index', compact('logs'));
    }
}
