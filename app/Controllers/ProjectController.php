<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProjectController extends BaseController
{
    public function index()
    {
        return view('pages/projects/index');
    }
}
