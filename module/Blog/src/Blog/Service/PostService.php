<?php

namespace Blog\Service;

class PostService implements PostServiceInterface {
  
  protected $data = array(
    array(
      'id'    => 1,
      'title' => 'Hello World #1',
      'text'  => 'This is our first blog post!'
    ),
    array(
      'id'     => 2,
      'title' => 'Hello World #2',
      'text'  => 'This is our second blog post!'
    ),
    array(
      'id'     => 3,
      'title' => 'Hello World #3',
      'text'  => 'This is our third blog post!'
    ),
    array(
      'id'     => 4,
      'title' => 'Hello World #4',
      'text'  => 'This is our fourth blog post!'
    ),
    array(
      'id'     => 5,
      'title' => 'Hello World #5',
      'text'  => 'This is our fifth blog post!'
    )
  );

  public function findAllPosts() {

  }

  public function findPost($id) {

  }
}