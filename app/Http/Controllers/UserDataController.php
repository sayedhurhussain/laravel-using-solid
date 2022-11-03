<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Repositories\UserRepository;

class UserDataController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request\StoreUserRequest  $request
     * @param  \App\Repositories\UserRepository    $userRepository
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request, UserRepository $userRepository)
    {
        $user = $userRepository->create($request);

        return response()->json(['user' => $user], 201);

    }
}
