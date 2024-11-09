<?php

namespace App\Services;
use App\Models\User;

class AdminService{
      public function dashboard(){
             $totalUsers = count(User::where('user_type', 'user')->get());

             $data = [
                'totalUsers' => $totalUsers,
             ];

             return $data;
      }
}