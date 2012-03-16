<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductSubscriptionBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @author Richard D Shank <develop@zestic.com>
 */
abstract class ProductSubscriptionTestCommon extends WebTestCase
{
    protected function createSubscription()
    {
        $subscription = $this->getMock('Vespolina\ProductSubscriptionBundle\Model\Subscription');

        return $subscription;
    }
}
