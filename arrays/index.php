<?php

class Post {

    public   $title;
    public $author;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post("First Post", "OH", true),
    new Post("Second Post", "AH", true),
    new Post("Third Post", "AL.M", true),
    new Post("Forth Post", "AO", false)
];

// $unpublished = array_filter($posts, function ($post) {
//     return (! $post->published);
// });

// $published = array_filter($posts, function ($post) {
//     return $post->published;
// });

// $modified = array_map(function ($post) {
//     $post->published = true;
//     return $post;
// },$posts);

// Properties of array_column should be public 
// $titles = array_column($posts, "title");

// Sub-array for each post (2 ways)

// foreach ($posts as $index => $post) {
//     $posts[$index] = (array) $post;
// }

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

// Properties of array_column should be public 
$authors = array_column($posts, "author", "title"); 

var_dump($authors);




