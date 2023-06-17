<?php namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;


trait Uploadable
{
    protected $imagePath;

    protected function setUploadPath($path)
    {
        $this->imagePath = "/uploads/{$path}" ;
    }

    protected function upload(UploadedFile $file)
    {
        $name = md5(Str::random(25)) . "." . $file->getClientOriginalExtension(); 

        $fullImageName = "{$this->imagePath}{$name}";

        $file->move(public_path($this->imagePath) , $name);

        return $fullImageName;
    }

}