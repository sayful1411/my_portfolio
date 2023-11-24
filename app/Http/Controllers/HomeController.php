<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(){
        $introData = DB::table('intro')->first();
        $aboutData = DB::table('abouts')->first();

        return view('index', compact('introData', 'aboutData'));
    }

    public function aboutMe(){
        $educationData = DB::table('educations')->get();
        $experienceData = DB::table('experiences')->get();
        $aboutData = DB::table('abouts')->first();

        return view('pages.resume', compact('educationData', 'experienceData', 'aboutData'));
    }

    public function projects(){
        $projectsData = DB::table('projects')->get();

        return view('pages.projects', compact('projectsData'));
    }

    public function showProject($projectID){
        $project = DB::table('projects')
                            ->join('projects_info', 'projects.id', '=', 'projects_info.project_id')
                            ->select('projects.*', 'projects_info.categories', 'projects_info.date', 'projects_info.tags', 'projects_info.website', 'projects_info.download')
                            ->where('project_id', $projectID)
                            ->first();

        // if project exist then show project data
        if ($project) {
            return view('pages.single-project', compact('project'));
        } else {
            abort(404);
        }
    }
}
