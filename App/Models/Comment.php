<?php
namespace App\Models;

use App\Models\Contracts\JsonBaseModel;
class Comment extends JsonBaseModel{
    protected $table = 'comments';
}