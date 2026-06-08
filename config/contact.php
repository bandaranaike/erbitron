<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Contact Form Recipients
    |--------------------------------------------------------------------------
    |
    | These addresses receive every inquiry submitted through the public
    | contact form. Configure multiple recipients as a comma-separated list.
    |
    */

    'recipients' => array_values(array_filter(array_map(
        static fn (string $email): string => trim($email),
        explode(',', (string) env('CONTACT_MAIL_RECIPIENTS', ''))
    ))),

];
