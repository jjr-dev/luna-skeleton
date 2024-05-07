<?php
    require __DIR__ . '/bootstrap.php';

    use Luna\Db\Database;
    Database::boot(true);
    
    use Illuminate\Database\Capsule\Manager as DB;
    use Illuminate\Database\Schema\Blueprint;

    // Disable Foreign Key Checks
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    // Drops
    DB::schema()->dropIfExists('users');

    // Creates
    DB::schema()->create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->text('name');
        $table->timestamps();
    });

    // Inserts
    DB::table('users')->insert([
        ['name' => "Exemplo"]
    ]);

    // Enable Foreign Key Checks
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    // Luna Log Table
    DB::schema()->dropIfExists('logs');
    DB::schema()->create('logs', function (Blueprint $table) {
        $table->id();
        $table->string('public_id');
        $table->tinyText('code');
        $table->text('message');
        $table->timestamp('created_at');
    });