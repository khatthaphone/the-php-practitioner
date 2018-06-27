<?php

class Post {
  public $title;
  public $author;
  public $published;


  public function __construct($title, $author, $published) {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }

}

$posts = [
  new Post('My First Post', "Khat", true),
  new Post('My Second Post', "Khat", true),
  new Post('My Third Post', "Khat", true),
  new Post('My Fourth Post', "Khat", false)
];

$publishedPosts = array_filter($posts, function($post) {
  return $post->published;
});

$unpublishedPosts = array_filter($posts, function($post) {
  return !$post->published;
});

// $modified = array_map(function($post) {
//   $post->published = true;
//   return $post;
// }, $posts);

// foreach ($posts as $post) {
//   $post->published = true;
// }

// $modified = array_map(function($post) {
//   return (array) $post;
// }, $posts);

// $titles = array_map(function($post) {
//   return ['title' => $post->title];
// }, $posts);

$titles = array_column($posts, 'title');

$authors = array_column($posts, 'autor');

var_dump($titles);