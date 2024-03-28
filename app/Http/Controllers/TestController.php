<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
        $result1 = User::first();
        $result2 = User::get();
        $i = 1;
        // $data = [
        //     'u_email' => 'asdf',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ];
        // User::create($data);

        return view('test',
        ['result1' => $result1,
        'result2' => $result2,]);
    }
}
