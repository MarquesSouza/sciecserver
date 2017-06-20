<?php

namespace App\Http\Controllers;

use App\Entities\Event;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        redirect('/');
        return;
    }
    /** ------------------------------------------Welcome-------------------------------------------------------------------------
     */
    public function welcome()
    {
        $evento=Event::all();
        return view('welcome', compact('evento'));
    }
    public function admin(){
        $evento=Event::all();
        return view('admin', compact('evento'));

    }
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


}
