<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('items',function(Blueprint $table){
            $table->id();$table->string('title',80);$table->string('category',24);
            $table->unsignedInteger('quantity');$table->unsignedInteger('price_minor');
        });
    }
    public function down(): void { Schema::dropIfExists('items'); }
};
