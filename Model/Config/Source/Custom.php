<?php
namespace Abelbm\DisableFrontend\Model\Config\Source;


class Custom implements \Magento\Framework\Option\ArrayInterface{

    /**
     * Options for the admin config
     *
     * @author Abel Bolanos Martinez <abelbmartinez@gmail.com>
     * @return array
     */
    public function toOptionArray()
    {

        return [
            ['value' => 0, 'label' => __('Home Page Only')],
            ['value' => 1, 'label' => __('Admin')],
            ['value' => 3, 'label' => __('Frontend')],
        ];
    }
}
