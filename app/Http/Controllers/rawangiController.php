<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\Daak_rawangi;
use Illuminate\Http\Request;

class rawangiController extends Controller
{
    // Show all posts
    public function index()
    {
        return view('/', compact('rawangi'));
    }

    // Show form to create post
  
    function andh_view_rawangi(){
        $data = Daak_rawangi::all();
        return view('view_rawangi',['rawangis'=>$data]);
      }

 
    // Edit post
    


    function show_rawangi($id){
      $data= Daak_rawangi::find($id);
      return view('edit_rawangi',['data'=>$data]);
    }
    function rawangi_delete($id){
      $data= Daak_rawangi::find($id);
      $data->delete();
      return redirect('view_rawangi');
    }
    function update_rawangi(Request $req){
      $data = Daak_rawangi::find($req->id);
        $data->date=$req->date;
        $data->rawangi_no=$req->rawangi_no;
        $data->name=$req->name;
      $data->save();
      return redirect('view_rawangi');
    }


   // Save new post
    function andh_rawangi(Request $req){
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
        $data= new Daak_rawangi;
        $data->date=$req->date;
        $data->rawangi_no=$req->rawangi_no;
        $data->name=$req->name;
        $data->file = $fileName;   // correct

        $data->save();
        return redirect("view_rawangi");
    }

}
}