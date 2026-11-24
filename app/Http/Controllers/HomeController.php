<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Feature;
use App\Models\info;
use App\Models\Logo;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SkillsType;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Reuse the existing content tables and admin CRUD.
        $homeAbout = About::latest()->first();

        $Services = Service::latest()->get();
        $Features = Feature::latest()->get();
        $projects = Project::with('categorie')->latest()->take(6)->get();
        $Clients = Client::latest()->get();
        $Logos = Logo::latest()->get();
        $Testimonials = Testimonial::latest()->get();
        $Skill_item = SkillsType::with('skill')->get();
        $infos = info::latest()->first();

        // Statistics are calculated from real database records (no fake counters).
        $stats = [
            [
                'value' => $infos && is_numeric($infos->experience) ? (int) $infos->experience : null,
                'suffix' => '+',
                'label' => 'Years Experience',
                'icon' => 'Frontend/images/icons/startup.svg',
            ],
            [
                'value' => Team::count(),
                'suffix' => '+',
                'label' => 'Team Members',
                'icon' => 'Frontend/images/icons/team.svg',
            ],
            [
                'value' => Project::count(),
                'suffix' => '+',
                'label' => 'Projects',
                'icon' => 'Frontend/images/icons/computers.svg',
            ],
            [
                'value' => Service::count(),
                'suffix' => '+',
                'label' => 'Services',
                'icon' => 'Frontend/images/icons/mobile.svg',
            ],
            [
                'value' => Client::count(),
                'suffix' => '+',
                'label' => 'Clients',
                'icon' => 'Frontend/images/icons/world.svg',
            ],
            [
                'value' => Skill::count(),
                'suffix' => '+',
                'label' => 'Skills',
                'icon' => 'Frontend/images/icons/deal.svg',
            ],
        ];

        return view('pages.Home', compact(
            'homeAbout',
            'Services',
            'Features',
            'projects',
            'Clients',
            'Logos',
            'Testimonials',
            'Skill_item',
            'infos',
            'stats'
        ));
    }
}
