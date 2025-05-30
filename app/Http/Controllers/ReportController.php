<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index()
    {
        // Example: fetch devices or assignments for the report
        $data = []; // Replace with actual data fetching
        return view('reports', compact('data'));
    }

    public function exportPdf()
    {
        $data = []; // Replace with actual data fetching
        $pdf = Pdf::loadView('reports_pdf', compact('data'));
        return $pdf->download('report.pdf');

    }

    public function exportExcel()
    {
        $data = []; // Replace with actual data fetching
        return Excel::download(new \App\Exports\ReportExport($data), 'report.xlsx');
    }
}
