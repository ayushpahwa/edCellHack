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

class Teacher extends \Spot\Entity
{
    protected static $table = "teachers";

    public static function fields()
    {
        return [
            "teacher_id" => ["type" => "integer", "unsigned" => true, "primary" => true, "autoincrement" => true],
            "teacher_name" => ["type" => "string"],
            "teacher_email" => ["type" => "string"],
            "teacher_phone" => ["type" => "integer", "unsigned" => true],
            "teacher_device_id" => ["type" => "integer", "unsigned" => true]
       ];
    }

     public static function relations(Mapper $mapper, Entity $entity) {
        return [
        'Classroom' => $mapper->hasMany($entity, 'App\Course', 'teacher_id'),

        
        ];
    }
}
