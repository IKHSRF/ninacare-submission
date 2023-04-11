<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function filter(Request $request) {
        try {
            $data = UserModel::wh
        } catch(\Exception $e) {
            return $e;
        }
    }
}
