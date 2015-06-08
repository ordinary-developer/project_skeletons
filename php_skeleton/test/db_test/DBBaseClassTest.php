<?php
    namespace db_test;

    use db;

    class BaseClassTest extends \PHPUnit_Framework_TestCase {
        public function testMethod() {
            $dbBaseClass = new db\DBBaseClass();
            $this->assertTrue($dbBaseClass->getOne() == 1);
        }
    }
?>
