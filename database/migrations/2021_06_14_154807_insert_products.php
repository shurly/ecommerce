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

        $cat = new \App\Models\Category(['category' => 'Boneco']);
        $cat->save();

        $prod = new \App\Models\Product(['name' => 'Batiman', 'price' => 159.90, 'image' => 'assets/image/batima.jpg', 'description' => 'boneco batima', 'category_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Product(['name' => 'Hulk Verde', 'price' => 229.90, 'image' => 'assets/image/hulk-250x250.jpg', 'description' => 'boneco hulk verde', 'category_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Product(['name' => 'Hulk Vermelho', 'price' => 209.90, 'image' => 'assets/image/hulk-vermelho.png', 'description' => 'boneco hulk vermelho', 'category_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Product(['name' => 'Busto Nebulosa', 'price' => 99.90, 'image' => 'assets/image/nubu.jpg', 'description' => 'boneco nebulosa', 'category_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Product(['name' => 'Boneco Capitão América', 'price' => 119.90, 'image' => 'assets/image/ame.webp', 'description' => 'boneco capitão america', 'category_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Product(['name' => 'Tanus', 'price' => 199.90, 'image' => 'assets/image/tanu.webp', 'description' => 'boneco tanus', 'category_id' => $cat->id]);
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
