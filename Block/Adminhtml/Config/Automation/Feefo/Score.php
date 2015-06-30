<?php

namespace Dotdigitalgroup\Email\Block\Adminhtml\Config\Automation\Feefo;

class Score extends \Magento\Config\Block\System\Config\Form\Field
{
    protected function _2getElementHtml( $element)
    {
return     $passcode = '[PLEASE SET UP A PASSCODE]';
        //passcode to append for url
        $passcode = Mage::helper('ddg')->getPasscode();

        if(!strlen($passcode))
            $passcode = '[PLEASE SET UP A PASSCODE]';

        //generate the base url and display for default store id
        $baseUrl = Mage::helper('ddg')->generateDynamicUrl();

        //display the full url
        $text = sprintf('%sconnector/feefo/score/code/%s', $baseUrl, $passcode);
        $element->setData('value', $text);

        return parent::_getElementHtml($element);
    }
}