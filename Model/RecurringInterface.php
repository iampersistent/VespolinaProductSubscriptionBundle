<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\ProductSubscriptionBundle\Model;

use JMS\Payment\CoreBundle\Model\RecurringTransactionInterface;
use Vespolina\ProductSubscriptionBundle\Model\RecurInterface;

/**
 * @author Richard D Shank <develop@zestic.com>
 */
interface RecurringInterface
{
    /**
     * Set the Recur object for this recurring product
     *
     * @param Vespolina\ProductSubscriptionBundle\Model\RecurInterface $recur
     */
    function setRecur(RecurringTransactionInterface $recur);

    /**
     * Return the Recur object for this recurring product
     *
     * @return Vespolina\ProductSubscriptionBundle\Model\RecurInterface
     */
    function getRecur();
}
