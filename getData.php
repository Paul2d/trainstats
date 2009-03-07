<?php

$wsdlUrl = "http://www.livedepartureboards.co.uk/ldbws/wsdl.aspx";
$stationCodesUrl = "http://nationalrail.co.uk/stations/codes/";


$client = new SoapClient($wsdlUrl);
print_r($client->__getFunctions());
/*
    [0] => GetDepartureBoardResponse GetDepartureBoard(GetBoardRequest $parameters)
    [1] => GetArrivalBoardResponse GetArrivalBoard(GetBoardRequest $parameters)
    [2] => GetArrivalDepartureBoardResponse GetArrivalDepartureBoard(GetBoardRequest $parameters)
    [3] => GetServiceDetailsResponse GetServiceDetails(GetServiceDetailsRequest $parameters)
    [4] => GetDepartureBoardResponse GetDepartureBoard(GetBoardRequest $parameters)
    [5] => GetArrivalBoardResponse GetArrivalBoard(GetBoardRequest $parameters)
    [6] => GetArrivalDepartureBoardResponse GetArrivalDepartureBoard(GetBoardRequest $parameters)
    [7] => GetServiceDetailsResponse GetServiceDetails(GetServiceDetailsRequest $parameters)
*/

/* (numRows, crs, filterCrs, filterType) */
/* $data = $client->GetArrivalBoard(array('numRows' => 10, 'crs' => 'LBG')); */
/* print_r($data); */

/* $data = $client->GetServiceDetails(array('serviceID' => 'CLNzr0BEN3CMxt3IWl5+zg==')); */
/* print_r($data); */


$data = $client->GetServiceDetails(array('serviceID' => 'n6ULB6nThKtf2zAw6FWu5w=='));
print_r($data);


/*     $data = $client->GetArrivalBoard(array('numRows' => 10, 'crs' => 'KDB')); */
/* print_r($data); */
