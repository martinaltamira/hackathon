<?php

namespace App\Jobs;

use App\Models\Developer;
use App\Models\Hackaton;
use DB;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class HackatonJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {




        $hackaton = Hackaton::factory()->create();

        for ($i = 0; $i<10; $i++){
            $developer = Developer::factory()->create();
            DB::table('developer_hackaton')->insert(
                [
                    'hackaton_id' => $hackaton->id,
                    'developer_id' => $developer->id,
                    'puesto' => $i+1
                ]
            );
        }


    }
}
