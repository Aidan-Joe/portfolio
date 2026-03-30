<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function up(): void {
    Schema::create('messages', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->text('message');
        $table->timestamps();
    });
}
}
