<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Diskety\UI;

/**
 * Description of NavBar
 *
 * @author vitex
 */
class Navbar extends \Ease\TWB5\Navbar
{
    public function __construct($brand = null, $name = 'navbar',
                                $properties = [])
    {
        parent::__construct($brand ? $brand : new Logo() , $name, $properties);
        $this->addMenuItem( new \Ease\Html\ATag('list.php?type=System', _('System Images')) );
        $this->addMenuItem( new \Ease\Html\ATag('list.php?type=Driver', _('Driver Images')) );
    }
}
