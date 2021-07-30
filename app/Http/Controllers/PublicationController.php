<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {    
        return view('user.allpublication');

    }
    public function addpublication()
    {    
        return view('user.addpublication');

    }
    public function publicationdetails()
    {    
        return view('user.publicationdetails');

    }
}
