<?php

namespace App\Policies;

use App\Models\Blog;
use App\Models\User;

class BlogPolicy
{
    public function viewAny(User $user): bool { return $user->can('manage blogs'); }
    public function view(User $user, Blog $blog): bool { return $user->can('manage blogs'); }
    public function create(User $user): bool { return $user->can('manage blogs'); }
    public function update(User $user, Blog $blog): bool { return $user->can('manage blogs'); }
    public function delete(User $user, Blog $blog): bool { return $user->can('manage blogs'); }
    public function restore(User $user, Blog $blog): bool { return $user->can('manage blogs'); }
    public function forceDelete(User $user, Blog $blog): bool { return $user->can('manage blogs'); }
}
