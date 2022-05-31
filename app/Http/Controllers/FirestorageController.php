<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Google\Cloud\Firestore\FirestoreClient;
use App\Models\UploadedContent;
use App\Models\File;

class FirestorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function firebaseStore(Request $request)
    { 
        $request->validate([
          'uploadFiles' => 'required',
        ]);
        $input = $request->all();
        $files = $request->file('uploadFiles');

        $id = UploadedContent::getFreeID();

        foreach($files as $singleFile){
        $firebase_storage_path = 'ContentCreatorsContent/';
        $localfolder = public_path('firebase-temp-uploads') .'/';
        $extension = $singleFile->getClientOriginalExtension();
        $file = time().'.'.$singleFile->extension();
        if ($singleFile->move($localfolder, $file)) {
          $uploadedfile = fopen($localfolder.$file, 'r');
          
          //Save name in sql database
          $sqlFileSave = new File();
          $sqlFileSave->store($file,$id);

          app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
          unlink($localfolder . $file);
            }
        }
      return back()->withInput();
    }


    public static function store($request, $path){
        $uploadedFile = $request;

        $firebase_storage_path = $path;
        $localfolder = public_path('firebase-temp-uploads') .'/';
        $file = time().'.'.$uploadedFile->extension();
        if ($uploadedFile->move($localfolder, $file)) {
          $uploadedfile = fopen($localfolder.$file, 'r');

          app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
          unlink($localfolder . $file);
        }

        return $file;
    }


    public static function fetch($path, $id){
        $expiresAt = new \DateTime('tomorrow');  
        $fileReference = app('firebase.storage')->getBucket()->object($path.$id);  
        if($fileReference->exists()){
            return $file = $fileReference->signedUrl($expiresAt); 
        }  
            
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $imageDeleted = app('firebase.storage')->getBucket()->object("Images/defT5uT7SDu9K5RFtIdl.png")->delete();
        Session::flash('message', 'Image Deleted');
        return back()->withInput();
    }
}