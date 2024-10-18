<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The application's command schedule.
     *
     * @var array
     */
    protected $commands = [
        Commands\DispatchTestJobCommand::class, // Registro del comando
    ];

    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule): void
    {
        // Aquí puedes programar tareas
        // Ejemplo: $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands(): void
    {
        // Carga todos los comandos en la carpeta Commands
        $this->load(__DIR__.'/Commands');

        // Carga las rutas de consola adicionales
        require base_path('routes/console.php');
    }
}
