<?php

namespace App\GraphQL\Mutations;
use App\Models\Contact;
    
final class CreateContact
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return Contact::create($args);
    }
}
