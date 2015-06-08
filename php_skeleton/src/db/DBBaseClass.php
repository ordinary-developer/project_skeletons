<?php
    namespace db;

    use logic;

    class DBBaseClass {
        public function getOne() {
            $baseClass = new logic\BaseClass();
            return $baseClass->getOne();
        }
    }
?>
