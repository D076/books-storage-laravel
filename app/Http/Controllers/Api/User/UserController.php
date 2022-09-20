<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;


class UserController extends Controller
{
    public function users()
    {
        return UserResource::collection(User::withCount('books')->get());
    }

    public function show($user)
    {
        return new UserResource(User::findOrFail($user));
    }

    public function update(UpdateRequest $request, $user)
    {
        $user_id = $request->user()->id;
        if ($user_id == $user) {
            $user = User::findOrFail($user);
            $data = $request->validated();
            $user->update($data);
            return new UserResource($user);
        }
        else
            return response('You have no permission', 403);
    }
}
