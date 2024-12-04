<?php
// database/migrations/2024_11_12_123750_create_routes_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->string('route_id')->primary();
            $table->string('route_name');
            $table->string('departure_location');
            $table->string('destination');
            $table->integer('distance');
            $table->string('duration');
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
};