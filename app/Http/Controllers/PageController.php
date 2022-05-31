<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.books.index');
    }

    public function show($id){
        return view('pages.books.show');
    }

    public function cart($id){
        return view('pages.carts.index');
    }

    public function cart_edit($id){
        return view('pages.carts.edit');
    }

    public function checkout_detail($id){
        return view('pages.checkouts.index');
    }

    public function checkout(Request $request, $id){
        
    }

    public function dashboard(){
        return view('pages.dashboard.index');
    }

    public function transaction(){
        return view('pages.transactions.index');
    }

    public function transaction_detail(){
        return view('pages.transactions.detail');
    }

    public function change_password(){
        return view('pages.settings.change_password');
    }
}
