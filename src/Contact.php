<?php
class Contact
{
    private $name
    private $phone_number
    private $street_address
    private $email

    //constructor, allowing program to create new contacts from input
    function __construct ($contact_name, $contact_number, $contact_address, $contact_email)
    {
        $this->name = $contact_name;
        $this->phone_number = $contact_number;
        $this->street_address = $contact_address;
        $this->email = $contact_email;
    }
    
    //setters, allowing program to limit the types of input it recieves
    //getters, allows program to retrieve private properties
    //save function, allowing user to save contacts to cookies
    //getAll function, which retrieves all contacts from cookies
    //deleteAll function, which clears all contacts from cookies

}
?>
