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
 * Array adapter for pager.
 */
class ArrayAdapter implements PagerAdapterInterface
{
    /**
     * Container of items.
     *
     * @var array
     */
    protected $array;

    /**
     * Cache for number of items.
     *
     * @var null
     */
    protected $totalItems = null;

    /**
     * Constructor.
     *
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalResults()
    {
        if (null === $this->totalItems) {
            $this->totalItems = count($this->array);
        }

        return $this->totalItems;
    }

    /**
     * {@inheritdoc}
     */
    public function getResults($offset, $limit)
    {
        return array_slice($this->array, $offset, $limit);
    }
}
