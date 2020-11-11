<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "All posts";
    }

    public function create()
    {
        return "Create post form";
    }

    public function show($id)
    {
        return "Show product $id";
    }

    public function edit($id)
    {
        return "Edit post $id";
    }

    public function store()
    {
        return "Connection with DB and insert post";
    }

    public function update($id)
    {
        return "Update post $id";
    }

    public function delete($id)
    {
        return "delete post $id";
    }
}
