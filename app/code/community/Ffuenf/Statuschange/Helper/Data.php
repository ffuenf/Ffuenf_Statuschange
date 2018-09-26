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
class Ffuenf_Statuschange_Helper_Data extends Ffuenf_Common_Helper_Core
{
    const CONFIG_EXTENSION_ACTIVE       = 'ffuenf_statuschange/general/enable';
    const XML_PATH_LOG_SYSTEM_ACTIVE    = 'ffuenf_statuschange/log/enable';
    const XML_PATH_LOG_PROFILE_ACTIVE   = 'ffuenf_statuschange/log/profile_enable';
    const XML_PATH_LOG_EXCEPTION_ACTIVE = 'ffuenf_statuschange/log/exception_enable';

    /**
     * Variable for if the extension is active.
     *
     * @var bool
     */
    protected $bExtensionActive;

    /**
     * Check to see if the extension is active.
     *
     * @return bool
     */
    public function isExtensionActive()
    {
        return $this->getStoreFlag(self::CONFIG_EXTENSION_ACTIVE, 'bExtensionActive');
    }

    /**
     * Check to see if logging is active.
     *
     * @return bool
     */
    public function isLogActive()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_LOG_SYSTEM_ACTIVE);
    }

    /**
     * Check to see if profile logging is active.
     *
     * @return bool
     */
    public function isLogProfileActive()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_LOG_PROFILE_ACTIVE);
    }

    /**
     * Check to see if exception logging is active.
     *
     * @return bool
     */
    public function isLogExceptionActive()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_LOG_EXCEPTION_ACTIVE);
    }
}
