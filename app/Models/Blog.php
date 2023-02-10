<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
class Blog extends Model
{
    use HasFactory;
   // protected $guarded = ['created_at','updated_at'];
    public static $blog, $image, $imageName, $directory, $imageUrl;
    public static function saveBlog($request){
        self::$blog = new Blog();
        self::$blog->title = $request->title;
        self::$blog->slug = Str::slug($request->title,'-');
        self::$blog->category_id = $request->category_id;
        self::$blog->image = self::saveImg($request);
        self::$blog->description = $request->description;
        self::$blog->save();
    }
    public static function saveImg($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'backEnd/upload/post-image/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;

    }

    public static function updateBlog($request){
        self::$blog = Blog::find($request->id);
        self::$blog->title = $request->title;
        self::$blog->slug = Str::slug($request->title,'-');
        self::$blog->category_id = $request->category_id;
        if ($request->file('image')!=null){
            self::$blog->image = self::saveImg($request);
        }
        self::$blog->description = $request->description;
        self::$blog->save();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
