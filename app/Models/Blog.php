<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Ramsey\Uuid\Uuid;
use Webpatser\Uuid\Uuid;

class Blog extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $primmaryKey = 'id';
    /**
     * The attributes that are mass assingnable
     *
     * @var string[]
     */
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
    protected $translatabel = [
        'title',
        'content'
    ];
    /**
     *
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];
    protected $dates = [
        'created_at'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->id;
        });
    }
}
