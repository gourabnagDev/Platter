<?php declare(strict_types = 1);

/**
 * Created by PhpStorm.
 * User: lelouch
 * Date: 19/7/16
 * Time: 9:59 PM
 */
namespace Lie\Controllers;
use Lie\ControllerInterface;
use Lie\Tools;

class IndexController implements ControllerInterface {
    private $args;
    private $tools;

    public function __construct(Tools $tools, array $args) {
        $this->tools = $tools;
        $this->args = $args;
    }

    public function call(string $name): string {
        return $this->{$name}($this->args);
    }

    private function home(array $args): string {
        return $this->tools->loadView("Home");
    }
}