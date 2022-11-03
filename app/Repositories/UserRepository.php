<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * Saves the resource in the database
     *
     * @param  object  $userData
     * @return \App\User
     */
    public function create($userData)
    {
        $user           = new User();
        $user->name     = $userData->name;
        $user->email    = $userData->email;
        $user->password = bcrypt($userData->password);
        $user->save();

        return $user;
    }
}