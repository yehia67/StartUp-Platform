<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = [
                  'name', 'title', 'type', 'options', 'starting_number',
    ];

    public function getOptionsAttribute()
    {
        $array = [];
        if ($this->attributes['options'] != null) {
            $array = explode(',', $this->attribute['options']);
        }

        return $array;
    }

    public function getValueAttribute()
    {
        $array = $this->options;

        return $array;
    }

    public function getTitleAttribute()
    {
        return trans('admin.'.$this->attribute['title']);
    }
}
