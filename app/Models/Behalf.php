<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Prettus\Repository\Contracts\Transformable;

use Prettus\Repository\Traits\TransformableTrait;

use App\Traits\ReturnFormatTrait;

use Illuminate\Notifications\Notifiable;

use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * Class Behalf.
 *
 * @package namespace App\Models;
 */
class Behalf extends Model implements Transformable, JWTSubject
{
    use TransformableTrait;

    use Notifiable;

    use ReturnFormatTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'student_id', 'is_sign', 'is_vote', 'vote_model_id'
	];
	
    protected $table = 'behalf';

    public $timestamp = false;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * 禁止自动添加更新时间
     * @author leekachung <leekachung17@gmail.com>
     * @return [type] [description]
     */
    public function getUpdatedAtColumn()
    {
        return null;
    }

}
