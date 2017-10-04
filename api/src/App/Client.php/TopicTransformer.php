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

use App\Topic;
use League\Fractal;

class TopicTransformer extends Fractal\TransformerAbstract
{

    public function transform(Topic $topic)
    {
        return [
            "topic_id" => (integer)$topic->topic_id ?: 0,
            "topic_name" => (string)$topic->topic_name?:null,
            "course_id" => (integer)$topic->course_id?:0             ]
        ];
    }
}
