<?php

namespace App\Services;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class SaleService
{
    public function finishSale($prods = [], User $user)
    {
        try {
            DB::beginTransaction();

            $dateToday = new \DateTime();
            $order = new Order();

            $order->orderdate = $dateToday->format('Y-m-d H:i:s');
            $order->status = 'PEN';
            $order->user_id = $user->id;

            $order->save();

            foreach ($prods as $p)
            {
                $items = new OrderItems();

                $items->quantity = 1;
                $items->price = $p->price;
                $items->item_date = $dateToday->format('Y-m-d H:i:s');
                $items->product_id = $p->id;
                $items->order_id = $order->id;

                $items->save();
            }

            DB::commit();

            return['status' => 'ok', 'message' => 'Venda realizada com sucesso'];

        }catch (\Exception $e){
           DB::rollBack();
           Log::error('ERRO: Sale Service', ['message' => $e->getMessage()]);

           return['status' => 'error', 'message' => 'Venda não pode ser realizada'];
        }
    }
}
