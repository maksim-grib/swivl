<?php

namespace Acme\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class News
 *
 * @ORM\Entity(repositoryClass="NewsRepository")
 * @ORM\Table(name="news", indexes={@ORM\Index(name="date_index", columns={"date"})}))
 *
 * @package Acme\NewsBundle\Entity
 */
class News
{
    /**
     * ID
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    protected $id;

    /**
     * Title
     *
     * @ORM\Column(type="string", length=100)
     *
     *
     * @var string
     */
    protected $title;

    /**
     * Body
     *
     * @ORM\Column(type="text")
     *
     * @var string
     */
    protected $body;

    /**
     * Status
     *
     * @ORM\Column(type="boolean", options={"default"=1})
     *
     * @var boolean
     */
    protected $status;

    /**
     * Date
     *
     * @ORM\Column(type="datetime")
     *
     * @var DateTime
     */
    protected $date;

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
     * Set title
     *
     * @param string $title
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return News
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return News
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return News
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
