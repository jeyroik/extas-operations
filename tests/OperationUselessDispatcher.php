<?php
namespace tests;

use extas\components\operations\OperationDispatcher;

/**
 * Class OperationUselessDispatcher
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class OperationUselessDispatcher extends OperationDispatcher
{
    /**
     * @param $arg1
     * @param $arg2
     * @return array
     */
    public function __invoke($arg1, $arg2)
    {
        return [$arg1, $arg2, $this->getOperation()->getName()];
    }
}
