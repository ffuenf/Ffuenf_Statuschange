<?php

/**
 * Ffuenf_Statuschange extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2018 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */
class Ffuenf_Statuschange_Model_Observer
{
    public function changeStatus(Varien_Event_Observer $observer)
    {
        $product = $observer->getProduct();
        $status = $product->getStatus();
        if ($product->getTypeId() == 'configurable') {
            $childProducts = Mage::getModel('catalog/product_type_configurable')->getUsedProducts(null, $product);
            foreach($childProducts as $child) {
                $child->setStatus($status);
                $child->save();
            }
        }
    }
}
