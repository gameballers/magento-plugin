<?php
namespace GbPlugin\Integration\Block;

class LoadAPIKey extends \Magento\Framework\View\Element\Template
{
   
    /**
     * @var $clientKeys
     */
    protected $clientKeys;

    /**
     * LoadAPIKey constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context      $context
     * @param \GbPlugin\Integration\Observer\Shared\ClientkeysTable $clientKeys
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \GbPlugin\Integration\Observer\Shared\ClientkeysTable $clientKeys
    ) {
        parent::__construct($context);
        $this->clientKeys = $clientKeys;
    }
    /**
     * Method to return apikey
     *
     * @return string
     */
    public function getAPIKey()
    {
        return $this->clientKeys->getApiKey();
    }
    /**
     * Method to return customer session
     *
     * @return object
     */
    public function getCustomerSession()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerSession = $objectManager->create('Magento\Customer\Model\Session');
        return $customerSession;
    }

}
