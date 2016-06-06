<?php

/**
 * Interface CourierInterface
 */
interface CourierInterface
{
    
    /**
     * Fetch a consignment number.
     * @return int
     */
    public function fetchId();

    /**
     * Dispatch the consignment number to courier.
     */
    public function dispatch($id);
    
}

?>