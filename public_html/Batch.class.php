<?php

class Batch
{
    
    const OPEN = 0;
    const PROCESSED = 1;
    const CLOSED = 2;
    
    protected $state;
    
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
            
            // Message or error.
            
        }
        
    }

    /**
     * Add the consignment.
     * @param Consignment $consignment
     */
    public function addConsignment(Consignment $consignment)
    {
        
        $this->consignments[$consignment->getId()][] = $consignment;
        
    }

    /**
     * Process the consignments.
     * 
     */
    public function stop()
    {
        
        if ($this->state === self::OPEN) {
            
            $this->state = self::PROCESSED;
            
            // Loop through each of the consignment.
            foreach ($this->consignments as $consignment_ids) {
                
                foreach ($consignment_ids as $consignment) {
                
                    $consignment->process();
                    
                }
                
            }
            
            $this->state = self::CLOSED;
            
        } else {
            
            // Message or error.
            
        }
        
    }

}

?>