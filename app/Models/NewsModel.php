<<<<<<< HEAD
<?php

namespace APP\Models;

use CodeIgniter\Model;

class NewsModel extends
Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $useAutoIncrenment = true;
    protected $allowedFields = ['title', 'content', 'status', 'author', 'slug'];
}
=======
<?php

namespace APP\Models;

use CodeIgniter\Model;

class NewsModel extends
Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $useAutoIncrenment = true;
    protected $allowedFields = ['title', 'content', 'status', 'author', 'slug'];
}
>>>>>>> 046b37e (initial commit)
