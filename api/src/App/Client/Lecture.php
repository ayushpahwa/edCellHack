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
            "status" => ["type" => "string"]
            ];
    }

     public static function relations(Mapper $mapper, Entity $entity) {
        return [
        'Review' => $mapper->hasMany($entity, 'App\Reviews', 'user_id'),
        'Question' => $mapper->hasMany($entity, 'App\Discussion_Questions', 'user_id'),
        'Answer' => $mapper->hasMany($entity, 'App\Discussion_Answers', 'user_id')
        
        ];
    }
}
