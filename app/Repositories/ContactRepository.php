<?php

namespace App\Repositories;

use App\Message;

class ContactRepository extends ResourceRepository
{
    
    public function __construct(Message $message)
    {
    	$this->model = $message;
    }
   
}
