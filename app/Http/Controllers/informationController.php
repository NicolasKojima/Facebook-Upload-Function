<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\informations;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class informationController extends Controller
{
    public function index()
    {
        return view('registration');
    }


    public function index1()
    {
        $informations = informations::all();

        return view('projects', compact('informations'));
    }
    public function delete($id)
    {
    $informations = informations::find($id);
    if ($informations) {
        $informations->delete();
    }

    return redirect('/about-us')->with('status', 'Post Deleted Succesfully');
    }
    public function store(Request $request)
{
    $this->validate($request, [
        'profilepic' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
    
    $profile_image_path = $request->file('profilepic')->store('image', 'public');
    $profile_image_path_new = explode('/', $profile_image_path);
    

    $informationdata= new informations();
    $informationdata->name= $request['name'];
    $informationdata->email= $request['email'];
    $informationdata->introduction= $request['introduction'];
    $informationdata->profilepic = $profile_image_path_new[1];



    $informationdata->save();

    return redirect('/about-us')->with('status', 'Form submitted successfully');

}

    // this function is to show the post when press share on about-us
    public function show($id)
    {
        $information = informations::find($id);

        if (!$information) {
            return abort(404); // Display a 404 error if the post is not found
        }

        return view('information.show', compact('information'));
    }

}