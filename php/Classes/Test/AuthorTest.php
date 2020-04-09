<?php
namespace fgallegos8\ObjectOriented\Test;

use fgallegos8\ObjectOriented\{Author};

//Hack!!! - added so this class could see DataDesignTest
require_once (dirname(__DIR__) . "/Test/DataDesignTest.php");

// grab the class under scrutiny
require_once(dirname(__DIR__) . "/autoload.php");

// grab the uuid generator
require_once(dirname(__DIR__, 2) . "/lib/uuid.php");

class AuthorTest extends DataDesignTest {

    private $Valid_Activation_Token; //will be done in setup
    private $Valid_Avatar_Url = "https://avatar.org";
    private $Valid_Author_Email = "fgallegos59@cnm.edu";
    private $Valid_Author_Hash; //will be done in setup.
    private $Valid_Username = "fgallegos8";

    public function setUp() : void {
        parent::setUp();

        $password = "hidden_password";
        $this->Valid_Author_Hash = password_hash($password, PASSWORD_ARGON2I, ["time_cost" => 45]);
        $this->Valid_Activation_Token = bin2hex(random_bytes(16));
    }


    public function  testInsertValidAuthor() : void {

    }

    public function testUpdateValidAuthor() : void {

    }

    public function testDeleteValidAuthor() : void {

    }

    public function testGetValidAuthorByAuthorId() : void {

    }

    public function testGetValidAuthors() : void {

    }


}