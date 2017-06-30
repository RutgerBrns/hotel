<?php
// createBooking

// editBooking

// deleteBooking

class Booking_Model extends model
{
    protected static $object_class = 'Booking_Object';

   public static function getAllBooking()
    {
        // write query
        $query = "
            SELECT *
            FROM `booking`
            WHERE 1
        ";
        // run query and get result set
        $resultset = db::query($query);

        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

     public static function getBookingByCustomerLastName($last_name)
    {
        // write query
        $query = "
            SELECT *
            FROM `booking`
            LEFT JOIN `customer_has_booking`
            ON `booking`.`id` = `customer_has_booking`.`booking_id`
            LEFT JOIN `customer`
            ON `customer_has_booking`.`customer_id` = `customer`.`booking_id`
            WHERE `last_name` = ?
        ";
        // run query and get result set
        $resultset = db::query($query, [$last_name]);

        // retrieve all the rows as objects
        $objects = static::fetchObject($resultset);

        return $objects;
    }

public static function getBookingByDate($checkin_date)
    {
        // write query
        $query = "
            SELECT *
            FROM `booking`
            WHERE `checkin_date` = ?
        ";
        // run query and get result set
        $resultset = db::query($query, [$last_name]);
        
        // retrieve all the rows as objects
        $objects = static::fetchObject($resultset);

        return $objects;
    }  

     //I AM TRYING TO BUILD AN INSERT QUERY HERE TO CREATE NEW TASKS.
    public static function createCustomer($first_name, $last_name, $email, $phone, $address, $city, $zip, $country)
    {
        // write query
        $query = "
            INSERT INTO `customer` (first_name, last_name, email, phone, address, city, zip, country)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ";

        //let op dat de gegevens dienen te worden aangeleverd in een array vorm [variabelen]
        db::query($query, [$first_name, $last_name, $email, $phone, $address, $city, $zip, $country]);      

    }
}