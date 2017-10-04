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

class Lecture extends \Spot\Entity
{
    protected static $table = "lectures";

    public static function fields()
    {
        return [
            "lecture_id" => ["type" => "integer", "unsigned" => true, "primary" => true, "autoincrement" => true],
            "classroom_id" => ["type" => "integer","unsigned" => true],
            "group_id" => ["type" => "integer","unsigned" => true],
            "teacher_id" => ["type" => "integer","unsigned" => true],
            "status" => ["type" => "string"],
            "rating" => ["type" => "decimal"]

        ];
    }

    public static function relations(Mapper $mapper, Entity $entity) {
        return [
            'Feedback_Topic' => $mapper->hasMany($entity, 'App\Feedback_Topic', 'lecture_id'),
            'Feedback' => $mapper->hasMany($entity, 'App\Feedback', 'lecture_id'),
            'Classroom' => $mapper->hasMany($entity, 'App\Classroom', 'classroom_id'),
            'Group' => $mapper->hasMany($entity, 'App\Group', 'group_id'),
            'Lecture_Topic' => $mapper->hasMany($entity, 'App\Lecture_Topic', 'lecture_id'),
            'Teacher' => $mapper->hasMany($entity, 'App\Lecture_Topic', 'lecture_id'),



        ];
    }
}
