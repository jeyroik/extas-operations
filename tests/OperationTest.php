<?php
namespace tests;

use extas\components\operations\Operation;

use Dotenv\Dotenv;
use extas\components\operations\OperationSample;
use extas\components\repositories\TSnuffRepositoryDynamic;
use PHPUnit\Framework\TestCase;

/**
 * Class OperationTest
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class OperationTest extends TestCase
{
    use TSnuffRepositoryDynamic;

    protected function setUp(): void
    {
        parent::setUp();
        $env = Dotenv::create(getcwd() . '/tests/');
        $env->load();
        $this->createSnuffDynamicRepositories([
            ['operations', Operation::FIELD__NAME, Operation::class],
            ['operationsSamples', OperationSample::FIELD__NAME, OperationSample::class],
        ]);
    }

    protected function tearDown(): void
    {
        $this->deleteSnuffDynamicRepositories();
    }

    public function testBasicLogic()
    {
        $op = new Operation([
            Operation::FIELD__NAME => 'is ok',
            Operation::FIELD__CLASS => OperationUselessDispatcher::class
        ]);
        $this->assertEquals(['test1', 'test2', 'is ok'], $op->run('test1', 'test2'));

        $sample = new OperationSample([OperationSample::FIELD__NAME => 'test']);
        $this->assertEquals('test', $sample->getName());

        $op->setSpecs(['spec']);
        $this->assertEquals(['spec'], $op->getSpecs());
    }
}
