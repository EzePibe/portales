<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $users = User::all();
        /* echo '<pre>';
        print_r($users->user());
        echo '</pre>';
        exit; */
        return view('admin.index', [
            'users' => $users
        ]);
    }
}
