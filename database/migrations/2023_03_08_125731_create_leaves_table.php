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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->enum('leave_type',['vocation','sick','maternity','paternity','bereavement','other'])->default('other');
            $table->date('leave_start_date');
            $table->date('leave_end_date');
            $table->text('leave_reason');
            $table->enum('leave_status',['pending','approved','rejected'])->default('pending');
            $table->foreignId('employee_id')->contrained('employees','id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
