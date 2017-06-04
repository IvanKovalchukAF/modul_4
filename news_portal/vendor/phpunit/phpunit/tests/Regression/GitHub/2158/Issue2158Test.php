<?php
class Issue2158Test extends PHPUnit_Framework_TestCase
{
    /**
     * Set constant in layouts process
     */
    public function testSomething()
    {
        include(__DIR__ . '/constant.inc');
        $this->assertTrue(true);
    }

    /**
     * Constant defined previously in layouts process constant should be available and
     * no errors should be yielded by reload of included files
     *
     * @runInSeparateProcess
     */
    public function testSomethingElse()
    {
        $this->assertTrue(defined('TEST_CONSTANT'));
    }
}
