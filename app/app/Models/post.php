<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

/**
 * Class Post
 * @package App\Models
 * @version September 30, 2021, 12:54 am JST
 *
 * @property foreingnID $user_id
 * @property string $title
 * @property string $content
 */
class Post extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'posts';
    
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'title',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'content' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
