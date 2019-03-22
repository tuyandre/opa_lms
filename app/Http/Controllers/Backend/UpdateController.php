<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\System\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function index(){
        return view('backend.update.index');
    }

   public function listFiles(Request $request){
        $this->validate($request,[
            'file'=> 'required|mimes:zip'
        ]);
       $file = $request->file('file');
       $file_name = time().'_'.$file->getClientOriginalName();
       $file->move(public_path().'/updates/' , $file_name);
       $is_verified = false;
       $checkFiles =  \Zipper::make(public_path().'/updates/'.$file_name)->listFiles('/\.key/i');
       foreach ($checkFiles as $item){
           if($item == md5('NeonLMSUpdate').'.key'){
               $is_verified = true;
           }
       }
       if($is_verified == true){
           $files =  \Zipper::make(public_path().'/updates/'.$file_name)->listFiles();
           return view('backend.update.file-list',compact('files','file_name'));
       }else{
           unlink(public_path().'/updates/'.$file_name);
           return redirect(route('admin.update-theme'))->withFlashDanger(__('alerts.backend.general.unverified'));
       }

   }

   public function updateTheme(Request $request){
       $file_name = $request->file_name;
      if($request->submit == 'cancel'){
          unlink(public_path().'/updates/'.$file_name);
         return redirect(route('admin.update-theme'))->withFlashDanger(__('alerts.backend.general.cancelled'));
      }else{

          \Zipper::make(public_path().'/updates/'.$file_name)->extractTo(base_path());
          unlink(public_path().'/updates/'.$file_name);

          return redirect(route('admin.update-theme'))->withFlashSuccess(__('alerts.backend.general.updated'));
      }
   }
}
