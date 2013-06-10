cPanel API package for Laravel 4
======

cPanel API package for Laravel 4 by Adel KEDJOUR (a.kedjour@corex.dz) 


## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `adelynx/cpanel`.

    "require": {
		"laravel/framework": "4.0.*",
		"adelynx/cpanel": "dev-master"
	}

Next, update Composer from the Terminal:

    composer update

Once this operation completes add the service provider, aliases and configuration file. 

1 - Provider: Open `app/config/app.php`, and add a new item to the providers array.

    'Adelynx\Cpanel\CpanelServiceProvider'

2 - Aliases: Copy the file `Facades/Cpanel.php` into `/you_project_dir/vendor/laravel/framework/src/Illuminate/Support/Facades`, and add a new item to the aliases array.

    'Cpanel' => 'Illuminate\Support\Facades\Cpanel',

3 - Cpanel Configuration: Copy the file `config/cpanel.php` into `you_project_dir/app/config/` folder, and add a new item to the aliases array.

    'Cpanel' => 'Illuminate\Support\Facades\Cpanel',

The final step is to configure your `cpanel.php` config file:

```php
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
```	

That's it! You're all set to go.

## Usage

```php
<?php

<?php

class CpanelController extends Controller {

    public function getListAccounts()
    {        
         try {

                  $listaccts = array(json_decode(Cpanel::listaccts(), true));
                  return $listaccts;

         } catch (Exception $e) {
                return 'Exception: ' .$e->getMessage();
         }      

    }

}
```


