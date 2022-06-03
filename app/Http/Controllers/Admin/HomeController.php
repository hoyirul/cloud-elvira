<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $user = Admin::with('user')
                    ->where('user_id', Auth::user()->id)
                    ->first();
        return view('admin.home.index', compact('title'));
    }
}
