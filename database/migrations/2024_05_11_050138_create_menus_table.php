<?php

// database/migrations/create_menus_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });

        // Tambahkan beberapa data menu nasi Padang
        DB::table('menus')->insert([
            [
                'name' => 'Nasi Padang Biasa',
                'description' => 'Nasi, rendang, ayam balado, sayur nangka, sambal',
                'price' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nasi Padang Spesial',
                'description' => 'Nasi, rendang, gulai ayam, sambal lado mudo, telur balado',
                'price' => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data menu lainnya sesuai kebutuhan
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
