<?php

namespace App;

class AbcBank extends BankModel
{
    public function tranfer($money)
    {
        echo "Bạn vừa chuyển {$money}$ thành công";
    }
}
