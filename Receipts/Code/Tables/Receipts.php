<?php

namespace Sales\Receipts\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Receipts
 *
 * @ORM\Table(name="sales_receipts")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Receipts extends \Kazist\Table\BaseTable
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
     * @var string
     *
     * @ORM\Column(name="receipt_no", type="string", length=255, nullable=false)
     */
    protected $receipt_no;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="receipt_date", type="date", nullable=true)
     */
    protected $receipt_date;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    protected $notes;

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
     * Set receiptNo
     *
     * @param string $receiptNo
     *
     * @return Receipts
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receipt_no = $receiptNo;

        return $this;
    }

    /**
     * Get receiptNo
     *
     * @return string
     */
    public function getReceiptNo()
    {
        return $this->receipt_no;
    }

    /**
     * Set receiptDate
     *
     * @param \DateTime $receiptDate
     *
     * @return Receipts
     */
    public function setReceiptDate($receiptDate)
    {
        $this->receipt_date = $receiptDate;

        return $this;
    }

    /**
     * Get receiptDate
     *
     * @return \DateTime
     */
    public function getReceiptDate()
    {
        return $this->receipt_date;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Receipts
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
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

