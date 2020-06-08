<?php
namespace extas\components\operations;

use extas\components\Item;
use extas\interfaces\operations\IOperation;
use extas\interfaces\operations\IOperationDispatcher;

/**
 * Class OperationDispatcher
 *
 * @package extas\components\operations
 * @author jeyroik <jeyroik@gmail.com>
 */
class OperationDispatcher extends Item implements IOperationDispatcher
{
    /**
     * @return IOperation|null
     */
    public function getOperation(): ?IOperation
    {
        return $this->config[static::FIELD__OPERATION] ?? null;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
