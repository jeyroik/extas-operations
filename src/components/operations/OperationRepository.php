<?php
namespace extas\components\operations;

use extas\components\repositories\Repository;
use extas\interfaces\operations\IOperationRepository;

/**
 * Class OperationRepository
 *
 * @package extas\components\operations
 * @author jeyroik <jeyroik@gmail.com>
 */
class OperationRepository extends Repository implements IOperationRepository
{
    protected string $name = 'operations';
    protected string $scope = 'extas';
    protected string $pk = Operation::FIELD__NAME;
    protected string $itemClass = Operation::class;
}
