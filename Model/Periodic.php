<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\ProductSubscriptionBundle\Model;

use Vespolina\ProductSubscriptionBundle\Model\Subscription;

class Periodic extends Subscription
{
    public function getType()
    {
        return 'periodic';
    }
}
