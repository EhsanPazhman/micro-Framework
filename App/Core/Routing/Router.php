<?php

namespace App\Core\Routing;

use \App\Core\Request;

class Router
{
    private $request;
    private $routes;
    private $current_route;
    const BASE_CONTROLLER = '\App\Controllers\\';
    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->find_route($this->request) ?? null;
        # run middleware
    }
    public function find_route(Request $request)
    {

        foreach ($this->routes as $route) {
            if (in_array($request->method(), $route['methods']) && $request->uri() == $route['uri']) {
                return $route;
            }
        }
        return null;
    }
    public function dispatch404()
    {
        header("HTTP/1.0 404 Not Found");
        view('errors.404');
    }
    public function run()
    {
        # 405 : invalid request method

        # 404 : uri not exist
        if (is_null($this->current_route)) {
            $this->dispatch404();
        }
        $this->dispatch($this->current_route);
    }
    private function dispatch($route)
    {
        # action : null
        $action = $route['action'] ?? null;
        if (is_null($action) || empty($action)) {
            return;
        }
        # action : Clousure
        if (is_callable($action)) {
            $action();
        }
        # action : Controller@method
        if (is_string($action)) {
            $action = explode('@', $action);
        }
        # action : ['Controller', 'method']
        if (is_array($action)) {
            $class_name = self::BASE_CONTROLLER . $action[0];
            $method = $action[1];
            if (!class_exists($class_name)) {
                throw new \Exception("Class $class_name Not Exist!");
            }
            $controller = new $class_name();
            if (!method_exists($controller, $method)) {
                throw new \Exception("Method $method Not Exist in Class $class_name", 1);
            }
            $controller->{$method}();
        }
    }
}
