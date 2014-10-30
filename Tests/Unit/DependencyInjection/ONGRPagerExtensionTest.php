<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\PagerBundle\Tests\Unit\DependencyInjection;

use ONGR\PagerBundle\DependencyInjection\ONGRPagerExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Unit tests for Pager extension
 */
class ONGRPagerExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check if loading works as expected.
     */
    public function testLoad()
    {
        $container = new ContainerBuilder();

        $extension = new ONGRPagerExtension();
        $extension->load([], $container);

        $this->assertTrue($container->has('ongr_pager.pager_extension'));
    }
}
