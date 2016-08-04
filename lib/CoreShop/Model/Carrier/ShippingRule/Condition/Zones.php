<?php
/**
 * CoreShop.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2016 Dominik Pfaffenbauer (http://www.pfaffenbauer.at)
 * @license    http://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Model\Carrier\ShippingRule\Condition;

use CoreShop\Model;
use CoreShop\Model\Carrier\ShippingRule;
use CoreShop\Tool;

/**
 * Class Zones
 * @package CoreShop\Model\Carrier\ShippingRule\Condition
 */
class Zones extends AbstractCondition
{
    /**
     * @var string
     */
    public $type = 'zones';

    /**
     * @var array
     */
    public $zones;

    /**
     * Check if Cart is Valid for Condition.
     *
     * @param Model\Cart $cart
     * @param Model\User\Address $address;
     * @param ShippingRule $shippingRule
     *
     * @return mixed
     */
    public function checkCondition(Model\Cart $cart, Model\User\Address $address, ShippingRule $shippingRule) {
        foreach($this->getZones() as $zone) {
            if(intval(Tool::getDeliveryAddress()->getCountry()->getZone()->getId()) === $zone) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return array
     */
    public function getZones()
    {
        return $this->zones;
    }

    /**
     * @param array $zones
     */
    public function setZones($zones)
    {
        $this->zones = $zones;
    }
}
