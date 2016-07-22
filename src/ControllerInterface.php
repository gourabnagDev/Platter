<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: lelouch
 * Date: 19/7/16
 * Time: 10:15 PM
 */

namespace Lie;
interface ControllerInterface {
    /**
     * ControllerInterface constructor.
     *
     * The arguments provided to the controller.
     * @param Tools $tools
     * @param array $args
     */
    public function __construct(Tools $tools, array $args);

    /**
     * The method to call.
     *
     * @param string $name
     * @return string
     */
    public function call(string $name): string;

    /**
     * All other methods should be private.
     */
}