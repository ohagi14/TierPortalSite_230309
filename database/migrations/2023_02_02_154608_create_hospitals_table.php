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
		Schema::create('hospitals', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string('sub_title')->nullable(); //空でもOK
			$table->string('contents')->nullable();
			$table->string('prefecture')->nullable();
			$table->string('train')->nullable();
			$table->boolean('is_selling')->default(true);
			// $table->foreignId('animal_categories')->nullable()->constrained()->onDelete('cascade');
			$table->string('animal_category')->nullable();
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
		Schema::dropIfExists('hospitals');
	}
};
