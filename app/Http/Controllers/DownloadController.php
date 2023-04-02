<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function downloadDdReport()
    {

        $file = public_path() . "/downloads/ddreport.pdf";
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, 'DD_Report.pdf', $headers);
    }
}
