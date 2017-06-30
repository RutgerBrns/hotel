<?php

class Customer_Object
{
    public function getUrl()
    {
        return url::to('customer', array(
            'id' => $this->id
        ));
    }

}