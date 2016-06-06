# TEST - BATCH AND CONSIGNMENT #

Scenario
-----
We have a client, Bobs Clothing, who sell fashion clothing online. Bob has asked us to build an order dispatch system, for sending out customer orders with one of a number of different couriers.<br/>
At the start of a normal working day, a new batch will be started, and it will be closed at the end of the day, when no more parcels are going to be shipped. This is called the dispatch period.<br/>
Each parcel sent out with a courier is called a consignment. Each consignment will be given a unique number - each courier will supply an algorithm for generating their own format of consignment numbers.<br/>
At the end of each dispatch period, a list of all the consignment numbers needs to be sent to each individual courier.<br/>
The method of data transport varies from courier to courier (e.g. Royal Mail use email, ANC use anonymous FTP).<br/>

What you should produce
-----------------------
Build a class structure to facilitate the implementation of the scenario set out above.<br/>
Assume that your class library will be given to another developer at a later date to build the interface for the client.<br/>
The client interface will have three primary functions;<br/>
1. Start new batch
2. Add consignment
3. End current batch

Note
----
This is a technical test. TIME: 90 minutes.