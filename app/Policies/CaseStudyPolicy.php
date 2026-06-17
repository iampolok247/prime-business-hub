<?php

namespace App\Policies;

use App\Models\CaseStudy;
use App\Models\User;

class CaseStudyPolicy
{
    public function viewAny(User $user): bool { return $user->can('manage case studies'); }
    public function view(User $user, CaseStudy $caseStudy): bool { return $user->can('manage case studies'); }
    public function create(User $user): bool { return $user->can('manage case studies'); }
    public function update(User $user, CaseStudy $caseStudy): bool { return $user->can('manage case studies'); }
    public function delete(User $user, CaseStudy $caseStudy): bool { return $user->can('manage case studies'); }
    public function restore(User $user, CaseStudy $caseStudy): bool { return $user->can('manage case studies'); }
    public function forceDelete(User $user, CaseStudy $caseStudy): bool { return $user->can('manage case studies'); }
}
