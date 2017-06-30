<?php

class Booking_Object
{
    public function getUrl()
    {
        return url::to('booking', array(
            'id' => $this->id
        ));
    }

}


