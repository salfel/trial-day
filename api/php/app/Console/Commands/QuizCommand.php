<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class QuizCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quiz';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A quiz';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('What is your Name');

        $questions = trans('quiz.questions');
        Storage::disk('local')->delete('answers.txt');
        for ($i = 0; $i < count($questions); $i++) {
            $answer = $this->ask($questions[$i]);

            Storage::disk('local')->append('answers.txt', "$name, {$questions[$i]}, $answer");
        }

        return 0;
    }
}
