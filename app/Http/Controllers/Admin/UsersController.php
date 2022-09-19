<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function users(){
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function viewUser($id){
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
    }
}
