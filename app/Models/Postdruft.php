<?php

// namespace App\Models;

// use Illuminate\Support\Facades\File;
// use Spatie\YamlFrontMatter\YamlFrontMatter;
// use Illuminate\Database\Eloquent\ModelNotFoundException;

// class Post
// {
//     public $title;
//     public $date;
//     public $description;
//     public $body;

//     public function __construct($title,$date,$description,$body,$slug){
//         $this->title = $title;
//         $this->date = $date;
//         $this->description = $description;
//         $this->body = $body;
//         $this->slug = $slug;
//     }


//     public static function all(){
//         return cache()->rememberForever('posts.all', function () {
//             return collect(File::files(resource_path("posts")))
//             ->map(fn($file)=>YamlFrontMatter::parseFile($file))
//             ->map(fn($document)=> new Post(
//                 $document->title,
//                 $document->date,
//                 $document->description,
//                 $document->body(),
//                 $document->slug
//             )) ->sortBy('date');
//         });

//     }

//     public static function find($slug){
//         return static::all()->firstWhere('slug',$slug);
//     }

//     public static function findOrFail($slug){
//         $post =  static::find($slug);

//         if(! $post){
//             throw new ModelNotFoundException();
//         }

//         return $post;
//     }



// }


