<?php

namespace App\Policies;

use App\Models\Student;
use App\Models\User;
use App\Services\Nds\PaymentService;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    use HandlesAuthorization;

    public function printAdmissionForm(User $student) :bool
    {
        return PaymentService::hasPaid("Admission Fees");
    }


}
