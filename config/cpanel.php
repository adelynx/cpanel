<?php

return array(

    // should debugging statements be printed?
    'debug' => true,

    // The host to connect to (Eg: 127.0.0.1 or yourwebsite.com or whm.yourwebsite.com)
    'host' => '127.0.0.1',

    // the port to connect to
    'port' => '2087',

    // should be the literal strings http or https
    'protocol' => 'https',

    // output that should be given by the cpanel api (xml or json)
    'output' => 'json',

    // literal strings hash or password
    'auth_type' => 'password',

    //  the actual password or hash
    'auth' => 'your_cpanel_password or your_cpanel_hash',

    // username to authenticate as
    'user' => 'your_cpanel_username',

    // The HTTP Client to use
    'http_client' => 'curl'

);
