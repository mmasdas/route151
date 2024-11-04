<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        $categories = [
            [
                'name'        => 'エンジン',
                'description' => '自動車を動かすための原動力となる機械',
            ],
            [
                'name'        => 'シャシー',
                'description' => '車体（ボディー）を除いた車台を指し、エンジンやブレーキ、ステアリングなど、原動機や足回り関連の構成部品を総称したもの',
            ],
            [
                'name'        => '雑談',
                'description' => 'とりとめのない談話。よもやまの話。',
            ],
            [
                'name'        => '電装系',
                'description' => '自動車に搭載されている電気関係の機器や電子部品の総称',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
};
