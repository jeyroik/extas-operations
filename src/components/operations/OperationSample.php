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
     * @return array
     */
    public function getSpecs(): array
    {
        return $this->config[static::FIELD__SPECS] ?? [];
    }

    /**
     * @param array $specs
     * @return $this
     */
    public function setSpecs(array $specs)
    {
        $this->config[static::FIELD__SPECS] = $specs;

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return 'extas.operation.sample';
    }
}
