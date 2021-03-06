<?php

namespace Omnipay\Newpay;


use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Common\Message\RequestInterface;

/**
 * @method RequestInterface completeAuthorize(array $options = array())
 * @method RequestInterface capture(array $options = array())
 * @method RequestInterface void(array $options = array())
 * @method RequestInterface createCard(array $options = array())
 * @method RequestInterface updateCard(array $options = array())
 * @method RequestInterface deleteCard(array $options = array())
 * @method RequestInterface authorize(array $options = array())
 */
class Gateway extends AbstractGateway
{

    public function getName()
    {
        return 'Raiffeisen';
    }

    public function getDefaultParameters()
    {
        return [
            'Currency' => 975, // BGN
            'version' => 1,
            'testMode' => true,
        ];
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('MerchantID', $value);
    }

    public function setTerminalId($value)
    {
        return $this->setParameter('TerminalID', $value);
    }

    public function getPrivateKey()
    {
        return $this->getParameter('privateKey');
    }

    public function setPrivateKey($value)
    {
        return $this->setParameter('privateKey', $value);
    }

    public function getGatewayCertificate()
    {
        return $this->getParameter('gatewayCertificate');
    }

    public function setGatewayCertificate($value)
    {
        return $this->setParameter('gatewayCertificate', $value);
    }

    /**
     * @param  boolean $value
     * @return $this
     */
    public function setTestMode($value)
    {
       
        return $this->setParameter('testMode', $value);
    }

    /**
     * @param array $parameters
     * @return Message\PurchaseRequest|AbstractRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Newpay\Message\PurchaseRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return Message\CompletePurchaseRequest|AbstractRequest
     */
    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Newpay\Message\CompletePurchaseRequest', $parameters);
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface capture(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface void(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface createCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface updateCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
    }
}