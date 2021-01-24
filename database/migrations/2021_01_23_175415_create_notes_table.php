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
            $table->string('Name');
            $table->string('Subtitle');
            $table->mediumText('Content');
            $table->string('Color');
            $table->string('Tag');
            $table->timestamps();
        });

        // Uzupełnienie tabeli rekordami
    DB::table('notes')->insert([
        [
            'Name' => 'Notatka1',
            'Subtitle' => 'Podtytuł',
            'Content' => 'hhhhhheehehheheh',
            'Color' => 'black',
            'Tag' => 'notatka',
        ],
        [
            'Name' => 'Notatka2',
            'Subtitle' => 'Podtytuł',
            'Content' => 'asdassdsdsdsa',
            'Color' => 'red',
            'Tag' => 'notatka',
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
