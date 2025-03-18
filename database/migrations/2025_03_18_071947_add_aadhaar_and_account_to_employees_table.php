<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('aadhaar_number')->unique()->after('eligible');
            $table->string('account_number')->unique()->after('aadhaar_number');
        });
    }

    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn(['aadhaar_number', 'account_number']);
        });
    }
};
