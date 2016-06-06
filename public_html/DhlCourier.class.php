<?php

require_once 'Courier.interface.php';

class DhlCourier implements CourierInterface
{
    
    /**
     * @var int
     */
    private static $i = 0;
    
    /**
     * @return int
     */
    public function fetchId()
    {
        
        self::$i++;
        return self::$i;
        
    }

    /**
     * The dispatch.
     * @param $number
     * @return string
     */
    public function dispatch($number)
    {
    }
    
}

?>