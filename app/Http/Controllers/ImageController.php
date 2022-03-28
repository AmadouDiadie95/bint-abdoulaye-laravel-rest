<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class ImageController extends Controller
{
    //
    public function index()
    {
        return Image::all();
    }
 
    public function show($id)
    {
        return Image::find($id);
    }

    public function store(Request $request)
    {
        return Image::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Image = Image::findOrFail($id);
        $Image->update($request->all());

        return $Image;
    }

    public function delete(Request $request, $id)
    {
        $Image = Image::findOrFail($id);
        $Image->delete();

        return 204;
    }

    public function findByIdentifier(string $identifier)
    {
        // echo $identifier ;
        $allImages = Image::all() ;
        foreach ($allImages as $image) {
            # code...
            if($image->identifier == $identifier) {
                return $image ;
            }
        }
    }

}
