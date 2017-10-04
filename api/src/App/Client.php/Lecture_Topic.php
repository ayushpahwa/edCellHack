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

class Lecture_Topic extends \Spot\Entity
{
    protected static $table = "lecture_topics";

    public static function fields()
    {
        return [
            "lecture_topic_id" => ["type" => "integer", "unsigned" => true,"primary" => true, "autoincrement" => true],
            "lecture_id" => ["type" => "integer","unsigned" => true],
            "topic_id" => ["type" => "integer","unsigned" => true]
            
            ];
    }

     public static function relations(Mapper $mapper, Entity $entity) {
        return [
        'Lecture' => $mapper->belongsto($entity, 'App\Lecture', 'lecture_id'),
        'Topic' => $mapper->belongsto($entity, 'App\Topic', 'topic_id')
        ];
    }
}
