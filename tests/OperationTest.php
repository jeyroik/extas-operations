<?php
namespace tests;

use extas\components\operations\Operation;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

/**
 * Class OperationTest
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class OperationTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $env = Dotenv::create(getcwd() . '/tests/');
        $env->load();
    }

    public function testBasicLogic()
    {
        $op = new Operation([
            Operation::FIELD__NAME => 'is ok',
            Operation::FIELD__CLASS => OperationUselessDispatcher::class
        ]);
        $this->assertEquals(['test1', 'test2', 'is ok'], $op->run('test1', 'test2'));
    }
}
