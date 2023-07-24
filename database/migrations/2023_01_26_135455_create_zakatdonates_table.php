<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zakatdonates', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->integer('phone');
            $table->integer('total')->nullable();;
            $table->string('address');
            $table->string('dontype');
            $table->string('Paytype')->nullable();
            $table->string('acctype')->nullable();
            $table->string('trackid')->nullable();
            $table->string('volunteer')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zakatdonates');
    }
};
