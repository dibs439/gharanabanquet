<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Occasion;
use Carbon\Carbon;

class OccasionsController extends Controller
{

    public function __construct()
    {

    }

    public function index() {


        $occasions = Occasion::all();

        //dd($occasions);


        return view('backend/occasions/index', ['occasions' => $occasions]);
    }

    public function edit($id) {

        if(!isset($id) || $id == "") {
            return redirect()->back();
        }

        $occasion = Occasion::where('id', $id)->with('occasionDetails')->first();

        return view('backend/occasions/edit', ['occasion' => $occasion]);
    }

    public function update(Request $request, $id) {

        $rules = [
            'name'              => 'required|max:191',
            'slug'              => 'required|max:50',
            'heading'           => 'required|max:191',
            'sub_heading'       => 'max:191',
            'meta_title'        => 'required|max:191',
            'meta_keywords'     => 'max:191',
            'meta_description'  => 'max:191',
            //'photo1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request, $rules);


        $input = [
            'name' 		            => $request['name'],
            'slug' 		            => $request['slug'],
            'heading' 		        => $request['heading'],
            'sub_heading' 		    => $request['sub_heading'],
            'description'           => $request['description'],
            'meta_title' 		    => $request['meta_title'],
            'meta_keywords' 		=> $request['meta_keywords'],
            'meta_description'      => $request['meta_description'],
        ];


        /*if($request->file('photo1'))
        {
            $image = $request->file('photo1');

            $ext = strtolower($image->getClientOriginalExtension());

            if($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "gif"|| $ext == "svg")
            {
                $input['photo'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path(env('MEAL_PIC_MAX', '/storage/photos/meals/max'));
                $flag = $image->move($destinationPath, $input['photo']);

            }


        }*/

        Occasion::where('id', $id)->update($input);

        return redirect()->intended('/backend/occasions')->with('success', __('Occasion updated successfully'));

    }

}
