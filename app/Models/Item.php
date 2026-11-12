<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','category','quantity','price_minor'];
    protected function casts(): array { return ['quantity'=>'integer','price_minor'=>'integer']; }
}
