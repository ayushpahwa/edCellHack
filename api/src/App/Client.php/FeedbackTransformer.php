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

use App\Feedback;
use League\Fractal;

class FeedbackTransformer extends Fractal\TransformerAbstract
{

    public function transform(Feedback $feedback)
    {
        return [
            "feedback_id" => (integer)$feedback->feedback_id ?: 0,
            "lecture_id" => (integer)$feedback->lecture_id?: 0
            "student_id" => (integer)$feedback->student_id?: 0
            "experience" => (string)$feedback->experience?: 0
            "improvements" => (string)$feedback->improvements?: 0,
            "teacher_feedback" => (string)$feedback->teacher_feedback?: 0,
               ]
        ];
    }
}
