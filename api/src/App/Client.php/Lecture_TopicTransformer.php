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

use App\Lecture_Topic;
use League\Fractal;

class Lecture_TopicTransformer extends Fractal\TransformerAbstract
{

	public function transform(Lecture_Topic $lecture_topic)
	{
		return [
			"id" => (integer)$lecture_topic->lecture_topic_id ?: 0,
			"lecture_id" => (integer)$lecture_topic->lecture_id?:0,
			"topic_id" => (integer)$lecture_topic->topic_id?:0             ]
		];
	}
}
