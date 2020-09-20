<?php
namespace GbPlugin\Integration\Block;

class LoadAPIKey extends \Magento\Framework\View\Element\Template
{
   
    /**
     * @var $clientKeys
     */
    protected $clientKeys;

    /**
     * @var $customerSession
     */
    protected $customerSession;

    /**
     * LoadAPIKey constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context      $context
     * @param \Magento\Customer\Model\Session                       $customerSession
     * @param \GbPlugin\Integration\Observer\Shared\ClientkeysTable $clientKeys
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \GbPlugin\Integration\Observer\Shared\ClientkeysTable $clientKeys
    ) {
        parent::__construct($context);
        $this->clientKeys = $clientKeys;
        $this->customerSession = $customerSession;
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
        return $this->customerSession;
    }

}
