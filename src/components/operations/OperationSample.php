<?php
namespace extas\components\operations;

use extas\components\samples\Sample;
use extas\components\THasClass;
use extas\components\THasTags;
use extas\interfaces\operations\IOperationSample;

/**
 * Class OperationSample
 *
 * @package extas\components\operations
 * @author jeyroik <jeyroik@gmail.com>
 */
class OperationSample extends Sample implements IOperationSample
{
    use THasClass;
    use THasTags;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return 'extas.operation.sample';
    }
}
