<?php
namespace extas\components\plugins\uninstall;

use extas\components\operations\Operation;

/**
 * Class UninstallOperations
 *
 * @package extas\components\plugins\uninstall
 * @author jeyroik <jeyroik@gmail.com>
 */
class UninstallOperations extends UninstallSection
{
    protected string $selfSection = 'operations';
    protected string $selfName = 'operation';
    protected string $selfRepositoryClass = 'operationRepository';
    protected string $selfUID = Operation::FIELD__NAME;
    protected string $selfItemClass = Operation::class;
}
