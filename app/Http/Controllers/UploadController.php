<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use File;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uploadfile');
    }
    public function store(Request $request)
    {
        //
        $request->validate([
            'image.*' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',
        ]);
        if($file = $request->hasFile('image')) {

            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = '../../assets/images/mimipedro' ;
            $file->move($destinationPath,$fileName);
            return view('welcome');
        }
    }
}
