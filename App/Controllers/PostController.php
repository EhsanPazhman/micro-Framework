<?php
namespace App\Controllers;

use App\Models\User;

class PostController{

    public function single(){
        global $request;


        $user = new User(77);
        // $result = $user->remove();
        $user->name = 'Ahmad';
        $user->email = 'Ahmad@7Learn.com';
        $user->password = 'AhmadPassssss';
        
        var_dump($user->save()->name);

        $slug = $request->get_route_param('slug');
        echo "slug: $slug";
    }

    public function comment(){
        global $request;
        $slug = $request->get_route_param('slug');
        $cid = $request->get_route_param('cid');
        echo "slug: $slug<br> comment_id: $cid";
    }

}