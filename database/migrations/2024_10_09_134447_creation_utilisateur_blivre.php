<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Utilisateur ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('livres', function (Blueprint $table) {
            $table->foreignIdFor(Utilisateur::class)->nullable()->contrained()->cascadeOnDelete() ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
        Schema::table('livres', function (Blueprint $table) {
            $table->dropforeignIdFor(Utilisateur::class) ;
        });
    }
};
