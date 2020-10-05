<?php

namespace App\Http\Controllers;

use App\Models\Diplomas;
use App\Models\OcCertificates;
use App\Models\Projects;
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
        $this->diploma = Diplomas::all()->sortByDesc("obtained_on");
        $this->oc_certificate = OcCertificates::all()->sortByDesc("date");
        $this->project = Projects::all()->sortByDesc("date");
    }

    public function index()
    {

        $personal = $this->project->where('project_type', '=', '1');
        $school = $this->project->where('project_type', '=', '2');
        $client = $this->project->where('project_type', '=', '4');
        return view('publicside.home', [
            'skills' => $this->skills,
            'diplomas' => $this->diploma,
            'oc_certificates' => $this->oc_certificate,
            'personals' => $personal,
            'schools' => $school,
            'clients' => $client
        ]);
    }
}
