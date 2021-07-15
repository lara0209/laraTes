<?php

use Illuminate\Database\Seeder;

class VerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //20210618 'id', 'service_name', 'api_key_post', 'api_key_get'
        $ver = new \App\ServiceDBmodel([
            'id' => '10',
            'service_name' => 'text',
            'api_key_post' => 'abc',
            'api_key_get' => 'def',
          ]);
            $ver->save();

        //20210618 'id', 'service_id', 'api_id', 'endpoint', 'api_json'
        $ver = new \App\JsonDBmodel([
            'id' => '1',
            'service_id' => '10',
            'api_id' => '200',
            'endpoint' => 'ver',
            'api_json' => 'json'
          ]);
            $ver->save();
    }
}
