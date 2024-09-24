<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneAndOccupationToSurveyResponsesTable extends Migration
{
    public function up()
    {
        Schema::table('survey_responses', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('occupation')->nullable();
        });
    }

    public function down()
    {
        Schema::table('survey_responses', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('occupation');
        });
    }
}