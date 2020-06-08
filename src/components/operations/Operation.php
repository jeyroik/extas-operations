<?php
namespace extas\components\operations;

use extas\components\samples\THasSample;
use extas\interfaces\operations\IOperation;
use extas\interfaces\operations\IOperationDispatcher;

/**
 * Class Operation
 *
 * @package extas\components\operations
 * @author jeyroik <jeyroik@gmail.com>
 */
class Operation extends OperationSample implements IOperation
{
    use THasSample;

    /**
     * @param mixed ...$args
     * @return mixed
     */
    public function run(...$args)
    {
        $dispatcher = $this->buildClassWithParameters([IOperationDispatcher::FIELD__OPERATION => $this]);
        return $dispatcher(...$args);
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return 'extas.operation';
    }
}
