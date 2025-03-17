<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('employee_id')->unique();
            $table->string('post');
            $table->string('password');
            $table->string('phone')->unique();
            $table->string('otp')->nullable();
            $table->decimal('salary', 10, 2);
            $table->date('joining_date');
            $table->string('posting');
            $table->string('s_o'); // S/O (Son of)
            $table->string('job_status');
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->boolean('eligible')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
