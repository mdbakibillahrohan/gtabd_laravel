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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_image');
            $table->string('package_title');
            $table->string('package_slug')->unique();
            $table->foreignId('country_id');
            $table->string('package_city_name');
            $table->integer('package_duration');

            $table->date('package_valid_from');
            $table->date('package_valid_till');
            $table->string('departs');

            $table->integer('package_price_single')->nullable();
            $table->integer('package_price_double')->nullable();
            $table->integer('package_price_tripple')->nullable();

            $table->text('package_itinerary')->nullable();
            $table->text('package_pick_up_note')->nullable();
            $table->text('package_cancellation')->nullable();
            $table->text('package_tax_and_rates')->nullable();
            $table->text('package_included_services')->nullable();
            $table->text('package_excluded_services')->nullable();
            $table->text('package_highlights')->nullable();
            $table->text('package_general_condition')->nullable();
            $table->text('package_emi')->nullable();

            $table->boolean('is_featured')->default(false);
            $table->boolean('is_lightening')->default(false);
            $table->boolean('is_duplicated')->default(false);

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
        Schema::dropIfExists('packages');
    }
};
