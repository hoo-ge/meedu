<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 */

namespace App\Meedu\Payment\Contract;

class PaymentStatus
{
    public $status;

    public $data;

    public $message;

    public function __construct(bool $status = false, $data = [], $message = '')
    {
        $this->status = $status;
        $this->data = $data;
        $this->message = $message;
    }
}
