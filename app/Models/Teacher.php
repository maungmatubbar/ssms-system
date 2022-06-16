<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher;
    private static $imageName;
    private static $extension;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$extension = $image->getClientOriginalExtension();
        self::$imageName = Str::random('10').'.'.self::$extension;//Str::random('10'),rand(1000,10000);
        self::$directory = 'teacher_image/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newTeacher($request)
    {
        self::$teacher = new Teacher();
        self::$teacher->name        = $request->name;
        self::$teacher->email       = $request->email;
        self::$teacher->password    = bcrypt($request->password);
        self::$teacher->mobile      = $request->mobile;
        self::$teacher->address     = $request->address;
        self::$teacher->image       = self::getImageUrl($request->file('image'));
        self::$teacher->save();
    }

}
