<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpsShipmentServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ups_shipment_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ups_shipment_id')->unsigned();
            $table->foreign('ups_shipment_id')->references('id')->on('ups_shipments');
            $table->string('service')->nullable();
            $table->string('additional_service')->nullable();
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
        Schema::dropIfExists('ups_shipment_services');
    }
}
