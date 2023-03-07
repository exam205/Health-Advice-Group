<?php

class User{
    public $id;
    public $email;
    public $first_name;
    public $last_name;
    public $postcode;

    function __construct($id_input,$email_input,$first_name_input,$last_name_input,$postcode_input)
    {
        $this -> id = $id_input;
        $this -> email = $email_input;
        $this -> first_name = $first_name_input;
        $this -> last_name = $last_name_input;
        $this -> postcode = $postcode_input;

    }

}
?>