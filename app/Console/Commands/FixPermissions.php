<?php

namespace App\Console\Commands;

use App\Models\Auth\Role;
use Illuminate\Console\Command;

class FixPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix:permissions';

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
     * @return mixed
     */
    public function handle()
    {
        $permissions = [47];
        $role = Role::where('name','=','student')->first();
        $role->syncPermissions($permissions);
    }
}
