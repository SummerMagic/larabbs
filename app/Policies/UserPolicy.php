<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

	/**
	 * @param \App\Models\User $currentUser
	 * @param \App\Models\User $user
	 *
	 * @return bool 指定用户更新自已的信息
	 */
	public function update(User $currentUser, User $user)
	{
		return $currentUser->id === $user->id;
	}
}
