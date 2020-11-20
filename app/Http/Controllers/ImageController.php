<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use App\Division;
use Image;

class ImageController extends Controller
{
    public function index() {
        $image = ImageModel::all();
        return view('admin.pages.image-upload',['data'=>$image]);
    }

    public function upload(Request $request) {
        // echo 'Uploaded';
        // foreach($request->file('filename') as $image){
        $originalImage= $request->file('filename');
        $originalImage= Image::make($originalImage);

        $originalPath = public_path().'/uploads/original/';
        $filename = time().'.png';

        $originalImage->save($originalPath.$filename);

        $imagemodel= new ImageModel();
        $imagemodel->filename=$filename;

        if($imagemodel->save()){
            return back()->with('success', 'Your images has been successfully Upload');
        }
        
    // }
        // 
        // if ($request->file('picture'))
        //     {
              
        //             $originalImage      = $request->file('picture');
        //             $imageName          = $this->uploadImage($originalImage);
        //             // $applicant->picture = $imageName;
        //     }
    }
    // private function uploadImage($originalImage) {
    //             $profileImage    = Image::make($originalImage);

    //             $tmp             = $originalImage->getClientOriginalName();
    //             $ext2            = explode(".", $tmp);
    //             $ext             = end($ext2);
    //             $imageName       = time().'.'.$ext;
    //             // local
    //             $path            = public_path().'/uploads/'; 
    //             // deployment
    //             // $path          = base_path().'/../'.'uploads/';
                
    //             $profileImage->save($path.$imageName);
    //             return $imageName;
    //     }

}
