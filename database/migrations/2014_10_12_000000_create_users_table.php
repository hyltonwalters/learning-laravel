<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');

			$table->string('email');
			$table->timestamp('email_verified_at')->nullable();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('password')->nullable();
			$table->rememberToken();
			$table->string('status')->nullable();
			$table->boolean('system')->nullable();

			$table->integer( 'created_by' )->nullable();
			$table->integer( 'updated_by' )->nullable();
			$table->timestamps();

			$table->unique('email');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}

}
