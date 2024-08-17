<?php
use App\Models\Program;
use Illuminate\Support\Facades\Auth;
function upload($folderPath,$image){
    //$extension = strtolower($image->extension());
    //$filename = time().rand(1,10000).".".$extension;//new name
    $name = strtolower($image->getClientOriginalName());
    $image->move($folderPath,$name);
    return $name;
}
function delete($folderPath,$imageName){
    $imagePath = public_path($folderPath.$imageName);
    if(file_exists($imagePath))
    {
        unlink($imagePath);
        return "Success";
    }
    return NULL;
}