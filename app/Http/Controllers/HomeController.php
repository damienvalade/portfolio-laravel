<?php

namespace App\Http\Controllers;

use App\Models\Diploma;
use App\Models\OcCertificate;
use App\Models\Project;
use App\Models\Skills;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $skills;
    public $diploma;
    public $oc_certificate;
    public $project;

    public function __construct()
    {
        $this->skills = Skills::all();
        $this->diploma = Diploma::all();
        $this->oc_certificate = OcCertificate::all();
        $this->project = Project::all();
    }

    public function index()
    {
        return view('publicside.home', [
            'skills' => $this->skills,
            'diploma' => $this->diploma,
            'oc_certificate' => $this->oc_certificate,
            'project' => $this->project,
        ]);
    }
}
