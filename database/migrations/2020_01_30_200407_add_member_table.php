<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMemberTable extends Migration
{
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('id_card');
            $table->string('birth_date');
            $table->string('mobile_no');
            $table->string('address');
            $table->string('social_id');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_mobile');
            $table->string('emergency_contact_relation');
            $table->text('congenital_disease');
            $table->string('profile_path')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
}
