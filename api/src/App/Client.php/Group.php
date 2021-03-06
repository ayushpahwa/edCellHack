<?php

/*
 * This file is part of the Slim API skeleton package
 *
 * Copyright (c) 2016-2017 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   https://github.com/tuupola/slim-api-skeleton
 *
 */

namespace App;

use Spot\EntityInterface as Entity;
use Spot\EventEmitter;
use Spot\MapperInterface as Mapper;
use Tuupola\Base62;

class Group extends \Spot\Entity
{
    protected static $table = "groups";

    public static function fields()
    {
        return [
            "group_id" => ["type" => "integer", "unsigned" => true, "primary" => true, "autoincrement" => true],
            "branch" => ["type" => "string"],
            "number" => ["type" => "string"],
            "year" => ["type" => "string"]
            ];
    }

     public static function relations(Mapper $mapper, Entity $entity) {
        return [
        'Student' => $mapper->hasMany($entity, 'App\Student', 'group_id'),
        'Classroom' => $mapper->belongsto($entity, 'App\Classroom', 'group_id'),
        'Lecture' => $mapper->belongsto($entity, 'App\Lecture', 'group_id'),
        ];
    }
}
