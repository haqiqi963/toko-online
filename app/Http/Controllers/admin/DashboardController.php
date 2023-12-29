<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $userCount = User::count();
        $adminCount = User::whereIsMember('!=', 1)->count();

        return view('admin.page.dashboard', compact(['userCount', 'productCount', 'adminCount']));
    }
}
