<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donald Trump";
        $age = "75";

        // Create an associative array with the variables
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set the cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1; // in minutes
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        // Create the cookie
        $cookie = cookie(
            $cookieName,
            $cookieValue,
            $cookieMinutes,
            $cookiePath,
            $cookieDomain,
            $cookieSecure,
            $cookieHttpOnly
        );

        // Return response with data, status code, and cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
