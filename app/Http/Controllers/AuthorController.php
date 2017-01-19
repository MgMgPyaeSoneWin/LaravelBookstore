<?php

namespace App\Http\Controllers;

use App\author;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AuthorController extends Controller
{
    //
    public function index()
    {
        return view('author');
    }
    public function create()
    {
        $rules = array(
            'name'       => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            echo "Invalid Data";die();
        } else {

            $author = new author;
            $author->name = Input::get('name');
            $author->save();
            echo "Saved";die();
        }
    }
}
