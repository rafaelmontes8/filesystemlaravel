<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class fileController extends Controller
{
    public function getfiles() {
        $files = Storage::files();


        return view('home',compact('files'));
    }
    //Final Improvements
    public function upload(Request $request){

        //dd( $request->file('files')->getClientOriginalName());
        //$request->thingtoupload->storeAs($request->file()->getClientOriginalName());

        foreach ($request->file('files') as $file) {
            //Storage::put($file->getClientOriginalName(), $file);
            $file->storeAs('.',$file->getClientOriginalName());

        }
        //$request->file('files')->storeAs('.',$request->file('files')->getClientOriginalName());

        //Storage::put($request->file('files')->getClientOriginalName(),$request->file('files'));
        
        return redirect('/files');
    }
    
    //Terminado
    public function rename(Request $request,$name) {
        Storage::move($name,$request->nombrenew);

        return redirect('/files');
    }

    public function renombrar($name) {
        

        return view('rename',compact('name'));
    }
    
    //Terminado
    public function delete($name) {
        Storage::delete($name);
        return redirect('/files');
    }

    //Terminado
    public function download($name) {
        return Storage::download($name);
    }
}
