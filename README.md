# Laravel-UUID
A wrapper for webpatser/laravel-uuid with additional integration

This package adds a very simple trait to automatically generate a UUID for your Models.

Simply add the "\BinaryCabin\LaravelUUID\Traits\HasUUID;" trait to your model:

```
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use \BinaryCabin\LaravelUUID\Traits\HasUUID;

}
```

If your column name is not "uuid", simply add a new property to your model named "uuidFieldName":

protected $uuidFieldName = 'unique_id';
