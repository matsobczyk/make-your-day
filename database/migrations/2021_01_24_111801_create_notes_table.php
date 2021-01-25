<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subtitle');
            $table->mediumText('content');
            $table->string('color');
            $table->string('tag');
            $table->timestamps();
        });

        // Uzupełnienie tabeli rekordami
    DB::table('notes')->insert([
        [
            'name' => 'Notatka1',
            'subtitle' => 'Podtytuł',
            'content' => 'h3213',
            'color' => 'black',
            'tag' => 'notatka',
        ],
        [
            'name' => 'Notatka2',
            'subtitle' => 'Podtytuł',
            'content' => 'text',
            'color' => 'red',
            'tag' => 'notatka',
        ]
    ]);
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
