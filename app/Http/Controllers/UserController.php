<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;


class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();
        return view('index', ['users' => $users]);
    }

}