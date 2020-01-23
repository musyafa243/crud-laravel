<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use DataTables;

class UserController extends Controller
{
    public function json()
    {
        return Datatables::of(item::all())->make(true);
    }
    public function index()
    {
        return view('list_users');
    }
}
