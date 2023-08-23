<?php
namespace App\Controllers;

class TodoController{

    public function list(){
        # db 
        $data = [
            'tasks' => [ 'First Task', 'Second Task', '7th Task', 'Test Task', 'another Task'],
            'title' => 'لیست تسک ها'
        ];

        view('todo.list',$data);
    }

}