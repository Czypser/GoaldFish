<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $CreateUser = DB::insert('insert into users (user_id, first_name, last_name, email, username, password) values (?, ?)', [1, 'Dayle']);
    }
}