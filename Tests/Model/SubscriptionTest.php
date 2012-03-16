<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductSubscriptionBundle\Tests\Model;

use Vespolina\ProductSubscriptionBundle\Tests\ProductSubscriptionTestCommon;

/**
 * @author Richard D Shank <develop@zestic.com>
 */
class SubscripionTest extends ProductSubscriptionTestCommon
{
    public function testInheritance()
    {
        $subscription = $this->createSubscription();

        $this->assertInstanceOf('Vespolina\ProductBundle\Model\ProductInterface', $subscription);
        $this->assertInstanceOf('Vespolina\ProductSubscriptionBundle\Model\RecurringInterface', $subscription);
    }
}
