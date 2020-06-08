<?php
namespace extas\interfaces\operations;

use extas\interfaces\IHasClass;
use extas\interfaces\IHasTags;
use extas\interfaces\samples\ISample;

/**
 * Interface IOperationSample
 *
 * @package extas\interfaces\operations
 * @author jeyroik <jeyroik@gmail.com>
 */
interface IOperationSample extends ISample, IHasClass, IHasTags
{
    public const FIELD__SPECS = 'specs';

    /**
     * @return array
     */
    public function getSpecs(): array;

    /**
     * @param array $specs
     * @return $this
     */
    public function setSpecs(array $specs);
}
