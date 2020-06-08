<?php
namespace extas\interfaces\operations;

use extas\interfaces\IItem;

/**
 * Interface IOperationDispatcher
 *
 * @package extas\interfaces\operations
 * @author jeyroik@gmail.com
 */
interface IOperationDispatcher extends IItem
{
    const SUBJECT = 'extas.operation.dispatcher';
    const FIELD__OPERATION = 'operation';

    /**
     * @return IOperation|null
     */
    public function getOperation(): ?IOperation;
}
