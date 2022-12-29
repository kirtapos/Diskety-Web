<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Diskety\UI;

use Ease\Html\ImgTag;

/**
 * Description of DiskLink
 *
 * @author vitex
 */
class Logo extends \Ease\Html\ATag {
    
    public function __construct() {
        $properties['title']=\Ease\Shared::appName();
        $properties["class"]="navbar-brand";
        $imgproperties=[
            "width"=>80,
            "class"=>"d-inline-block align-text-top"
        ];
        parent::__construct("index.php",[new ImgTag("img/logo.svg","logo",$imgproperties),"kirtapos.cz"], $properties);
    }
    
}
