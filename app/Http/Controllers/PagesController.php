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

            'Banquet Halls in South Kolkata',
            'Wedding Venue in South Kolkata',
            'Best AC Banquet Halls in Kolkata',
            'Best AC Wedding Banquet Halls in Kolkata',
            'Banquets for Marriage in South Kolkata',
            'AC Banquet Halls for Corporate Parties in South Kolkata',
            'Affordable Banquet Halls in South Kolkata',
            'Best AC Banquet Halls in South Kolkata',
            'Banquet Halls Near New Garia Metro Station',
            'Budget Friendly AC Banquet Halls',
            'Banquet Halls for Anniversary Party in Kolkata',
            'Best Banquet Halls in Kolkata for Family Functions',
            'AC Banquet Halls for Product Launch Parties in South Kolkata'

        );

        //dd(URL::current());

    }

    public function index() {

        $page = Page::where('category', 'home')->with('contentBlock')->first();
        $meta['title'] = 'Gharana Banquet | Banquet Hall in South Kolkata ';
        $meta['keyword'] = '';
        $meta['description'] = 'Get the best deals with advanced facilities and much more at Gharana Banquet is the best you will get. It is the best luxurious banquet halls in South Kolkata for any events.';
        $meta['imgAltTags'] = $this->imgAltTags;

        return view('frontend/index', ['meta' => $meta, 'page' => $page]);
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
        if(isset($occasion->meta_title)) {
            $meta['title'] = $occasion->meta_title;
        }
        else {
            $meta['title'] = "";
        }

        if(isset($occasion->meta_keywords)) {
            $meta['keyword'] = $occasion->meta_keywords;
        }
        else {
            $meta['keyword'] = "";
        }

        if(isset($occasion->meta_description)) {
            $meta['description'] = $occasion->meta_description;
        }
        else {
            $meta['description'] = "";
        }

        if(isset($occasion['heading'])) {
            $page['heading'] = $occasion['heading'];
        }
        else {
            $page['heading'] = "";
        }

        if(isset($occasion['sub_heading'])) {
            $page['sub_heading'] = $occasion['sub_heading'];
        }
        else {
            $page['sub_heading'] = "";
        }

        if(isset($occasion['sub_heading_1'])) {
            $page['sub_heading_1'] = $occasion['sub_heading_1'];
        }
        else {
            $page['sub_heading_1'] = "";
        }
        //dd($page);

        return view('frontend/occasion', ['occasion' => $occasion, 'page' => $page, 'meta' => $meta]);
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
