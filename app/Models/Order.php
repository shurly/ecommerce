<?php

namespace App\Models;



class Order extends RModel
{
    protected $table = 'orders';
    protected $dates = ['orderdate'];
    protected $fillable = ['orderdate', 'status', 'user_id'];

    public function statusDesc()
    {
        $desc = '';
        switch ($this->status){
            case 'PEN': $desc = 'PENDENTE'; break;
            case 'APR': $desc = 'APROVADO'; break;
            case 'CAN': $desc = 'CANCELADO'; break;
        }
        return $desc;
    }
}
