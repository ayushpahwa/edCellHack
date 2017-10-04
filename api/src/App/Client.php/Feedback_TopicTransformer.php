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

use App\Feedback_Topic;
use League\Fractal;

class Feedback_TopicTransformer extends Fractal\TransformerAbstract
{

	public function transform(Feedback_Topic $feedback_topic)
	{
		return [
			"feedback_topic_id" => (integer)$feedback_topic->feedback_topic_id ?: 0,
			"lecture_id" => (integer)$feedback_topic->lecture_id?:null,
			"student_id" => (integer)$feedback_topic->student_id?:null,
			"topic_id" => (integer)$feedback_topic->topic_id?:null,
			"rating" => (string)$feedback_topic->feedback_topic_code?:null
		]
	];
}
}
