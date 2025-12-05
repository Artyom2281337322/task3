<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $reports = Report::with(['user', 'status'])
            ->latest()
            ->paginate(20);
        return view('admin.index', compact('reports'));
    }
}
