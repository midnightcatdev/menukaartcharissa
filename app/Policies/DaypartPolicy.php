<?php

namespace App\Policies;

use App\Models\Daypart;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DaypartPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Daypart $daypart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Daypart $daypart)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role_id === 1;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Daypart $daypart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Daypart $daypart)
    {
        return $user->role_id === 1;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Daypart $daypart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Daypart $daypart)
    {
        return $user->role_id === 1;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Daypart $daypart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Daypart $daypart)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Daypart $daypart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Daypart $daypart)
    {
        //
    }
}
