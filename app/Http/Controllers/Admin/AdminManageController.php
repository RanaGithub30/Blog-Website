<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\{AdminService};

class AdminManageController extends Controller
{
    //

    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function dashboard(){
           $res = $this->adminService->dashboard();
           return view('admin.dashboard', compact('res'));
    }
}