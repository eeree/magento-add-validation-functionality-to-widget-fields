<?php

/**
 * Class Eeree_EnableValidationForWidgets_Block_Widget_Adminhtml_Widget_Instance_Edit_Tab_Properties
 */
class Eeree_EnableValidationForWidgets_Block_Widget_Adminhtml_Widget_Instance_Edit_Tab_Properties
    extends Mage_Widget_Block_Adminhtml_Widget_Instance_Edit_Tab_Properties
{
    /**
     * @param Varien_Object $parameter
     * @return Varien_Data_Form_Element_Abstract
     */
    protected function _addField($parameter)
    {
        $field = $this->_getParentAddFieldResult($parameter);
        /** @noinspection PhpUndefinedMethodInspection */
        $validate = $parameter->getValidate();
        if ($field && $validate) {
            /** @noinspection PhpUndefinedMethodInspection */
            $class = $field->getClass();
            /** @noinspection PhpUndefinedMethodInspection */
            $field->setClass("{$class} {$validate}");
        }

        return $field;
    }

    /**
     * @param Varien_Object $parameter
     * @return Varien_Data_Form_Element_Abstract
     */
    protected function _getParentAddFieldResult($parameter) {
        return parent::_addField($parameter);
    }
}