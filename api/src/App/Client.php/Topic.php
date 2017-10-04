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

class Topic extends \Spot\Entity
{
    protected static $table = "topics";

    public static function fields()
    {
        return [
            "topic_id" => ["type" => "integer", "unsigned" => true, "primary" => true, "autoincrement" => true],
            "topic_name" => ["type" => "string"],
            "course_id" => ["type" => "integer","unsigned" => true]
        ];
    }

    public static function relations(Mapper $mapper, Entity $entity) {
        return [
            'Course' => $mapper->belongsto($entity, 'App\Course', 'course_id'),
            'Lecture_Topic' => $mapper->hasMany($entity, 'App\Lecture_Topic','topic_id'),
            'Feedback_Topic' => $mapper->hasMany($entity, 'App\Feedback_Topic','topic_id'),

   


        ];
    }
}
