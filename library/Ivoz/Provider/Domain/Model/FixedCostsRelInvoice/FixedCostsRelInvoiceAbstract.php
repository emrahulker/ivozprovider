<?php

namespace Ivoz\Provider\Domain\Model\FixedCostsRelInvoice;

use Assert\Assertion;
use Ivoz\Core\Application\DataTransferObjectInterface;

/**
 * FixedCostsRelInvoiceAbstract
 * @codeCoverageIgnore
 */
abstract class FixedCostsRelInvoiceAbstract
{
    /**
     * @var integer
     */
    protected $quantity;

    /**
     * @var \Ivoz\Provider\Domain\Model\Brand\BrandInterface
     */
    protected $brand;

    /**
     * @var \Ivoz\Provider\Domain\Model\FixedCost\FixedCostInterface
     */
    protected $fixedCost;

    /**
     * @var \Ivoz\Provider\Domain\Model\Invoice\InvoiceInterface
     */
    protected $invoice;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct()
    {


        $this->initChangelog();
    }

    /**
     * @param string $fieldName
     * @return mixed
     * @throws \Exception
     */
    public function initChangelog()
    {
        $values = $this->__toArray();
        if (!$this->getId()) {
            // Empty values for entities with no Id
            foreach ($values as $key => $val) {
                $values[$key] = null;
            }
        }

        $this->_initialValues = $values;
    }

    /**
     * @param string $fieldName
     * @return mixed
     * @throws \Exception
     */
    public function hasChanged($fieldName)
    {
        if (!array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }
        $currentValues = $this->__toArray();

        return $currentValues[$fieldName] != $this->_initialValues[$fieldName];
    }

    public function getInitialValue($fieldName)
    {
        if (!array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }

        return $this->_initialValues[$fieldName];
    }

    /**
     * @return FixedCostsRelInvoiceDTO
     */
    public static function createDTO()
    {
        return new FixedCostsRelInvoiceDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto FixedCostsRelInvoiceDTO
         */
        Assertion::isInstanceOf($dto, FixedCostsRelInvoiceDTO::class);

        $self = new static();

        return $self
            ->setQuantity($dto->getQuantity())
            ->setBrand($dto->getBrand())
            ->setFixedCost($dto->getFixedCost())
            ->setInvoice($dto->getInvoice())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto FixedCostsRelInvoiceDTO
         */
        Assertion::isInstanceOf($dto, FixedCostsRelInvoiceDTO::class);

        $this
            ->setQuantity($dto->getQuantity())
            ->setBrand($dto->getBrand())
            ->setFixedCost($dto->getFixedCost())
            ->setInvoice($dto->getInvoice());


        return $this;
    }

    /**
     * @return FixedCostsRelInvoiceDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setQuantity($this->getQuantity())
            ->setBrandId($this->getBrand() ? $this->getBrand()->getId() : null)
            ->setFixedCostId($this->getFixedCost() ? $this->getFixedCost()->getId() : null)
            ->setInvoiceId($this->getInvoice() ? $this->getInvoice()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'quantity' => $this->getQuantity(),
            'brandId' => $this->getBrand() ? $this->getBrand()->getId() : null,
            'fixedCostId' => $this->getFixedCost() ? $this->getFixedCost()->getId() : null,
            'invoiceId' => $this->getInvoice() ? $this->getInvoice()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return self
     */
    public function setQuantity($quantity = null)
    {
        if (!is_null($quantity)) {
            if (!is_null($quantity)) {
                Assertion::integerish($quantity);
            }
        }

        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set brand
     *
     * @param \Ivoz\Provider\Domain\Model\Brand\BrandInterface $brand
     *
     * @return self
     */
    public function setBrand(\Ivoz\Provider\Domain\Model\Brand\BrandInterface $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Ivoz\Provider\Domain\Model\Brand\BrandInterface
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set fixedCost
     *
     * @param \Ivoz\Provider\Domain\Model\FixedCost\FixedCostInterface $fixedCost
     *
     * @return self
     */
    public function setFixedCost(\Ivoz\Provider\Domain\Model\FixedCost\FixedCostInterface $fixedCost)
    {
        $this->fixedCost = $fixedCost;

        return $this;
    }

    /**
     * Get fixedCost
     *
     * @return \Ivoz\Provider\Domain\Model\FixedCost\FixedCostInterface
     */
    public function getFixedCost()
    {
        return $this->fixedCost;
    }

    /**
     * Set invoice
     *
     * @param \Ivoz\Provider\Domain\Model\Invoice\InvoiceInterface $invoice
     *
     * @return self
     */
    public function setInvoice(\Ivoz\Provider\Domain\Model\Invoice\InvoiceInterface $invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \Ivoz\Provider\Domain\Model\Invoice\InvoiceInterface
     */
    public function getInvoice()
    {
        return $this->invoice;
    }



    // @codeCoverageIgnoreEnd
}
