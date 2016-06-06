<?php

/**
 * Dependencies.
 */
require_once 'Batch.class.php';
require_once 'Consignment.class.php';
require_once 'DhlCourier.class.php';
require_once 'FedexCourier.class.php';

/*
 * The batch begins.
 */
$batch = new Batch();
$batch->begin();

/*
 * Add consignment.
 */
$batch->addConsignment(new Consignment(new FedexCourier));
$batch->addConsignment(new Consignment(new DhlCourier));
$batch->addConsignment(new Consignment(new FedexCourier));
$batch->addConsignment(new Consignment(new DhlCourier));
$batch->addConsignment(new Consignment(new DhlCourier));

/*
 * The batch ends.
 */
$batch->stop();

?>