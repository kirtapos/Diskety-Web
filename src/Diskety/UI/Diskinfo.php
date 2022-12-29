<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Diskety\UI;

/**
 * Description of DiskLink
 *
 * @author vitex
 */
class Diskinfo extends \Ease\Html\TableTag
{

    public function __construct(array $diskinfo, $properties = [])
    {
        $properties["class"]="table";
        parent::__construct(null, $properties);
        unset($diskinfo["id"]);
        $this->addRowHeaderColumns(array_keys($diskinfo));
        $this->addRowColumns(array_values($diskinfo));
        
    }
}
