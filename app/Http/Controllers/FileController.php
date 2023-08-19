<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Obj;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {
        $object = Obj::query()
            ->with([
                'children.objectable',
                'ancestorsAndSelf.objectable'
            ])
            ->forCurrentTeam()
            ->where('uuid', $request->get('uuid', Obj::forCurrentTeam()->whereNull('parent_id')->first()->uuid))
            ->firstOrFail();

        return view('files', [
            'object' => $object,
            'ancestors' => $object->ancestorsAndSelf()->breadthFirst()->get()
        ]);
    }

    public function download(File $file)
{
    $this->authorize('download', $file);
    ActivityLog::create([
        'user_id' => auth()->id(),
        'team_id' => auth()->user()->currentTeam->id, // Include the current team ID
        'action' => 'file_download',
        'description' => 'Downloaded the file named ' . $file->name,
    ]);

    return Storage::disk('local')->download($file->path, $file->name);
}

}
