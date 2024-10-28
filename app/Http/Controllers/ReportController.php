<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $report = Employee::with('educationLevel')
            ->whereHas('department', function ($query) {
                $query->whereIn('id', function ($subQuery) {
                    $subQuery->select('department_id')
                             ->from('ds_employees')
                             ->groupBy('department_id')
                             ->havingRaw('SUM(salary) > 250000');
                });
            })
            ->orderBy('last_name')
            ->get(['last_name', 'education_level_id']);

        return view('reports.index', compact('report'));
    }
}
