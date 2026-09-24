<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        // The controller passes database results to the existing presentation layer.
        return view('users/index', [
            'title'      => 'User Accounts',
            'activePage' => 'users',
            'users'      => $userModel->orderBy('id', 'ASC')->findAll(),
        ]);
    }
}
