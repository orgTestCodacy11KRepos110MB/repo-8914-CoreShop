<?php

declare(strict_types=1);

/*
 * CoreShop
 *
 * This source file is available under two different licenses:
 *  - GNU General Public License version 3 (GPLv3)
 *  - CoreShop Commercial License (CCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 *
 */

namespace CoreShop\Behat\Service\Exception;

use CoreShop\Behat\Service\NotificationType;

final class NotificationExpectationMismatchException extends \RuntimeException
{
    public function __construct(
        NotificationType $expectedType,
        $expectedMessage,
        $code = 0,
        \Exception $previous = null,
    ) {
        $message = sprintf(
            'Expected *%s* notification with a "%s" message was not found',
            $expectedType,
            $expectedMessage,
        );

        parent::__construct($message, $code, $previous);
    }
}
