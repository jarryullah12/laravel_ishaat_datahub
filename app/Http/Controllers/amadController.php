<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\Daak_amad;
use Illuminate\Http\Request;
class amadController extends Controller
{
    // Show all posts
    public function index()
    {
        return view('/', compact('amad'));
    }

    // Show form to create post
  
    function andh_view_amad(){
        $data = Daak_amad::all();
        return view('view_amad',['amads'=>$data]);
      }

   
    // Edit post

     function amad_delete($id){
      $data= Daak_amad::find($id);
      $data->delete();
      return redirect('view_amad');
    }


    function show_amad($id){
      $data= Daak_amad::find($id);
      return view('edit_amad',['data'=>$data]);
    }
    function update_amad(Request $req){
      $data = Daak_amad::find($req->id);
      $data->name=$req->name;
      $data->maqam=$req->maqam;
      $data->detail=$req->detail;
      $data->save();
      return redirect('view_amad');
    }
 // Save new post
    function andh_amad(Request $req)
{
    // Validation
    $validator = Validator::make($req->all(), [
       'file' => 'image',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 401);
    }
else{
    // File Upload

    $file = $req->file('file');  
   
    $fileName = time().'.'.request()->file->getClientOriginalExtension();
    request()->file->move(public_path('storage'), $fileName);

    // Save to database
    $data = new Daak_amad();
    $data->date = $req->date;
    $data->maqam = $req->maqam;
    $data->name = $req->name;
    $data->detail = $req->detail;
    $data->file = $fileName;   // correct
    $data->save();

    return redirect("view_amad");
}}


}
