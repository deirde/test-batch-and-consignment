<?php

class Consignment
{
    
    /**
     * @var CourierInterface
     */
    public $courier;

    /**
     * The consignment ID (unique number).
     * @var int $number
     */
    protected $id = 0;

    /**
     * @param CourierInterface $courier
     */
    public function __construct(CourierInterface $courier)
    {
        
        $this->courier = $courier;
        
        $this->id = $this->courier->fetchId();
        
    }

    /**
     * @return int
     */
    public function getId()
    {
        
        return $this->id;
        
    }

    /**
     * @return mixed
     */
    public function process()
    {
        
        return $this->courier->dispatch($this->id);
        
    }
    
}

?>