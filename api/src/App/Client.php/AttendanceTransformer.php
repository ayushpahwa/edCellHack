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

use App\Attendance;
use League\Fractal;

class AttendanceTransformer extends Fractal\TransformerAbstract
{

    public function transform(Attendance $attendance)
    {
        return [
            "id" => (integer)$attendance->attendance_id ?: 0,
            "student_id" => (integer)$attendance->student_id ?: 0,
            "course_id" => (integer)$attendance->course_id ?: 0  
            ]
        ];
    }
}
