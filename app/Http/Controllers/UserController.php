<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function filter(Request $request)
    {
        try {
            $data = UserModel::with('language', 'religion')
                ->join('childrens', 'childrens.user_id', 'users.id')
                ->where(function ($query) use ($request) {
                    if ($request->filter['name']) {
                        $query->where('users.name', $request->filter['name']);
                    }
                    if ($request->filter['age'] && filter_var($request->filter['age'], FILTER_VALIDATE_INT) === true) {
                        $query->where('users.age', $request->filter['age']);
                    }
                    if ($request->filter['gender'] && filter_var($request->filter['gender'], FILTER_VALIDATE_INT) === true) {
                        $query->where('users.gender', $request->filter['gender']);
                    }
                    if ($request->filter['location']) {
                        $query->where('users.location', $request->filter['location']);
                    }
                })
                ->paginate(15);


            return response()->json([
                'users' => $data,
            ]);
        } catch (\Exception $e) {
            return $e;
        }
    }
}
