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

class Student extends \Spot\Entity
{
    protected static $table = "students";

    public static function fields()
    {
        return [
            "student_id" => ["type" => "integer", "unsigned" => true, "primary" => true, "autoincrement" => true],
            "student_name" => ["type" => "string"],
            "student_roll_no" => ["type" => "integer","unsigned" => true],
            "student_device_no" => ["type" => "integer","unsigned" => true],
            "student_email" => ["type" => "string"],
            "group_id" => ["type" => "integer","unsigned" => true]
            ];
    }

     public static function relations(Mapper $mapper, Entity $entity) {
        return [
        'Group' => $mapper->belongsto($entity, 'App\Student', 'group_id'),
        'Classroom' => $mapper->belongsto($entity, 'App\Classroom', 'student_id'),
        'Feedback' => $mapper->hasMany($entity, 'App\Feedback', 'student_id'),
        'Feedback_Topic' => $mapper->hasMany($entity, 'App\Feedback_Topic', 'student_id'),
        'Attendance' => $mapper->hasMany($entity, 'App\Attendance', 'student_id'),



        ];
    }
}
