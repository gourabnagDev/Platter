<?php
/**
 * Created by PhpStorm.
 * User: lelouch
 * Date: 19/7/16
 * Time: 8:09 PM
 */

require_once __DIR__ . "/src/autoloads.php";

use Aerys\{ Host, Request, Response, Router, Websocket, function root, function router, function websocket };

$router = router()
    ->get("/", function (Request $request, Response $response) {
        $controllerLoader = new \Lie\ControllerLocator("Index");
        $controller = $controllerLoader->getInstance();
        $response->end($controller->call("home"));
    })
    ->get("/{controller_name}/{view_name}", function (Request $request, Response $response) {
        //
    });

(new Host)
    ->expose("*", 1337)
    ->use($router)
    ->use(root(__DIR__ . "/public"));