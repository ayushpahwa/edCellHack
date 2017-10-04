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

use App\Group;
use League\Fractal;

class GroupTransformer extends Fractal\TransformerAbstract
{

    public function transform(Group $group)
    {
        return [
            "id" => (integer)$group->group_id ?: 0,
            "branch" => (string)$group->branch?:null,
            "number" => (string)$group->number?:null,
            "year" => (string)$group->year?:null
               ]
        ];
    }
}
