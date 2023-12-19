<?php

namespace App\GraphQL\Mutations;
use App\Models\Contact;

final class UpdateContact
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $contact = Contact::findOrFail($args['id']);
        $contact->update($args);

        return $contact;
    }
}
