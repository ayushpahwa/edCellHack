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

use App\Lecture;
use League\Fractal;

class LectureTransformer extends Fractal\TransformerAbstract
{

    public function transform(Lecture $lecture)
    {
        return [
            "id" => (integer)$lecture->lecture_id ?: 0,
            "classroom_id" => (integer)$lecture->classroom_id?:0,
            "group_id" => (integer)$lecture->group_id?:0,
            "teacher_id" => (integer)$lecture->teacher_id?:0,
            "status" => (string)$lecture->status?:null,
            "rating" => (string)$lecture->status?:null,
               ]
        ];
    }
}
