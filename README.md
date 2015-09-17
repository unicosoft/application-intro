# application-intro
Demo of using application in Legacy Application

use full db connection by adding a file `config/autoload/db.local.php`

```php
<?php

return [
    'db' => [
        'username'       => '<your-db-user>',
        'password'       => '<your-db-password>',
        'host'           => '<your-db-host>',
        'dbname'         => '<your-db-name>',
        // 'profiler'       => false,
    ]
];
```
