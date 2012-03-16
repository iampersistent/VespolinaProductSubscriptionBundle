<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductSubscriptionBundle\Model;

use Vespolina\ProductBundle\Model\Product;
use JMS\Payment\CoreBundle\Model\RecurringInstructionInterface;
use JMS\Payment\CoreBundle\Model\RecurringTransactionInterface;

use Vespolina\ProductSubscriptionBundle\Model\RecurringInterface;

class Subscription extends Product implements RecurringInterface
{
    protected $paymentInstruction;
    protected $paymentTransactions;

    public function setPaymentInstruction(RecurringInstructionInterface $instruction)
    {
        $this->paymentInstruction = $instruction;
    }

    public function getPaymentInstruction()
    {
        return $this->paymentInstruction;
    }

    public function addPaymentTransaction(RecurringTransactionInterface $transaction)
    {
        $this->paymentTransactions[] = $transaction;
    }

    public function getPaymentTransactions()
    {
        return $this->paymentTransactions;
    }

    public function getPaymentTransaction(array $parameters)
    {
        // todo find by different parameters, use mongodb like syntax
    }

    public function getType()
    {
        return 'subscription';
    }

}
