<?php

namespace App\Policies;

use App\Models\User;
use App\Models\File;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilePolicy
{
    use HandlesAuthorization;

    public function download(User $user, File $file): bool
    {
        return $file->team_id === $user->currentTeam->id;
    }
}
