<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class TodoController extends Controller
{
    public function test(TestRequest $request) {
        return response()->json(['message' => 'API working']);
    }
}
