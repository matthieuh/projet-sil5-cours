<?php

namespace sil12\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Client
 */
class Client implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $password;

    /**
     * @var boolean
     */
    private $isAdministrateur = false;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderline;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderline = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add orderline
     *
     * @param \sil12\VitrineBundle\Entity\Orderhat $orderline
     * @return Client
     */
    public function addOrderline(\sil12\VitrineBundle\Entity\Orderhat $orderline)
    {
        $this->orderline[] = $orderline;

        return $this;
    }

    /**
     * Remove orderline
     *
     * @param \sil12\VitrineBundle\Entity\Orderhat $orderline
     */
    public function removeOrderline(\sil12\VitrineBundle\Entity\Orderhat $orderline)
    {
        $this->orderline->removeElement($orderline);
    }

    /**
     * Get orderline
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderline()
    {
        return $this->orderline;
    }

    public function __toString()
    {
        return (string)$this->getName();
    }

    /**
     * Set isAdministrateur
     *
     * @param boolean $isAdministrateur
     * @return Client
     */
    public function setIsAdministrateur($isAdministrateur)
    {
        $this->isAdministrateur = $isAdministrateur;

        return $this;
    }

    /**
     * Get isAdministrateur
     *
     * @return boolean 
     */
    public function getIsAdministrateur()
    {
        return $this->isAdministrateur;
    }


    public function getUsername() {
        return $this->mail;
    }

    public function getSalt() {
        return null;
    }
    
    public function getRoles() {
        if ($this->getIsAdministrateur())
            return array('ROLE_ADMIN');
        else
            return array('ROLE_USER');
    }

    public function eraseCredentials() {

    }
    public function serialize() {
        // pour pouvoir sérialiser le Client en session
        return serialize(array($this->id));
    }
    public function unserialize($serialized) {
        list ($this->id) = unserialize($serialized);
    }
}
