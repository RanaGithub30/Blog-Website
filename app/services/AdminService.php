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

      public function user_list(){
            $users = User::where('user_type', 'user')->orderBy('id', 'desc')->paginate(20);
            return $users;
      }

      public function user_delete($userId){
            User::find($userId)->delete();
            return true;
      }

      public function user_edit($userId){
            $userDetails = User::find($userId);
            return $userDetails;
      }
      
      public function user_update($data, $userId){
            User::whereId($userId)->update([
                  'name' => $data['name'],
                  'email' => $data['email'],
            ]);

            return true;
      }
}