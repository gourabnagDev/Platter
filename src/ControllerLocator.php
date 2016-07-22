<?php declare(strict_types = 1);

/**
 * Created by PhpStorm.
 * User: lelouch
 * Date: 19/7/16
 * Time: 10:02 PM
 */
namespace Lie;
class ControllerLocator {
    private $controllerName;

    const CONTROLLER_DIR = __DIR__ . "/Controllers/";

    public function __construct(string $controllerName) {
        $this->controllerName = $controllerName;
        $fileName = self::CONTROLLER_DIR . $controllerName . "/Controller.php";
        $this->requireController($fileName);
    }

    public function getInstance(array $urlArgs = []): ControllerInterface {
        $fqn = $this->constructControllerName();
        /** @var ControllerInterface $fqn */
        return new $fqn(new Tools($this->controllerName), $urlArgs);
    }

    private function requireController(string $filename) {
        require_once $filename;
    }

    private function constructControllerName(): string {
        return "Lie\\Controllers\\" . $this->controllerName . "Controller";
    }
}