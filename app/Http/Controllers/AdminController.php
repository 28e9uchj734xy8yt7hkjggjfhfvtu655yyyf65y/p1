<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image; 
use Response;
use Carbon\Carbon;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      /*  $path = 'http://83c59dd9.ngrok.io/adminstrap/assets/images/a554c065-animals-03.jpg';
        $filename = Carbon::now()->timestamp . '--'. basename($path);
        $content = file_get_contents($path);
        $path_result= public_path('images/' . $filename);
        file_put_contents($path_result, $content);
        $data= Image::make($path_result)->exif();
        $data['HumanFileDateTime']= Carbon::createFromTimestamp($data['FileDateTime']);
        return Response::json($data);
        */

        return view('admin/index');
    }

}
