<?php
// createBooking

// editBooking

// deleteBooking

class Booking_Model extends model
{
    protected static $object_class = 'Booking_Object';

    public static function formatDate($date)
    {

        $date = date_create('');
        echo date_format($date, 'Y-m-d H:i:s');
    }

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

    public static function getCustomerByBookingid()
    {
        // write query
        $query = "
            SELECT `customer` . *
            FROM `customer`
            LEFT JOIN `customer_has_booking`
            ON `customer`.`id` = `customer_has_booking`.`customer_id`
            LEFT JOIN `booking`
            ON `customer_has_booking`.`booking_id` = `booking`.`id`
            WHERE  `customer_has_booking`.`id` = ?
        ";
        // run query and get result set
        $resultset = db::query($query);

        // retrieve all the rows as objects
        $objects = static::fetchObject($resultset);

        return $objects;
    }

    public static function getBookingByCustomerLastName($last_name)
    {
        // write query
        $query = "
            SELECT `booking`.*
            FROM `booking`
            LEFT JOIN `customer_has_booking`
            ON `booking`.`id` = `customer_has_booking`.`booking_id`
            LEFT JOIN `customer`
            ON `customer_has_booking`.`customer_id` = `customer`.`id`
            WHERE  `customer`.`last_name` = ?
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
        $resultset = db::query($query, [$checkin_date]);

        // retrieve all the rows as objects
        $objects = static::fetchObject($resultset);

        return $objects;
    }

    //I AM TRYING TO BUILD AN INSERT QUERY HERE TO CREATE NEW TASKS.
    public static function createBooking($apartment_id, $checkin_date, $checkin_time, $departure_date, $adults, $kids, $breakfast, $comments)
    {
        // write query
        $query = "
            INSERT INTO `booking` (apartment_id, checkin_date, checkin_time, departure_date, adults, kids, breakfast, comments)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ";

        //let op dat de gegevens dienen te worden aangeleverd in een array vorm [variabelen]
        db::query($query, [$apartment_id, $checkin_date, $checkin_time, $departure_date, $adults, $kids, $breakfast, $comments]);

    }
}
