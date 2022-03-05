<?php
require_once __DIR__ . '/../src/Example2.php';

class Example2ForTest extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $Example2 = new Example2();
        $Example2->setName('Bustamante');
        $this->assertEquals($Example2->getName(), 'Bustamante');
    }

    public function testGetAge()
    {
        $Example2 = new Example2();
        $Example2->setAge(21);
        $this->assertEquals($Example2->getAge(), 21);
    }

    public function testFaveColor()
    {
        $Example2 = new Example2();
        $Example2->setFaveColor('Red');
        $this->assertEquals($Example2->getFaveColor(), 'Red');
    }

    public function testGetNameCheckString()
    {
        $Example2 = new Example2();
        $Example2 ->setName('Bustamante');
        $this->assertIsString($Example2->getName(), 'Bustamante');
    }

    public function testGetAgeCheckInt()
    {
        $Example2 = new Example2();
        $Example2->setAge(21);
        $this->assertIsInt($Example2->getAge(), 21);
    }

    public function testGetAgeCheckNumeric()
    {
        $Example2 = new Example2();
        $Example2->setAge(21);
        $this->assertIsNumeric($Example2->getAge(), 21);
    }
    
    public function testFaveColorCheckString()
    {
        $Example2 = new Example2();
        $Example2->setFaveColor('Red');
        $this->assertIsString($Example2->getFaveColor(), 'Red');
    }

    public function testGetTogetherInput()
    {
        $Example2 = new Example2();
        $Example2->setTogetherInput('Bustamante', 21, 'Red');
        $this->assertEquals($Example2->getTogetherInput(), 'Bustamante', 21, 'Red');
    }

}