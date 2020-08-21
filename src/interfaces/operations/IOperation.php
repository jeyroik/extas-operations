<?php
namespace extas\interfaces\operations;

use extas\interfaces\IHasVersion;
use extas\interfaces\samples\IHasSample;

/**
 * Interface IOperation
 *
 * @package extas\interfaces\operations
 * @author jeyroik <jeyroik@gmail.com>
 */
interface IOperation extends IOperationSample, IHasSample, IHasVersion
{
    /**
     * @param mixed ...$args
     * @return mixed
     */
    public function run(...$args);
}
