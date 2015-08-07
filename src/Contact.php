<?php
class Contact
{
    private $name_first;
    private $name_last;
    private $phone_number;
    private $street_address;
    private $email;

    //constructor, allowing program to create new contacts from input
    function __construct ($contact_first, $contact_last, $contact_number, $contact_address, $contact_email)
    {
        $this->name_first = $contact_first;
        $this->name_last = $contact_last;
        $this->phone_number = $contact_number;
        $this->street_address = $contact_address;
        $this->email = $contact_email;
    }

    //setters, allowing program to limit the types of input it recieves
    function setFirst($new_first)
    {
        $this->name_first = (string) $new_first;
    }
    function setLast($new_last)
    {
        $this->name_last = (string) $new_last;
    }
    function setPhone($new_phone)
    {
        $this->phone = (int) $new_phone;
    }
    function setAddress($new_address)
    {
        $this->address = (string) $new_string;
    }
    function setEmail ($new_email)
    {
        $this->email = (string) $new_email;
    }

    //getters, allows program to retrieve private properties
    function getFirst()
    {
        return $this->name_first;
    }
    function getLast()
    {
        return $this->name_last;
    }
    function getPhone()
    {
        return $this->phone_number;
    }
    function getAddress()
    {
        return $this->street_address;
    }
    function getEmail()
    {
        return $this->email;
    }

    //save function, allowing user to save contacts to cookies
    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    //getAll function, which retrieves all contacts from cookies
    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    //deleteAll function, which clears all contacts from cookies by replacing input with a blank array
    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
}
?>
