<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogModule extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('blogs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('content');
            $table->string('image')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('blog_comments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('blog_id');
            $table->string('name');
            $table->string('email');
            $table->text('comment');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tags', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('taggables', function(Blueprint $table)
        {
            $table->integer('tag_id');
            $table->integer('taggable_id');
            $table->string('taggable_type');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //take backup before dropping table
        $table = 'blog_comments';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('blog_comments');

        $table = 'blogs';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('blogs');

        $table = 'tags';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('tags');

        $table = 'taggables';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('taggables');
    }

}
