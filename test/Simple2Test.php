<?php
require_once __DIR__ . '/../src/Simple2.php';

class Simple2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new Simple2();
        $simple2->setName('Bustamante');
        $this->assertEquals($simple2->getName(), 'Bustamante');
    }

    public function testGetAge()
    {
        $simple2 = new Simple2();
        $simple2->setAge(21);
        $this->assertEquals($simple2->getAge(), 21);
    }

    public function testFaveColor()
    {
        $simple2 = new Simple2();
        $simple2->setFaveColor('Red');
        $this->assertEquals($simple2->getFaveColor(), 'Red');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Simple2();
        $simple2 ->setName('Bustamante');
        $this->assertIsString($simple2->getName(), 'Bustamante');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Simple2();
        $simple2->setAge(21);
        $this->assertIsInt($simple2->getAge(), 21);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Simple2();
        $simple2->setAge(21);
        $this->assertIsNumeric($simple2->getAge(), 21);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Simple2();
        $simple2->setFaveColor('Red');
        $this->assertIsString($simple2->getFaveColor(), 'Red');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Simple2();
        $simple2->setTogetherInput('Bustamante', 21, 'Red');
        $this->assertEquals($simple2->getTogetherInput(), 'Bustamante', 21, 'Red');
    }

}