<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductSubscriptionBundle\Handler;

use Vespolina\CheckoutBundle\Handler\CheckoutHandler as BaseCheckoutHandler;

class CheckoutSubscriptionHandler extends BaseCheckoutHandler
{
    public function getPaymentInstructions($cartableItem)
    {
        $instruction = $cartableItem->getRecurringInstruction();

        // set card
        $instruction->setCreditCardProfile($this->checkoutManager->getCreditCard());

        return $instruction;
    }

    public function initializeCharge($instruction)
    {
        return $this->checkoutManager->getPaymentProcessor()->initializeRecurring($instruction, 123);
    }

    public function processorSuccess($cartableItem, $recurringInstructions)
    {
        // todo:  tie into ServiceAgreement to update new discounts

    }

    public function getType()
    {
        return 'subscription';
    }
}
