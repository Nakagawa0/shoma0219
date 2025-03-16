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
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            //'category_id'は'categories'テーブルの'id'を参照する外部キー
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }

    // Postに対するリレーション

    // 「1対多」の関係なので'posts'と複数形に
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
};
