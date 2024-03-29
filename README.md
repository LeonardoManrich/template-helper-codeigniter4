# Template Helper for Codeigniter 4

#### Usage:

Insert ```Temaplate.php``` in Libraries folder.

In your controller:

```PHP
<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Controller extends BaseController
{
    public function index()
    {
        //our code...
        $data = [
            'post' => [
                'author' => 'Jon Doe',
                'title' => 'title',
                'postContent' => 'post content....'
            ]
        ];

        return \App\Libraries\Template::load('pathToTheTemplateArchive', 'pathToTheViewArchive', $data);
        /* 
        Example:  \App\Libraries\Template::load('Layouts/app', 'Site/Blog/post', $data); 
        
        'Layouts' is the folder and 'app' is the template view file.
        'Site' is a folder and 'Blog' is a subfolder of 'Site' folder and 'post' is the view file
        */
    }

}
```

in the template view file:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?= $contents ?> <!-- The view content will be loaded here -->

</body>
</html>
```

in the view file:

```HTML 
<div class="container">
    <div class="col">
        <h1><?= $title ?></h1>
        <p><?= $postContent ?></p>
        Author: <span><?= $author ?></span>
    </div>
</div>
```
