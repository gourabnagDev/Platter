<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: lelouch
 * Date: 19/7/16
 * Time: 10:20 PM
 */

namespace Lie;
class Tools {
    public $views;
    public $models;

    private $controllerName;

    const VIEW_DIR = __DIR__ . "/View/";

    public function __construct(string $controllerName) {
        $this->controllerName = $controllerName;
    }

    public function loadView(string $name, string $extension = ".html"): string {
        $fileName = self::VIEW_DIR . $this->controllerName . "/" . $name . $extension;
        return file_get_contents($fileName);
    }
}