<?php
namespace App\Services;

class AuthService{
        public function registration($data){
                $register = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                ]);

                return true;
        }
}