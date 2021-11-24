# Template Helper for Codeigniter 4

## Usage:

Insert the Temaplate.php Libraries folder.

In the controller usage:

```PHP
<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Controller extends BaseController
{
    public function index()
    {

        $data = [
            'post' => [
                'author' => 'Jon Doe',
                'title' => 'title',
                'postContent' => 'post content....'
            ]
        ];

        return \App\Libraries\Template::load('pathToTheTemplateArchive', 'pathToTheViewArchive', $data);
        /* 
        Example:  $this->template->load('Layouts/app', 'Site/Blog/post', $data); 
        
        Layouts is the folder, app is the template view file.
        Site is a folder, 'Blog' a subfolder of Site and 'post' the view file
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
