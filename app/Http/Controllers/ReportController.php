<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
   public function index(Request $request) {
    $sort = $request -> input('sort');
    if ($sort == 'asc' || $sort == 'desc'){
        $reports = Report::orderBy('created_at', $sort) -> paginate(5);
        
    }
    else {
        $reports = Report::paginate(5);
        
    }

    $status = $request -> input('status');
    $validate = $request -> validate([
        'status' => "exists:statuses,id"
    ]);
    if($validate){
        $reports = Report::where('status_id', $status) -> paginate(5);
    }
    else {
        $reports = Report::paginate(5);
    }

    $statuses = Status::all();
    return view('report.index', compact('reports', 'statuses'));
    }

    public function destroy(Report $report) {
        $report -> delete();
        return redirect() -> back();
    }

    public function store(Request $request, Report $report) {
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string'
        ]);

        $report -> create($data);
        return redirect() -> back();
    }

    public function edit(Report $report) {
        return view('report.edit', compact('report'));
    }

    function update(Request $request, Report $report) {
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string'
        ]);

        $report -> update($data);
        return redirect() -> back();
    }
}
