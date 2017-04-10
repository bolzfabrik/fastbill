<?php
/**
 * @package fastbill
 *
 * @author Daniel Holzmann <d@velopment.at>
 * @date 23.09.13
 * @time 19:26
 */

namespace DVelopment\FastBill\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class Customer
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CUSTOMER_ID")
     */
    private $customerId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CUSTOMER_NUMBER")
     */
    private $customerNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CUSTOMER_EXT_UID")
     */
    private $customerExtUid;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CUSTOMER_TYPE")
     */
    private $customerType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ORGANIZATION")
     */
    private $organization;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("POSITION")
     */
    private $position;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SALUTATION")
     */
    private $salutation;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("FIRST_NAME")
     */
    private $firstName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LAST_NAME")
     */
    private $lastName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ADDRESS")
     */
    private $address;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ADDRESS_2")
     */
    private $address2;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ZIPCODE")
     */
    private $zipcode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CITY")
     */
    private $city;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COUNTRY_CODE")
     */
    private $countryCode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PHONE")
     */
    private $phone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PHONE_2")
     */
    private $phone2;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("FAX")
     */
    private $fax;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("MOBILE")
     */
    private $mobile;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("EMAIL")
     */
    private $email;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ACCOUNT_RECEIVABLE")
     */
    private $accountReceivable;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CURRENCY_CODE")
     */
    private $currencyCode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("VAT_ID")
     */
    private $vatId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DAYS_FOR_PAYMENT")
     */
    private $daysForPayment;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("PAYMENT_TYPE")
     */
    private $paymentType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PAYMENT_METHOD")
     */
    private $paymentMethod;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("SHOW_PAYMENT_NOTICE")
     */
    private $showPaymentNotice;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_NAME")
     */
    private $bankName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    private $bankCode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_ACCOUNT_NUMBER")
     */
    private $bankAccountNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_IBAN")
     */
    private $bankIban;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_BIC")
     */
    private $bankBic;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_ACCOUNT_OWNER")
     */
    private $bankAccountOwner;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DASHBOARD_URL")
     */
    private $dashboardUrl;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CHANGEDATA_URL")
     */
    private $changedataUrl;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("AFFILIATE")
     */
    private $affiliate;

    public function setAffiliate($affiliate) {
        $this->$affiliate = $affiliate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountReceivable()
    {
        return $this->accountReceivable;
    }

    /**
     * @param string $accountReceivable
     *
     * @return Customer
     */
    public function setAccountReceivable($accountReceivable)
    {
        $this->accountReceivable = $accountReceivable;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     *
     * @return Customer
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * @param string $bankAccountNumber
     *
     * @return Customer
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankIban()
    {
        return $this->bankIban;
    }

    /**
     * @param string $bankIban
     *
     * @return Customer
     */
    public function setBankIban($bankIban)
    {
        $this->bankIban = $bankIban;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankBic()
    {
        return $this->bankBic;
    }

    /**
     * @param string $bankBic
     *
     * @return Customer
     */
    public function setBankBic($bankBic)
    {
        $this->bankBic = $bankBic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankAccountOwner()
    {
        return $this->bankAccountOwner;
    }

    /**
     * @param mixed $bankAccountOwner
     *
     * @return Customer
     */
    public function setBankAccountOwner($bankAccountOwner)
    {
        $this->bankAccountOwner = $bankAccountOwner;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @param string $bankCode
     *
     * @return Customer
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     *
     * @return Customer
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     *
     * @return Customer
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     *
     * @return Customer
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerExtUid()
    {
        return $this->customerExtUid;
    }

    /**
     * @param string $customerExtUid
     *
     * @return Customer
     */
    public function setCustomerExtUid($customerExtUid)
    {
        $this->customerExtUid = $customerExtUid;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @param int $customerNumber
     *
     * @return Customer
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * @param string $customerType
     *
     * @return Customer
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;
        return $this;
    }

    /**
     * @return int
     */
    public function getDaysForPayment()
    {
        return $this->daysForPayment;
    }

    /**
     * @param int $daysForPayment
     *
     * @return Customer
     */
    public function setDaysForPayment($daysForPayment)
    {
        $this->daysForPayment = $daysForPayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     *
     * @return Customer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     *
     * @return Customer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     *
     * @return Customer
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param int $paymentType
     *
     * @return Customer
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     *
     * @return Customer
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * @param string $phone2
     *
     * @return Customer
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
        return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return Customer
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param string $salutation
     *
     * @return Customer
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowPaymentNotice()
    {
        return $this->showPaymentNotice;
    }

    /**
     * @param boolean $showPaymentNotice
     *
     * @return Customer
     */
    public function setShowPaymentNotice($showPaymentNotice)
    {
        $this->showPaymentNotice = $showPaymentNotice;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * @param string $vatId
     *
     * @return Customer
     */
    public function setVatId($vatId)
    {
        $this->vatId = $vatId;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     *
     * @return Customer
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     *
     * @return Customer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDashboardUrl()
    {
        return $this->dashboardUrl;
    }

    /**
     * @param string $dashboardUrl
     *
     * @return Customer
     */
    public function setDashboardUrl($dashboardUrl)
    {
        $this->dashboardUrl = $dashboardUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getChangedataUrl()
    {
        return $this->changedataUrl;
    }

    /**
     * @param string $changedataUrl
     *
     * @return Customer
     */
    public function setChangedataUrl($changedataUrl)
    {
        $this->changedataUrl = $changedataUrl;
        return $this;
    }
}

