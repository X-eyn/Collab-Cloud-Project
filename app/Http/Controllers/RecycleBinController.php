<?php
namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class RecycleBinController extends Controller
{
    public function index()
    {
        // Get all trashed files
        $files = File::onlyTrashed()->paginate(20);
        return view('recycle-bin.index', compact('files'));
    }

    public function restore($id)
    {
        $file = File::onlyTrashed()->findOrFail($id);
        $file->restore();
        return redirect()->route('recycle-bin.index')->with('message', 'File restored successfully.');
    }

    public function destroy($id)
    {
        $file = File::onlyTrashed()->findOrFail($id);
        $file->forceDelete();
        return redirect()->route('recycle-bin.index')->with('message', 'File permanently deleted.');
    }
}
