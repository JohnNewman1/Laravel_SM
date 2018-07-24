<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

    public function postSignUp(Request $request) {
        $email = $request['email'];
        $password = $request['password'];
    }

    public function postSignIn(Request $request) {

    }
}