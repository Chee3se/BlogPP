<?php
include "models/Blog.php";
class BlogController
{
    public function index() {
        $posts = Blog::all();
        require "views/blog/index.view.php";
    }

    public function show() {
        $id = $_GET['id'];
        $post = Blog::find($id);
        require "views/blog/show.view.php";
    }

    public function create() {
        require "views/blog/create.view.php";
    }

    public function store() {
        $content = $_POST['content'];
        Blog::create(compact('content'));
        header('Location: /');
    }

    public function edit() {
        $id = $_GET['id'];
        $post = Blog::find($id);
        require "views/blog/edit.view.php";
    }

    public function update() {
        $id = $_POST['id'];
        $content = $_POST['content'];
        Blog::save(compact('id', 'content'));
        header('Location: /');
    }

    public function destroy() {
        $id = $_POST['id'];
        Blog::delete($id);
        header('Location: /');
    }
}