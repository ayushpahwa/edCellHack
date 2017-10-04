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

class Feedback extends \Spot\Entity
{
    protected static $table = "feedback";

    public static function fields()
    {
        return [
            "feedback_id" => ["type" => "integer", "unsigned" => true, "primary" => true, "autoincrement" => true],
            "lecture_id" => ["type" => "integer","unsigned" => true],
            "student_id" => ["type" => "integer","unsigned" => true],
            "experience" => ["type" => "decimal","unsigned" => true],
            "improvements" => ["type" => "string"],
            "teacher_feedback" => ["type" => "string"]

        ];
    }

    public static function relations(Mapper $mapper, Entity $entity) {
        return [
            'Student' => $mapper->hasMany($entity, 'App\Student', 'student_id'),
            'Lecture' => $mapper->hasMany($entity, 'App\Lecture', 'lecture_id')

        ];
    }
}
