<?php

namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model
{
    protected $table = 'tentang';
    protected $primarryKey = 'id';
    protected $allowedfields = ['saya'];
}
