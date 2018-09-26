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

/**
 * @see Ffuenf_Statuschange_Helper_Data
 *
 * @loadSharedFixture shared
 */
class Ffuenf_Statuschange_Test_Helper_Data extends EcomDev_PHPUnit_Test_Case
{
    /**
     * @var Ffuenf_Statuschange_Helper_Data
     */
    protected $_helper;

    public function setUp()
    {
        $this->_helper = new Ffuenf_Statuschange_Helper_Data();
    }

    public function tearDown()
    {
        $this->_helper = null;
    }

    /**
     * Tests is extension active.
     *
     * @test
     * @covers Ffuenf_Statuschange_Helper_Data::isExtensionActive
     */
    public function testIsExtensionActive()
    {
        $this->assertTrue(
            Mage::helper('ffuenf_statuschange')->isExtensionActive(),
            'Extension is not active please check config'
        );
    }

    /**
     * Tests whether extension logging is active.
     *
     * @test
     * @covers Ffuenf_Statuschange_Helper_Data::isLogActive
     */
    public function testIsLogActive()
    {
        $this->assertTrue(
            $this->_helper->isLogActive(),
            'System logging is not active please check config'
        );
    }

    /**
     * Tests whether extension profile logging is active.
     *
     * @test
     * @covers Ffuenf_Statuschange_Helper_Data::isLogProfileActive
     */
    public function testIsLogProfileActive()
    {
        $this->assertTrue(
            $this->_helper->isLogProfileActive(),
            'Profile logging is not active please check config'
        );
    }

    /**
     * Tests whether extension exception logging is active.
     *
     * @test
     * @covers Ffuenf_Statuschange_Helper_Data::isLogExceptionActive
     */
    public function testIsLogExceptionActive()
    {
        $this->assertTrue(
            $this->_helper->isLogExceptionActive(),
            'Exception logging is not active please check config'
        );
    }
}
