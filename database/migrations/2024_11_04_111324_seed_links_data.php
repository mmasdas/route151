<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $links = [
            [
                'title'        => 'Tiger-Juice-Garage',
                'link' => 'https://www.youtube.com/@tiger-juice-garage',
            ],
            [
                'title'        => 'ICHIKEN Engineering',
                'link' => 'https://www.youtube.com/@ICHIKEN1',
            ],
            [
                'title'        => 'モリモトシンヤ',
                'link' => 'https://www.youtube.com/@morimotoshinya',
            ],
            [
                'title'        => 'Lesics 日本語',
                'link' => 'https://www.youtube.com/@LesicsJPN',
            ],
            [
                'title'        => 'メカのロマンを探究する会',
                'link' => 'https://www.youtube.com/@%E3%83%A1%E3%82%AB%E3%81%AE%E3%83%AD%E3%83%9E%E3%83%B3%E3%82%92%E6%8E%A2%E7%A9%B6%E3%81%99%E3%82%8B%E4%BC%9A',
            ],
        ];

        DB::table('links')->insert($links);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('links')->truncate();
    }
};
