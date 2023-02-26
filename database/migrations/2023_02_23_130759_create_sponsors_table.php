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
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('new_library_or_join_old_library');
            $table->date('date');
            $table->text('village_address');
            $table->string('old_library_name')->nullable();
            $table->string('new_library_land_size')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_phone')->nullable();
            $table->string('ambedkariyam_50_sponsor_name')->nullable();
            $table->string('ambedkariya_thoothuvar_land_sponsor')->nullable();
            $table->string('building_materials_sponsor')->nullable();
            $table->string('table_chair_sponsor')->nullable();
            $table->string('computer_sponsor')->nullable();
            $table->string('electrical_items_sponsor')->nullable();
            $table->text('books_sponsors')->nullable();
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
        Schema::dropIfExists('sponsors');
    }
};
