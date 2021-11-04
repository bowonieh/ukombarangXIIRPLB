<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        //
        echo "Halaman Dashboard";
        echo "<br>";
        echo "Jika anda ada dihalaman ini, berarti anda sudah login";
    }
}
