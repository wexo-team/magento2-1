<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Multishipping\Test\Constraint;

use Magento\Multishipping\Test\Page\MultishippingCheckoutSuccess;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Assert that success message for multiple address checkout is correct.
 */
class AssertOrderSuccessPlacedMessage extends AbstractConstraint
{
    /* tags */
    const SEVERITY = 'high';
    /* end tags */

    /**
     * Expected success message
     */
    const SUCCESS_MESSAGE = 'Your order has been received.';

    /**
     * Assert that success message is correct.
     *
     * @param MultishippingCheckoutSuccess $multishippingCheckoutSuccess
     * @return void
     */
    public function processAssert(MultishippingCheckoutSuccess $multishippingCheckoutSuccess)
    {
        \PHPUnit_Framework_Assert::assertEquals(
            self::SUCCESS_MESSAGE,
            $multishippingCheckoutSuccess->getTitleBlock()->getTitle(),
            'Wrong success message is displayed.'
        );
    }

    /**
     * Returns string representation of successful assertion.
     *
     * @return string
     */
    public function toString()
    {
        return 'Success message on multiple address checkout page is correct.';
    }
}
