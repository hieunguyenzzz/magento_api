<?php

class Magestore_Affiliateplus_Model_System_Config_Source_Fixedpercentagetype
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'fixed', 'label'=>Mage::helper('affiliateplus')->__('Fixed Amount')),
            array('value' => 'percentage', 'label'=>Mage::helper('affiliateplus')->__('Percentage')),
        );
    }

}