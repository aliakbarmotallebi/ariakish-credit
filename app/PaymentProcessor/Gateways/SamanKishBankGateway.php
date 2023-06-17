<?php  namespace App\PaymentProcessor\Gateways;
namespace App\PaymentProcessor\Gateways;

use App\PaymentProcessor\Interfaces\RequestedPaymentInterface;
use App\PaymentProcessor\Exceptions\GatewayException;
use App\PaymentProcessor\Interfaces\GatewayInterface;
use App\PaymentProcessor\Interfaces\PaymentableInterface;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

/**
 * SamanKishBankGateway
 */
class SamanKishBankGateway implements GatewayInterface{
    
    
    /**
     * @var mixed configs
     */
    protected $configs;

    /**
     * @var client
     */
    private $client = null;
    
    
    /**
     * @var mixed resnumber
     */
    protected $resnumber;

        
    /**
     * @var PaymentableInterface paymentable
     */
    protected PaymentableInterface $paymentable;

    
    /**
     * @var Request request
     */
    protected Request $request;


    public function __construct()
    {
		$this->configs = (object)Config::get('payment.sep');
        $this->getSoapClient();
    }
    
     /**
     * Get the value of paymentable
     */ 
    public function getPaymentable()
    {
        return $this->paymentable;
    }

    /**
     * Set the value of paymentable
     *
     * @return  self
     */ 
    public function setPaymentable($paymentable)
    {
        $this->paymentable = $paymentable;

        return $this;
    }

    /**
     * Get the value of request
     */ 
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set the value of request
     *
     * @return  self
     */ 
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get the value of resnumber
     */ 
    public function getResnumber()
    {
        return $this->resnumber;
    }

    /**
     * Set the value of resnumber
     *
     * @return  self
     */ 
    public function setResnumber($resnumber)
    {
        $this->resnumber = $resnumber;

        return $this;
    }

    /**
     * Get mellat soap client
     * @return \SoapClient
     * @throws \Exception
     */
    protected function getSoapClient()
    {
        
        $this->configs = (object)Config::get('payment.sep');
        try {
            return $this->client = new Client([
                'curl' => [CURLOPT_SSL_CIPHER_LIST => 'DEFAULT@SECLEVEL=1'],
            ]);
        } catch (\SoapFault $e) {
            return false;
        }
    }


    public function redirect() 
    {

        $url = $this->configs->paymentUrl;

        $inputs = [
            'Token' => $this->getResnumber(),
            'GetMethod' => false,
        ];

        return view('redirector', compact('inputs', 'url'))->render();
    }

    public function request()
    {
        $this->getSoapClient();
        $data = array(
            'action' => 'token',
            'TerminalId' => $this->configs->terminalId,
            'Amount' => $this->paymentable->getAmountPay(),
            'ResNum' => $this->paymentable->id,
            'RedirectUrl' => $this->configs->callbackUrl,
        );

        $response = $this->client->post(
            $this->configs->getTokenUrl,
            [
                'json' => $data,
            ]
        );

        $responseStatus = $response->getStatusCode();

        if ($responseStatus != 200) { 
            return false;
        }

        $jsonBody = $response->getBody()->getContents();
        $responseData = json_decode($jsonBody, true);

        if ($responseData['status'] != 1) {
            return false;
        }
        \Log::debug($responseData);

        $this->setResnumber($responseData['token']);
        return true;
    }



    public function verify()
    {
        
        $this->getSoapClient();

        $status = $this->request->get('State');
        \Log::debug($this->request);
        if ($status != 'OK') {
           return false;
        }

        $data = array(
            'RefNum' => $this->request['RefNum'] ?? NULL,
            'TerminalNumber' => $this->configs->terminalId,
        );
        
        $response = $this->client->post(
            $this->configs->verificationUrl,
            [
                'json' => $data,
            ]
        );

        if ($response->getStatusCode() != 200) {
            return false;
        }

        $jsonData = $response->getBody()->getContents();
        $responseData = json_decode($jsonData, true);
        
        if ($responseData['ResultCode'] != 0) {
			return false;
        }

        $this->setResnumber($this->request['Token'] ?? NULL);
        return true;
    }


}