<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\PagerBundle\Paging\Adapters;

use ONGR\PagerBundle\Paging\PagerAdapterInterface;

/**
 * Adapter used to simply calculate offset for a given page.
 */
class CountAdapter implements PagerAdapterInterface
{
    /**
     * @var int
     */
    private $count;

    /**
     * Constructor.
     *
     * @param int $count
     */
    public function __construct($count)
    {
        $this->count = $count;
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalResults()
    {
        return $this->count;
    }

    /**
     * {@inheritdoc}
     */
    public function getResults($offset, $limit)
    {
        return [];
    }
}
