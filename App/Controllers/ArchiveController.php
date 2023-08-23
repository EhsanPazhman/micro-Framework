<?php
namespace App\Controllers;

class ArchiveController{

    public function index(){
        # model ...
        view("archive.index");
    }
    public function products(){
        # model ...
        view("archive.products");
    }
    public function articles(){
        # model ...
        view("archive.articles");
    }

}