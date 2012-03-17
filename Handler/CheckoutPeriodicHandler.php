<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductSubscriptionBundle\Handler;

use JMS\Payment\CoreBundle\Document\ExtendedData;
use JMS\Payment\CoreBundle\Document\FinancialTransaction;
use Vespolina\CheckoutBundle\Handler\CheckoutHandler as BaseCheckoutHandler;

class CheckoutPeriodicHandler extends BaseCheckoutHandler
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
        $transaction = new FinancialTransaction();
        $transaction->setRequestedAmount($instruction->getAmount());

        $ed = $instruction->getExtendedData();
        if ($creditCard = $instruction->getCreditCardProfile()) {
            $ed->set('creditCard', $creditCard);
        }
        $transaction->setExtendedData($ed);

        $this->checkoutManager->getPaymentProcessor()->approveAndDeposit($transaction, 123);

        $recurTransaction = new \Application\Vespolina\ProductBundle\Document\RecurringTransaction();
        $recurTransaction->setCreditCardProfile($creditCard);
        $ed->set('creditCard', null);
        $recurTransaction->setExtendedData($ed);

        return $recurTransaction;
    }

    public function processorSuccess($cartableItem, $recurringInstructions)
    {
        // todo:  tie into ServiceAgreement to update new discounts

    }

    public function getTypes()
    {
        return 'periodic';
    }
}
