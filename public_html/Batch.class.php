<?php

class Batch
{
    
    /**
     * @var array
     */
    protected $consignments = [];

    /**
     * Start the dispatch period.
     */
    public function startDispatchPeriod()
    {
    }

    /**
     * Add a consignment to the current batch
     *
     * @param Consignment $consignment
     */
    public function addConsignment(Consignment $consignment)
    {
        $this->consignments[] = $consignment;
    }

    /**
     * Process the consignments.
     * 
     */
    public function endDispatchPeriod()
    {
        
        // loop through each of the consignments
        // the storage dependency could be use here to track the consignment numbers
        // i.e. $c->getNumber()
        foreach ($this->consignments as $consignment) {
            
            $consignment->process();
            
        }
        
    }

}

?>