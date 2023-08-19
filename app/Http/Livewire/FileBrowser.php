<?php

namespace App\Http\Livewire;

use App\Models\Obj;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ActivityLog;


class FileBrowser extends Component
{
    use WithFileUploads;

    public $query;
    public $upload;
    public $object;
    public $ancestors;

    public $creatingNewFolder = false;
    public $newFolderState = [
        'name' => ''
    ];

    public $renamingObject;
    public $renamingObjectState = [
        'name' => ''
    ];

    public $showingFileUploadForm = false;

    public $confirmingObjectDeletion;

    public function getResultsProperty()
    {
        if (strlen($this->query)) {
            return Obj::search($this->query)
                ->where('team_id', $this->currentTeam->id)
                ->get();
        }

        return $this->object->children;
    }

    public function deleteObject()
    {
        Obj::forCurrentTeam()->find($this->confirmingObjectDeletion)->delete();
    
        // Log the deletion activity
        ActivityLog::create([
            'user_id' => auth()->user()->id,
            'team_id' => auth()->user()->currentTeam->id,
            'action' => 'file_delete',
            'description' => 'File/folder deleted'
        ]);
    
        $this->confirmingObjectDeletion = null;
        $this->object = $this->object->fresh();
    }
    

    public function updatedUpload($upload)
    {
        $object = $this->currentTeam->objects()->make([
            'parent_id' => $this->object->id
        ]);

        $object->objectable()->associate(
            $this->currentTeam->files()->create([
                'name' => $upload->getClientOriginalName(),
                'size' => $upload->getSize(),
                'path' => $upload->storePublicly(
                    'files', [
                        'disk' => 'local'
                    ]
                )
            ])
        );

        $object->save();

        $this->object = $this->object->fresh();
    }

    public function renameObject()
    {
        $this->validate([
            'renamingObjectState.name' => 'required|max:255'
        ]);

        Obj::forCurrentTeam()->find($this->renamingObject)->objectable->update($this->renamingObjectState);

        $this->object = $this->object->fresh();

        $this->renamingObject = null;
    }

    public function updatingRenamingObject($id)
    {
        if ($id === null) {
            $this->reset($this->renamingObjectState);
        }

        if ($object = Obj::forCurrentTeam()->find($id)) {
            $this->renamingObjectState = [
                'name' => $object->objectable->name
            ];
        }
    }

    public function createFolder()
    {
        $this->validate([
            'newFolderState.name' => 'required|max:255'
        ]);
    
        $object = $this->currentTeam->objects()->make([
            'parent_id' => $this->object->id
        ]);
    
        $folder = $this->currentTeam->folders()->create($this->newFolderState);
        $object->objectable()->associate($folder);
        $object->save();
    
        // Log the folder creation activity
        ActivityLog::create([
            'user_id' => auth()->user()->id,
            'team_id' => auth()->user()->currentTeam->id,
            'action' => 'folder_create',
            'description' => 'Folder created'
        ]);
    
        $this->reset([
            'creatingNewFolder',
            'newFolderState'
        ]);
    
        // Reload entire component
        $this->object = $this->object->fresh();
    }
    

    public function getCurrentTeamProperty()
    {
        return auth()->user()->currentTeam;
    }

    public function render()
    {
        return view('livewire.file-browser');
    }
}
