<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function fileUpload(Request $req){
       // $req->validate([
        // 'image' => 'required|mimes:csv,jpg,png,txt,xlx,xls,pdf|max:2048'
        // ]);
        $res=[
            'res' =>'err',
            'msg' =>'',
            'data' =>[],
        ];
        // dd($req);

        $file = $req->file('file');
        
        // //Display File Name
        // echo 'File Name: '.$file->getClientOriginalName();
        // echo '<br>';
    
        // //Display File Extension
        // echo 'File Extension: '.$file->getClientOriginalExtension();
        // echo '<br>';
    
        // //Display File Real Path
        // echo 'File Real Path: '.$file->getRealPath();
        // echo '<br>';
    
        // //Display File Size
        // echo 'File Size: '.$file->getSize();
        // echo '<br>';
    
        // //Display File Mime Type
        // echo 'File Mime Type: '.$file->getMimeType();
        //Move Uploaded File
        $destinationPath = 'fileuploads';
        $name = time().'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath, $name);
        $res['data'] = $destinationPath.'/'. $name;
        $res['res'] = 'done';
        
        echo json_encode($res);
        die();
    }
     
}