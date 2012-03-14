<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductSubscriptionBundle\Handler;

use Vespolina\CheckoutBundle\Handler\CheckoutHandler as BaseCheckoutHandler;

class CheckoutHandler extends BaseCheckoutHandler
{
    public function getPaymentInstructions($cartableItem)
    {
        // todo: getRecurringTransaction
        $recurringPayment = $cartableItem->getRecur(); // todo: this is SO wrong

        // set recurring information
        $recurringPayment->setStartDate(date('Y-m-d').'T00:00:00Z');
        $recurringPayment->setCreditCardProfile($this->checkoutManager->getCreditCard());
        //$recurringPayment->setProvider($provider);

        // getRecurringTransaction
        return $recurringPayment;
    }

    public function processorSuccess($cartableItem, $recurringInstructions, $response)
    {
        // todo:  tie into ServiceAgreement to update new discounts

    }

    public function getType()
    {
        return 'subscription';
    }

}
