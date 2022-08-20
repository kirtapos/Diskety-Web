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
class DiskLink extends \Ease\Html\ATag {
    
    public function __construct(array $diskinfo, $properties = []) {
        $properties['title'] = $diskinfo['name'];
        parent::__construct('disk.php?id='.$diskinfo['id'], new Disketa($diskinfo['name'], \Diskety\Disketa::capacityToType( $diskinfo['capacity'] ).'.svg'  ) , $properties);
    }
    
}
