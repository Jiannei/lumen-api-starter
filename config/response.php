<?php

/*
 * This file is part of the Jiannei/lumen-api-starter.
 *
 * (c) Jiannei <longjian.huang@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use App\Repositories\Enums\ResponseCodeEnum;

return [
    'enum' => ResponseCodeEnum::class,

    'validation_error_code' => ResponseCodeEnum::CLIENT_VALIDATION_ERROR,
];
