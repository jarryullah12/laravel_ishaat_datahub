<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Daftr_file;

class DaftrFilesController extends Controller
{
    //
     function andh_view_file(){
        $data = Daftr_file::all();
        return view('view_file',['files'=>$data]);
      }

    function andh_file(Request $req)
{
    // Validation
   $validator = Validator::make($req->all(), [
            'file' => 'required|mimes:pdf,doc,docx', 
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
    $data = new Daftr_file();
    $data->date = $req->date;
    $data->file_name = $req->file_name;
    $data->file = $fileName;   // correct
    $data->save();

    return redirect("view_file");
}}


// Edit post

     function file_delete($id){
      $data= Daftr_file::find($id);
      $data->delete();
      return redirect('view_file');
    }


    function show_file($id){
      $data= Daftr_file::find($id);
      return view('edit_file',['data'=>$data]);
    }
    function update_file(Request $req){
      $data = Daftr_file::find($req->id);
      $data->file_name=$req->file_name;
      $data->save();
      return redirect('view_file');
    }
}
