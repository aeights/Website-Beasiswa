<?php

use App\Models\ScholarshipType;
use App\Models\User;
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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(ScholarshipType::class);
            $table->string('nim');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->smallInteger('semester');
            $table->decimal('ipk',3,2);
            $table->enum('status',['Belum di Verifikasi','Terverifikasi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
