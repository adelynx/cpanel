cpanel
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

Once this operation completes, the final step is to add the service provider and aliases. 

1 - Provider: Open `app/config/app.php`, and add a new item to the providers array.

    'Adelynx\Cpanel\CpanelServiceProvider'

1 - Aliases: Copy the file `Facades\Cpanel.php` into `you_project_dir\vendor\laravel\framework\src\Illuminate\Support\Facades`, and add a new item to the aliases array.

    'Cpanel' => 'Illuminate\Support\Facades\Cpanel',
	
That's it! You're all set to go.

## Usage

```php
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

