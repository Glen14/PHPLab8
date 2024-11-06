<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public function up()
    {
        Schema::create('inventories',function (Blueprint $table){
            $table->id();
            $table->string('product_name');
            $table->string('category');
            $table->integer('quantity');
            $table->decimal('price',8,2);
            $table->timestamps();

        });
    }
}
