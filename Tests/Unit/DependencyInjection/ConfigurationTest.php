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

use ONGR\PagerBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Processor;

/**
 * Unit tests for configuration
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests if expected configuration structure works well.
     */
    public function testConfiguration()
    {
        $processor = new Processor();
        $processedConfig = $processor->processConfiguration(new Configuration(), []);

        $this->assertEmpty($processedConfig);
    }
}
