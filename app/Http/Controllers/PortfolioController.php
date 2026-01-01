<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Language;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Reference;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\WorkExperience;
use Inertia\Inertia;
use Inertia\Response;

class PortfolioController extends Controller
{
    public function index(): Response
    {
        $profile = Profile::active();
        $workExperiences = WorkExperience::ordered()->get();
        $educations = Education::ordered()->get();
        $skills = Skill::ordered()->get()->groupBy('category');
        $languages = Language::ordered()->get();
        $projects = Project::ordered()->with('skills')->get();
        $references = Reference::ordered()->get();
        $socialLinks = SocialLink::active()->ordered()->get();

        return Inertia::render('Portfolio/Index', [
            'profile' => $profile,
            'workExperiences' => $workExperiences,
            'educations' => $educations,
            'skills' => $skills,
            'languages' => $languages,
            'projects' => $projects,
            'references' => $references,
            'socialLinks' => $socialLinks,
        ]);
    }
}
