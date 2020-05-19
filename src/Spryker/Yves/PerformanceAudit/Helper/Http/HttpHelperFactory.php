<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Yves\PerformanceAudit\Helper\Http;

use Spryker\Shared\PerformanceAudit\Helper\Http\HttpHelperInterface;
use Spryker\Yves\PerformanceAudit\FactoryResolver\FactoryResolver;

class HttpHelperFactory
{
    /**
     * @return \Spryker\Shared\PerformanceAudit\Helper\Http\HttpHelperInterface
     */
    public static function create(): HttpHelperInterface
    {
        $factoryResolver = new FactoryResolver();
        $factory = $factoryResolver->getFactory();

        return $factory->createHttpHelper();
    }
}
