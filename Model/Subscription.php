<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductSubscriptionBundle\Model;

use Vespolina\ProductBundle\Model\Product;
use Vespolina\ProductBundle\Model\RecurInterface;

use Vespolina\ProductBundle\Model\RecurringInterface;

class Subscription extends Product implements RecurringInterface
{
    protected $recur;

    public function setRecur(RecurInterface $recur)
    {
        $this->recur = $recur;
    }

    public function getRecur()
    {
        return $this->recur;
    }
}
