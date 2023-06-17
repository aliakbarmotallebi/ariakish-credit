<?php namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;


trait Uploadable
{

    protected function upload(UploadedFile $file)
    {
        $name = md5(Str::random(25)) . "." . $file->getClientOriginalExtension(); 

        $fullImageName = "/uploads/{$name}";

        $file->move(public_path("/uploads/") , $name);

        return $fullImageName;
    }

}