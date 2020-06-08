<?php
namespace extas\components\plugins\install;

use extas\components\operations\Operation;

/**
 * Class InstallOperations
 *
 * @package extas\components\plugins\install
 * @author jeyroik <jeyroik@gmail.com>
 */
class InstallOperations extends InstallSection
{
    protected string $selfSection = 'operations';
    protected string $selfName = 'operation';
    protected string $selfRepositoryClass = 'operationRepository';
    protected string $selfUID = Operation::FIELD__NAME;
    protected string $selfItemClass = Operation::class;
}
