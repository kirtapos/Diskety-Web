<?php

namespace Diskety;

class Disketa extends \Ease\SQL\Engine {
    public $myTable = 'diskety';
    public $nameColumn = 'name';

    /**
     * Size of disquette according its size in byte
     * 
     * @param integer $capacity
     * 
     * @return string
     */
    public static function capacityToType($capacity) {
        $type = 'x';

        if($capacity <= 1200000 ){
            $type = '5.25';
        } elseif($capacity <= 1400000) {
            $type = '3.5';
        }
        return $type;
    }

}
