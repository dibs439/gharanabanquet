<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\OccasionDetail;
use Carbon\Carbon;

class OccasionDetailsController extends Controller
{

    public function __construct()
    {

    }

    public function index($id) {

        if(!isset($id) || $id == "") {
            return redirect()->back();
        }

        $occasionDetails = OccasionDetail::with('occasion')->where('occasion_id', $id)->get();
        //dd($occasionDetails);

        return view('backend/occasionDetails/index', ['occasionDetails' => $occasionDetails]);
    }

    public function edit($id) {

        if(!isset($id) || $id == "") {
            return redirect()->back();
        }

        $occasionDetail = OccasionDetail::where('id', $id)->with('occasion')->first();

        return view('backend/occasionDetails/edit', ['occasionDetail' => $occasionDetail ]);
    }

    public function update(Request $request, $id) {

        $rules = [
            'title'              => 'required|max:191',
            'description'        => 'required',
            'photo'              => 'mimes:jpeg,jpg,png',
            'sl_no'             => 'integer|min:0',
        ];

        $this->validate($request, $rules);

        if($request->input('active') != NULL) {
            $active = '1';
        }
        else {
            $active = '0';
        }

        $input = [
            'title' 		        => $request['title'],
            'sub_title' 		    => $request['sub_title'],
            'description' 		    => $request['description'],
            'photo_alt_text' 		=> $request['photo_alt_text'],
            'active'                => $active,
            'sl_no' 		        => $request['sl_no'],
        ];


        if($request->file('photo'))
        {
            $image = $request->file('photo');

            $ext = strtolower($image->getClientOriginalExtension());

            $input['photo'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_HTML').(env('OCCASIONS_PIC_MAX'));
            $flag = $image->move($destinationPath, $input['photo']);

        }

        $occasionDetail = OccasionDetail::where('id', $id)->first();
        $occasionDetail->update($input);

        //dd($occasionDetail);

        return redirect()->intended('/backend/occasionDetails/'.$occasionDetail->occasion_id)->with('success', __('Occasion updated successfully'));

    }

}
