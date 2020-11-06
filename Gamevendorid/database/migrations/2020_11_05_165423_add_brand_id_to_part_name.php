<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBrandIdToPartName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partpcs', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id')->index()->after('id');

            $table->foreign('brand_id')->references('id')->on('providermerkpartpcs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partpcs', function (Blueprint $table) {
            $table->dropColumn('brand_id');
        });
    }
}
