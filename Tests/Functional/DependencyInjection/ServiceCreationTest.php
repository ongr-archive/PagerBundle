<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\PagerBundle\Tests\Functional\DependencyInjection;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ServiceCreationTest extends WebTestCase
{
    /**
     * Test for filter services registration.
     */
    public function testServices()
    {
        $container = self::createClient()->getContainer();

        // Test if pager extension was registered correctly.
        $this->assertTrue($container->has('ongr_pager.pager_extension'));
        $this->assertInstanceOf(
            'ONGR\PagerBundle\Twig\PagerExtension',
            $container->get('ongr_pager.pager_extension')
        );
    }
}
