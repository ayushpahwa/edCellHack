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

use App\Course;
use League\Fractal;

class CourseTransformer extends Fractal\TransformerAbstract
{

    public function transform(Course $course)
    {
        return [
            "id" => (integer)$course->course_id ?: 0,
            "course_code" => (string)$course->course_code?:null
               ]
        ];
    }
}
