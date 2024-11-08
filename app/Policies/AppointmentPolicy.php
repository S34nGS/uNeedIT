<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\User;

class AppointmentPolicy
{
    /**
     * Create a new policy instance.
     */
    public function viewAny(User $user)
    {
        return $user->role === 'admin';
    }

    public function view(User $user, Appointment $appointment)
    {
        return $user->role === 'admin' || $user->id === $appointment->user_id;
    }
}
