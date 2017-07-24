<?php

namespace Sales\Receipts\Products\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="sales_receipts_products", indexes={@ORM\Index(name="product_id_index", columns={"product_id"}), @ORM\Index(name="receipt_id_index", columns={"receipt_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Products extends \Kazist\Table\BaseTable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", length=11, nullable=false)
     */
    protected $product_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="receipt_id", type="integer", length=11, nullable=false)
     */
    protected $receipt_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", length=11, nullable=true)
     */
    protected $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_price", type="integer", length=11, nullable=true)
     */
    protected $unit_price;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=true)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=true)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    protected $date_modified;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return Products
     */
    public function setProductId($productId)
    {
        $this->product_id = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set receiptId
     *
     * @param integer $receiptId
     *
     * @return Products
     */
    public function setReceiptId($receiptId)
    {
        $this->receipt_id = $receiptId;

        return $this;
    }

    /**
     * Get receiptId
     *
     * @return integer
     */
    public function getReceiptId()
    {
        return $this->receipt_id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Products
     */
    public function setQuantity($quantity)
    {
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
     * Set unitPrice
     *
     * @param integer $unitPrice
     *
     * @return Products
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unit_price = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return integer
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Get modifiedBy
     *
     * @return integer
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }
    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        // Add your code here
    }
}

