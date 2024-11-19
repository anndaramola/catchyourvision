<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notification_objects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actor_id')->index();
            $table->unsignedBigInteger('action_id')->index();
            $table->unsignedBigInteger('resource_id')->index();
            $table->unsignedBigInteger('resource_type_id')->index();
            $table->timestamps();

            $table->foreign('actor_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notification_object_id')->index();
            $table->unsignedBigInteger('receiver_id')->index();
            $table->unsignedSmallInteger('status_id')->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('notification_object_id')
                ->references('id')
                ->on('notification_objects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('receiver_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
        Schema::dropIfExists('notification_objects');
    }
};
