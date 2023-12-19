<?php

namespace App\GraphQL\Queries;
use App\Models\Contact;

final class ViewContact
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return Contact::findOrFail($args['id']);
    }
}
