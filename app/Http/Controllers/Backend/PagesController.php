<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Page;

class PagesController extends Controller
{

    public function __construct()
    {

    }

    public function index() {


        $pages = Page::all();


        return view('backend/pages/index', ['pages' => $pages]);
    }

    public function edit($id) {

        if(!isset($id) || $id == "") {
            return redirect()->back();
        }

        $page = Page::where('id', $id)->first();

        return view('backend/pages/edit', ['page' => $page]);
    }

    public function update(Request $request, $id) {

        $rules = [
            'heading'               => 'required|max:191',
            'sub_heading'           => 'max:191',
            'meta_title'            => 'required|max:191',
            'meta_keywords'         => 'max:191',
            'meta_description'      => 'max:191',
            //'photo1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request, $rules);


        $input = [
            'heading' 		        => $request['heading'],
            'sub_heading' 		    => $request['sub_heading'],
            'meta_title' 		    => $request['meta_title'],
            'meta_keywords' 		=> $request['meta_keywords'],
            'meta_description'      => $request['meta_description'],
        ];



        Page::where('id', $id)->update($input);

        return redirect()->intended('/backend/pages')->with('success', __('Page updated successfully'));

    }

}
