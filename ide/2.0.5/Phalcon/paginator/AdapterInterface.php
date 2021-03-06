<?php

namespace Phalcon\Paginator;

/**
 * Phalcon\Paginator\AdapterInterface
 * Interface for Phalcon\Paginator adapters
 */
interface AdapterInterface
{

    /**
     * Phalcon\Paginator\AdapterInterface constructor
     *
     * @param array $config 
     */
    public function __construct($config);

    /**
     * Set the current page number
     *
     * @param int $page 
     */
    public function setCurrentPage($page);

    /**
     * Returns a slice of the resultset to show in the pagination
     *
     * @return \stdClass 
     */
    public function getPaginate();

    /**
     * Set current rows limit
     *
     * @param int $limit 
     */
    public function setLimit($limit);

    /**
     * Get current rows limit
     *
     * @return int 
     */
    public function getLimit();

}
