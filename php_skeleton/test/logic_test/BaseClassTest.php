<?php
    namespace logic_test;

    #require from current test file
//    require_once __DIR__ . '/../../src/logic/BaseClass.php';
    use logic;


    class BaseClassTest extends \PHPUnit_Framework_TestCase {
        public function testMethod() {
            $baseClass = new logic\BaseClass();
            $this->assertTrue($baseClass->getOne() == 1);
        }
    }
?>
