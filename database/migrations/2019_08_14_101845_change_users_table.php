<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //修改資料表 新增tel address欄位
        Schema::table('users', function (Blueprint $table) {
            // 在 password 欄位後面新增 address 欄位
            $table->string('address')->after('password');//指定位置在password之後
            // 在 address 欄位後面新增 tel 欄位
            $table->string('tel')->after('address');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //刪除資料欄位 tel address
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('tel');
            $table->dropColumn('address');
        });

    }
}
