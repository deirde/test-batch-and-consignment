<?php

class Batch
{
    
    /**
     * The current batch state.
     */
    const OPEN = 0;
    const PROCESSED = 1;
    const CLOSED = 2;
    
    protected $state = self::CLOSED;
    
    protected $courier;
    
    /**
     * @var array
     */
    protected $consignments = [];

    /**
     * Start the dispatch period.
     */
    public function begin()
    {
        
        if ($this->state === self::CLOSED) {
            
            $this->state = self::OPEN;
            
        } else {
            
            // Skip, message or error.
            
        }
        
    }

    /**
     * Add the consignment.
     * @param Consignment $consignment
     */
    public function addConsignment(Consignment $consignment)
    {
        
        $this->consignments[get_class($consignment->courier)][] = $consignment;
        
    }

    /**
     * Process the consignments.
     * 
     */
    public function stop()
    {
        
        if ($this->state === self::OPEN) {
            
            $this->state = self::PROCESSED;
        
            var_dump($this->consignments);
            
            // Loop through each of the consignment.
            foreach ($this->consignments as $consignment_ids) {
                
                foreach ($consignment_ids as $consignment) {
                    
                    // Process the consignment.
                    $consignment->process();
                    
                }
                
            }
            
            $this->state = self::CLOSED;
            
        } else {
            
            // Skip, message or error.
            
        }
        
    }

}

?>