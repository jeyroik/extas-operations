<?php
namespace extas\components\operations;

use extas\components\repositories\Repository;
use extas\interfaces\oeprations\IOperationSampleRepository;

/**
 * Class OperationSampleRepository
 *
 * @package extas\components\operations
 * @author jeyroik <jeyroik@gmail.com>
 */
class OperationSampleRepository extends Repository implements IOperationSampleRepository
{
    protected string $name = 'operations';
    protected string $scope = 'extas';
    protected string $pk = OperationSample::FIELD__NAME;
    protected string $itemClass = OperationSample::class;
}
