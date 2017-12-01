<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}

	/**
	 * edit users
	 */
	public function edit(User $user)
	{
		return view('users.edit',compact('user'));
	}

	/**
	 * @param \App\Http\Controllers\UserRequest $request
	 * @param \App\Models\User                  $user
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 * @update user info mations
	 */
	public function update(UserRequest $request , User $user)
	{
		$user->update($request->all());
		return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
	}


}
