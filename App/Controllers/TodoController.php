<?php
namespace App\Controllers;
class TodoController{
    public function list()
    
    {
        $data = [
           'tasks' => ['first task', 'second task', 'six task', 'ten task', 'Test task'],
           'title' => 'Taks list'
        ];
    view("todo.list", $data);
    }
}