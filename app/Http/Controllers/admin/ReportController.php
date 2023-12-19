<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.page.report');
    }
}
