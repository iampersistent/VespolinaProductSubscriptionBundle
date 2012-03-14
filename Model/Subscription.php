<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductSubscriptionBundle\Model;

use Vespolina\ProductBundle\Model\Product;
use JMS\Payment\CoreBundle\Model\RecurringTransactionInterface;

use Vespolina\ProductSubscriptionBundle\Model\RecurringInterface;

class Subscription extends Product implements RecurringInterface
{
    protected $recur;

    // yes, this is a hack. I will fix it, I promise.
    public function setRecur(RecurringTransactionInterface $recur)
    {
        $this->recur = $recur;
    }

    public function getRecur()
    {
        return $this->recur;
    }

    public function getType()
    {
        return 'subscription';
    }
}
