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

use App\Student;
use League\Fractal;

class StudentTransformer extends Fractal\TransformerAbstract
{

    public function transform(Student $student)
    {
        return [
            "student_id" => (integer)$student->student_id ?: 0,
            "name" => (integer)$student->student_name?:null,
            "student_roll_no" => (integer)$student->student_roll_no?:0,
            "student_device_no" => (string)$student->student_device_no?:0,
            "student_email" => (string)$student->student_email?:null,
            "group_id" => (string)$student->group_id?:0
               ]
        ];
    }
}
