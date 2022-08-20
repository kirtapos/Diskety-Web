<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Diskety\UI;


/**
 * Description of Disketa
 *
 * @author vitex
 */
class Disketa extends \Ease\Html\ImgTag {
    
    //    public $capacity = '1.44';
    public function __construct($name,$capacity, $properties = []) {
        $properties['width'] = '20%';
        parent::__construct('img/'.$capacity, $capacity, $properties);
    }
}
