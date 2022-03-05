<?php
require_once __DIR__ . '/../src/Example.php';

class ExampleForTest extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $example = new Example (10);
        $result = $example->modulus(2);

        $this->assertEquals(0, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $example = new Example (2);
        $result = $example->modulus(15);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $example = new Example (2);
        $result = $example->modulus('Z');
    }

    public function testModulus1()
    {
        $example = new Example (15);
        $result = $example->modulus(10);

        $this->assertEquals(5, $result);
    }

    public function testModulus2()
    {
        $example = new Example (32);
        $result = $example->modulus(12);

        $this->assertEquals(8, $result);
    }

}