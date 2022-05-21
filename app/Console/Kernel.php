<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
//        $schedule->command('inspire')->hourly();
        $schedule->command('upvotes:reset')->everyFiveMinutes();
//        $schedule->command('upvotes:reset')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
/*
sail artisan schedule:work

crontab -e
sudo nano /etc/crontab
sudo cat /etc/crontab

* * * * * cd /home/eqipo/sites/laravel_api_dev_today && sail artisan schedule:run >> /dev/null 2>&1
 * */
