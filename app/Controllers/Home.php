<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home - Company Profile',
            'active' => 'home'
        ];
        return view('home', $data);
    }
    
    public function about()
    {
        $data = [
            'title' => 'About Us - Company Profile',
            'active' => 'about'
        ];
        return view('about', $data);
    }
    
    public function services()
    {
        $data = [
            'title' => 'Services - Company Profile',
            'active' => 'services'
        ];
        return view('services', $data);
    }
    
    public function contact()
    {
        $data = [
            'title' => 'Contact - Company Profile',
            'active' => 'contact'
        ];
        return view('contact', $data);
    }
}