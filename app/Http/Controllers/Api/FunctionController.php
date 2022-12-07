<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public function UniqueCode()
    {
        $rand = rand(11111,99999);
        return $rand;
    }
}