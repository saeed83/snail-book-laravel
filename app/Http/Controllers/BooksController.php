<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        // List all books
        return view('books.list', ['name' => 'James']);
    }

    public function create(Request $request){
        
    }
    public function get($id){

    }
    public function list($id){

    }

}
