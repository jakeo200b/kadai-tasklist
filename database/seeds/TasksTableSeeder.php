<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 100; $i++){
            DB::table('tasks')->insert([
                'user_id'=>'3',
                'status'=>'t-s-'.$i,
                'content'=>'t-c-1'.$i,
                ]);
        }
        
    }
}
