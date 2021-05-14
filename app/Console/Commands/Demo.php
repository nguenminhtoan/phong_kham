<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class Demo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $data = [
            "to" => "toankobito@gmail.com",
            "subject" => "Test email",
            "template" => "test_mail",
            "data" => [
                "name" => "nguyen minh toan",
                "body" => "hello"
            ]
        ];

        $email = new SendEmail($data);
        Mail::to($data["to"])->send($email);

        return 0;
    }
}
