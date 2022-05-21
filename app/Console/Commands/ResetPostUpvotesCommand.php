<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class ResetPostUpvotesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upvotes:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset post upvotes';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Post::query()->update(['amount_of_upvotes'=>'0']);

        $this->info('Upvotes successfully reset');
    }
}
