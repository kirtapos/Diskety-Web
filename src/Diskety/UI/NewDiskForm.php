<?php

// New Disk Form
// Web Form with Disk name and image upload

namespace Diskety\UI;

class NewDiskForm extends \Ease\Html\Form
{

    /**
     * New Disk Form
     * 
     * @param array $properties
     */
    public function __construct($properties = [])
    {
        parent::__construct($properties);

        $this->addInput(new \Ease\Html\InputTextTag('name', null, ['placeholder' => _('Disk name')]));
        $this->addInput(new \Ease\Html\InputFileTag('image', null, ['placeholder' => _('Disk image')]));
        $this->addItem(new \Ease\Html\InputSubmitTag('save', _('Save'), ['class' => 'btn btn-success']));
    }
}
