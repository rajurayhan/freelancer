<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Skill;
use App\Contact;
use App\Education;
use App\Experience;
use App\Portfolio;

class HomeController extends Controller
{
    public function home(){

        $profileObj     = new Profile();
        $profile        = $profileObj->first();

        $skillObj       = new Skill();
        $skill          = $skillObj->where('publish', 'Published')->orderBy('name', 'ASC')->get();

        $contactObj     = new Contact();
        $contact        = $contactObj->first();

        $educationObj   = new Education();
        $education      = $educationObj->get();

        $experienceObj  = new Experience();
        $experience     = $experienceObj->get();

        $portfolioObj   = new Portfolio();
        $portfolio      = $portfolioObj->get();

        return view('home', ['profile' => $profile, 'skills' => $skill, 'contact' => $contact, 'education' => $education, 'experience' => $experience, 'portfolio' => $portfolio]);
    }
}
