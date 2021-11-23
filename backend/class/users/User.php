<?php
class User
{

    // Attributes
    private $Id, $Name, $Email, $Password, $Phone, $Gender, $Birth, $Occupation, $Photo, $Type, $Blocked, $SendRegistration;

    // Construct
    public function __construct($Id, $Name, $Email, $Password, $Gender, $Type, $Blocked, $SendRegistration)
    {
        $this->Id = $Id;
        $this->Name = $Name;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->Gender = $Gender;
        $this->Type = $Type;
        $this->Blocked = $Blocked;
        $this->SendRegistration = $SendRegistration;
    }

    // Getter
    function getId()
    {
        return $this->Id;
    }

    function getName()
    {
        return $this->Name;
    }

    function getEmail()
    {
        return $this->Email;
    }

    function getPassword()
    {
        return $this->Password;
    }

    function getPhone()
    {
        return $this->Phone;
    }

    function getGender()
    {
        return $this->Gender;
    }

    function getBirth()
    {
        return $this->Birth;
    }

    function getOccupation()
    {
        return $this->Occupation;
    }

    function getPhoto()
    {
        return $this->Photo;
    }

    function getType()
    {
        return $this->Type;
    }

    function  getBlocked()
    {
        return $this->Blocked;
    }

    function  getSendRegistration()
    {
        return $this->SendRegistration;
    }

    // Setter
    function setId($Id): void
    {
        $this->Id = $Id;
    }

    function setName($Name): void
    {
        $this->Name = $Name;
    }

    function setEmail($Email): void
    {
        $this->Email = $Email;
    }

    function setPassword($Password): void
    {
        $this->Password = $Password;
    }

    function setPhone($Phone): void
    {
        $this->Phone = $Phone;
    }

    function setGender($Gender): void
    {
        $this->Gender = $Gender;
    }

    function setBirth($Birth): void
    {
        $this->Birth = $Birth;
    }

    function setOccupation($Occupation): void
    {
        $this->Occupation = $Occupation;
    }

    function setPhoto($Photo): void
    {
        $this->Photo = $Photo;
    }

    function setType($Type): void
    {
        $this->Type = $Type;
    }

    function setBlocked($Blocked): void
    {
        $this->Blocked = $Blocked;
    }
    function setSendRegistration($SendRegistration): void
    {
        $this->SendRegistration = $SendRegistration;
    }
}
