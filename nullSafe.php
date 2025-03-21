<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$address = new Address();
$address->street = "123 Main St";
$address->city = "Springfield";
$address->state = "IL";
$address->zip = "62701";

$customer = new Customer();
$customer->name = "John Doe";
$customer->email = "hello@gmail.com";
// $customer->address = $address;

//no error is thrown if the address is null
var_dump($customer->getAddress()?->getCountry());
// Call to a member function getCountry() on null error is thrown if the address is null
var_dump($customer->getAddress()->getCountry());

$country = &$customer->getAddress()?->getCountry() ?? "USA";

$customer->getAddress()?->name = "USA";


class Customer {
    public string $name;
    public string $email;
    public ?Address $address;

    public function getAddress() : ?Address {
        return $this->address;
    }
}

class Address {
    public string $street;
    public string $city;
    public string $state;
    public string $zip;

    public function getCountry() : string {
        return "USA";
    }
}