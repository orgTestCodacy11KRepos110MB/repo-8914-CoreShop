<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2020 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Component\Payment\Model;

use CoreShop\Component\Resource\Model\TimestampableInterface;
use CoreShop\Component\Resource\Model\ToggleableInterface;
use CoreShop\Component\Resource\Model\TranslatableInterface;
use Pimcore\Model\Asset;

interface PaymentProviderInterface extends ToggleableInterface, TranslatableInterface, TimestampableInterface
{
    /**
     * @return mixed
     */
    public function getIdentifier();

    /**
     * @param null $identifier
     */
    public function setIdentifier($identifier);

    /**
     * @param null $language
     *
     * @return string
     */
    public function getTitle($language = null);

    /**
     * @param string $title
     * @param null $language
     */
    public function setTitle($title, $language = null);

    /**
     * @param null $language
     *
     * @return string
     */
    public function getDescription($language = null);

    /**
     * @param string $description
     * @param null $language
     */
    public function setDescription($description, $language = null);

    /**
     * @param null $language
     *
     * @return string
     */
    public function getInstructions($language = null);

    /**
     * @param string $instructions
     * @param null $language
     */
    public function setInstructions($instructions, $language = null);

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @param int $position
     */
    public function setPosition($position);

    /**
     * @return Asset|null
     */
    public function getLogo();

    /**
     * @param Asset $logo
     */
    public function setLogo($logo);
}
