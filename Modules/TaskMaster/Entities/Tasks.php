<?php

namespace Modules\TaskMaster\Entities;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $guarded = [];

     public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function project()
    {
        return $this->belongsTo('Modules\TaskMaster\Entities\Project');
    }
    public function taskType()
    {
        return $this->hasOne('Modules\Admin\Entities\TaskTyoe');
    }
}
