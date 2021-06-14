<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Category(['category' => 'Geral']);
        $cat->save();

        $prod = new \App\Models\Product(['name' => 'Produto 1', 'price' => 10, 'image' => 'assets/image/batima.jpg', 'description' => 'boneco batima', 'category_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Product(['name' => 'Produto 2', 'price' => 10, 'image' => 'assets/image/hulk-250x250.jpg', 'description' => 'boneco hulk verde', 'category_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Product(['name' => 'Produto 3', 'price' => 10, 'image' => 'assets/image/hulk-vermelho.png', 'description' => 'boneco hulk vermelho', 'category_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Product(['name' => 'Produto 4', 'price' => 10, 'image' => 'assets/image/nubu.jpg', 'description' => 'boneco nebulosa', 'category_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Product(['name' => 'Produto 5', 'price' => 10, 'image' => 'assets/image/ame.webp', 'description' => 'boneco capitão america', 'category_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Product(['name' => 'Produto 6', 'price' => 10, 'image' => 'assets/image/tanu.webp', 'description' => 'boneco tanus', 'category_id' => $cat->id]);
        $prod6->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
