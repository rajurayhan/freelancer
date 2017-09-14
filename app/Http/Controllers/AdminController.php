<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

use App\Profile;
use App\Skill;
use App\Contact;
use App\Education;
use App\Experience;
use App\Portfolio;

class AdminController extends Controller
{
    public function admin(){
    	return view('backend.dashboard');
    }

    public function profile(){

    	$profileObj 	= new Profile();
    	$profile 		= $profileObj->first();
        $contactObj     = new Contact();
        $contact        = $contactObj->first();

    	// if($profile){
    	// 	return view('backend.profile.profile', array(
    	// 		'profile' => $profile
    	// 	));
    	// }
    	// else{
    	// 	return view('backend.profile.profile');
    	// }
        return view('backend.profile.profile', array(
             'profile' => $profile,
             'contact' => $contact
         ));


    }

    public function bio(){

        $profileObj     = new Profile();
        $profile        = $profileObj->first();

    	return view('backend.profile.bio', ['profile'  => $profile]);
    }

    public function postPprofile(Request $request){
    	$name 			= $request->name;
    	$designation 	= $request->designation;
        $facebook       = $request->facebook;
        $linkedin       = $request->linkedin;
        $twitter        = $request->twitter;
        $skype          = $request->skype;


    	$email 			= $request->email;
    	$phone 			= $request->phone;
    	$address 		= $request->address;
    	$city 			= $request->city;
        $country        = $request->country;
        $photo          = $request->profile_pic;
    	


    	$profileObj 	= new Profile();

        $profile        = $profileObj->first();
        if($profile){
            $profileObj     = $profile;
        }

    	$contactObj 	= new Contact();

        $profileObj->name           = $name;
        $profileObj->designation    = $designation;
        $profileObj->facebook       = $facebook;
        $profileObj->linkedin       = $linkedin;
        $profileObj->twitter        = $twitter;
        $profileObj->skype          = $skype;


        $contactObj->email           = $email;
        $contactObj->phone           = $phone;
        $contactObj->address         = $address;
        $contactObj->city            = $city;
        $contactObj->country         = $country;


        // // $image = Input::file('profile_pic');
        // $filename  = time() . '.' . $photo->getClientOriginalExtension();
        // // $path = public_path('images/profile/' . $filename);
        // $path    = url('/').'images/profile/'.$filename;
        // Image::make($photo->getRealPath())->save($path);
        // $profileObj->image = $filename;


        $contactObj->save();
        $profileObj->save();

        return redirect()->back();

    }

    public function postBio(Request $request){

        $bio           = $request->bio;
        $profileObj     = new Profile();

        $profile        = $profileObj->first();
        if($profile){
            $profileObj     = $profile;
        }

        $profileObj->bio            = $bio;

        $profileObj->save();

        return redirect()->back();
    }

    public function skills(){

        $skillObj   = new Skill();
        $skill      = $skillObj->orderBy('name', 'ASC')->get();
        return view('backend.skill.skills', ['skills' => $skill]);
    }

    public function addSkill(){
        return view('backend.skill.add');
    }

    public function postSkill(Request $request){
        $name               = $request->name;
        $percent            = $request->percent;
        $publish            = $request->publish;
        $skillObj           = new Skill();

        $skillObj->name         = $name;
        $skillObj->percent      = $percent;
        $skillObj->publish      = $publish;

        $skillObj->save();


        return redirect()->route('skills');

    }

    public function editSkill($id){

        $skillObj           = new Skill();
        $skill              = $skillObj->find($id);
        return view('backend.skill.add', ['skill' => $skill]);
    }

    public function updateSkill(Request $request, $id){
        $name               = $request->name;
        $percent            = $request->percent;
        $publish            = $request->publish;

        $skillObj           = new Skill();
        $skill              = $skillObj->find($id);

        $skill->name         = $name;
        $skill->percent      = $percent;
        $skill->publish      = $publish;

        $skill->save();

        return redirect()->route('skills');
    }

    public function deleteSkill($id){
        $skillObj           = new Skill();
        $skill              = $skillObj->find($id);

        $skill->delete();

        return redirect()->back();

        
    }
    public function experiences(){
        $expObj   = new Experience();
        $exp      = $expObj->orderBy('start', 'DESC')->get();
        return view('backend.experience.all', ['exps' => $exp]);
    }

    public function addExperience(){
        return view('backend.experience.add');
    }

    public function postExperience(Request $request){
        $company          = $request->company;
        $designation      = $request->designation;
        $start            = $request->start;
        $description      = $request->description;        
        $end              = $request->end;

        $expObj   = new Experience();

        $expObj->company         = $company;
        $expObj->designation     = $designation;
        $expObj->description     = $description;
        $expObj->start           = $start;
        $expObj->end             = $end;

        $expObj->save();

        return redirect()->route('experiences');

    }

    public function editExperience($id){
        $expObj   = new Experience();
        $exp      = $expObj->find($id);
        return view('backend.experience.add', ['exp' => $exp]);
    }

    public function updateExperience(Request $request, $id){
        $expObj   = new Experience();
        $exp      = $expObj->find($id);

        $company          = $request->company;
        $designation      = $request->designation;
        $start            = $request->start;
        $description      = $request->description;        
        $end              = $request->end;

        $working          = $request->working;
        if($working == 'Yes'){
            $end    = NULL;
        }

        $exp->company         = $company;
        $exp->designation     = $designation;
        $exp->description     = $description;
        $exp->start           = $start;
        $exp->end             = $end;

        $exp->save();

        return redirect()->route('experiences');
    }

    public function deleteExperience($id){
        $expObj   = new Experience();
        $exp      = $expObj->find($id);

        $exp->delete();

        return redirect()->route('experiences');
    }
}
