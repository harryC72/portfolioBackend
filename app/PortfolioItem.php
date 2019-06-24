<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $fillable = ['itemName', 'itemContent', 'technicalSpec'];
}
