<?php
include_once APP . 'Model/WorkflowModules/WorkflowBaseModule.php';

class Module_attribute_after_save extends WorkflowBaseTriggerModule
{
    public $id = 'attribute-after-save';
    public $scope = 'attribute';
    public $name = 'Attribute After Save';
    public $description = 'This trigger is called after an Attribute has been saved in the database';
    public $icon = 'cube';
    public $inputs = 0;
    public $outputs = 1;
    public $blocking = false;
    public $misp_core_format = true;
    public $trigger_overhead = self::OVERHEAD_HIGH;

    public function __construct()
    {
        parent::__construct();
        $this->trigger_overhead_message = __('This trigger is called each time an Attribute has been saved. This means that when a large quantity of Attributes are being saved (e.g. Feed pulling or synchronisation), the workflow will be run for as many time as there are Attributes.');
    }
}
