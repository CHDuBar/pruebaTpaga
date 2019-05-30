<?php
namespace CHDuBar\PruebaTpagaEcommerce\Utility;

define ("URL", 'https://stag.wallet.tpaga.co/merchants/api/v1/');

class TpagaConnectionUtility {
    
    
	public static function authentication2(&$code_authentication){
        
        
        //create a new cURL resource
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://stag.wallet.tpaga.co/merchants/api/v1/');
        

        //setup request to send json via POST
        $payload = json_encode($code_authentication);
        
        //Tell cURL that we want to send a POST request.
        curl_setopt($curl, CURLOPT_POST, 1);
        //attach encoded JSON string to the POST fields        
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        //set the content type to application/json
        curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, 1);
        //curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization'));
        //return response instead of outputting
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($curl, CURLOPT_VERBOSE, true);
        //execute the POST request
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($curl, 'Request');
        $result = curl_exec($curl);
        $resultados_decodificados = json_decode($result);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($resultados_decodificados, 'Request');
    }

    public static function payment_request(&$user, &$password, &$json_array){
        
        
        //create a new cURL resource
        $curl = curl_init('https://stag.wallet.tpaga.co/merchants/api/v1/');

        //curl_setopt($curl, CURLOPT_URL, );
        
        $headers = array(
            'Authorization: Basic '. base64_encode("$user:$password"),
            'Cache-Control: no-cache',
            'Content-Type: application/json'
        );
        //setup request to send json via POST
        $payload = json_encode($json_array);
        
        //Tell cURL that we want to send a POST request.
        curl_setopt($curl, CURLOPT_POST, 1);
        //attach encoded JSON string to the POST fields        
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        //set the content type to application/json
        curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //return response instead of outputting
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_VERBOSE, true);
        //execute the POST request
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($json_array, 'Request');

        $result = curl_exec($curl);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(curl_getinfo ( $curl,  CURLINFO_HTTP_CODE) );
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(curl_getinfo ( $curl,  CURLINFO_EFFECTIVE_URL) );
        
        $resultados_decodificados = json_decode($result);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($resultados_decodificados, 'Request');
    }
}