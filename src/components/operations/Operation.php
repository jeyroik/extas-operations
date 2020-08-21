<?php
namespace extas\components\operations;

use extas\components\samples\THasSample;
use extas\components\THasVersion;
use extas\interfaces\operations\IOperation;
use extas\interfaces\operations\IOperationDispatcher;
use extas\components\exceptions\MissedOrUnknown;

/**
 * Class Operation
 *
 * @package extas\components\operations
 * @author jeyroik <jeyroik@gmail.com>
 */
class Operation extends OperationSample implements IOperation
{
    use THasSample;
    use THasVersion;

    /**
     * @param mixed ...$args
     * @return mixed
     * @throws MissedOrUnknown
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
