<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Group extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'groups';
    protected $primaryKey = ['id','accounts_id']; //主キーの設定。デフォルトは id のため、省略可
    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }
}
