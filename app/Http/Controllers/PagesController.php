<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Occasion;
use App\Page;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->imgAltTags = array(

            'banquet hall in South Kolkata',
            'wedding venue in South Kolkata',
            'Best AC Banquet Hall in Kolkata',
            'Best AC Wedding Banquet Hall in Kolkata',
            'Banquets for Marriage in South Kolkata',
            'AC Banquet Hall for Corporate Parties in South Kolkata',
            'Best AC Banquet Hall in South Kolkata',
            'Banquet hall near Garia',
            'Best AC Banquet Hall for Annual Meeting',
            'Banquet Hall in Jorabridge',
            'Banquet Hall for Anniversary Party in Kolkata',
            'Banquet Hall in Survey Park',
            'Best Banquet Hall in Kolkata for Family Functions',
            'Banquet Hall near Singhabari',
            'AC Banquet Hall for Product Launch Parties in South kolkata',
            'Banquet hall near santoshpur',

        );

        //dd(URL::current());

    }

    public function index() {

        //dd(rand(0, count($this->imgAltTags)));

        $meta['title'] = 'Gharana Banquet | Banquet Hall in South Kolkata ';
        $meta['keyword'] = '';
        $meta['description'] = 'Get the best deals with advanced facilities and much more at Gharana Banquet is the best you will get. It is the best luxurious banquet halls in South Kolkata for any events.';
        $meta['imgAltTags'] = $this->imgAltTags;

        return view('frontend/index', ['meta' => $meta]);
    }

    public function about() {

        $page = Page::where('category', 'about')->with('contentBlock')->first();
        $meta['title'] = 'Best AC Banquet Hall in Kolkata | Banquet Hall near Garia';
        $meta['keyword'] = '';
        $meta['description'] = 'if you are looking for luxurious banquet halls within your budget in South Kolkata for any event? Gharana Banquet provides you with for best banquet services.';
        $meta['imgAltTags'] = $this->imgAltTags;

        return view('frontend/about', ['page' => $page, 'meta' => $meta]);
    }


    public function occasions($slug) {

        if(!isset($slug) || $slug == "") {
            return redirect()->back();
        }

        $occasion = Occasion::where('slug', $slug)->with('occasionDetails')->first();

        $meta = array();
        if($occasion->meta_title) {
            $meta['title'] = $occasion->meta_title;
        }
        else {
            $meta['title'] = "";
        }

        if($occasion->meta_keywords) {
            $meta['keyword'] = $occasion->meta_keywords;
        }
        else {
            $meta['keyword'] = "";
        }

        if($occasion->meta_description) {
            $meta['description'] = $occasion->meta_description;
        }
        else {
            $meta['description'] = "";
        }

        return view('frontend/occasion', ['occasion' => $occasion, 'meta' => $meta]);
    }

    public function packages() {
        $meta['title'] = 'Best AC Banquet Hall in Kolkata | Banquet Hall near Garia';
        $meta['keyword'] = '';
        $meta['description'] = 'if you are looking for luxurious banquet halls within your budget in South Kolkata for any event? Gharana Banquet provides you with for best banquet services.';
        $meta['imgAltTags'] = $this->imgAltTags;

        return view('frontend/packages', ['meta' => $meta]);
    }

    public function gallery() {
        $meta['title'] = 'Banquets for Marriage in South Kolkata';
        $meta['keyword'] = '';
        $meta['description'] = 'Get the best deals with advanced facilities and much more at Gharana Banquet is the best you will get. It is the best luxurious banquet halls in South Kolkata for any events.';
        $meta['imgAltTags'] = $this->imgAltTags;

        return view('frontend/gallery', ['meta' => $meta]);
    }

    public function contact() {
        $meta['title'] = 'Contact Gharana Banquet | Best AC Banquet Hall in South Kolkata';
        $meta['keyword'] = '';
        $meta['description'] = 'Get the best deals with advanced facilities and much more at Gharana Banquet is the best you will get. It is the best luxurious banquet halls in South Kolkata for any events.';

        return view('frontend/contact', ['meta' => $meta]);
    }

}
