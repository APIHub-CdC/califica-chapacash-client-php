<?php

namespace APIHub\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\HandlerStack;

use \APIHub\Client\ApiException;
use \APIHub\Client\Interceptor\KeyHandler;
use \APIHub\Client\Interceptor\MiddlewareEvents;

class CalificaApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new \APIHub\Client\Interceptor\KeyHandler(null, null, $password);
        $events = new \APIHub\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

        $client = new \GuzzleHttp\Client(['handler' => $handler]);
        $this->apiInstance = new \APIHub\Client\Api\CalificaApi($client);
    }
    
    public function testChapacash()
    {
        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";

        $request = new \APIHub\Client\Model\DatosConsulta();
        $request->setNumeroDocumento("XXXXXXXX");
        $request->setTipoDocumento(1);
        $request->setTipoProducto('SP');
        $request->setIngresoBruto(0000);
        $request->setImpuestosGastosVariables(0000);
        $request->setGastosFijos(0000);
        $request->setDeudasVigentes(0000);
        $request->setCuota(0000);
        $request->setPlazo(0);

        try {
            $result = $this->apiInstance->chapacash($x_api_key, $username, $password, $request);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling CalificaApi->chapacash: ', $e->getMessage(), PHP_EOL;
        }
    }
}
