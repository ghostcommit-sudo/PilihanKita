<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        
        $this->call('AdminSeeder');
        $this->call('PeriodSeeder');
        $this->call('ClassSeeder');
        $this->call('StudentSeeder');
        $this->call('CandidateSeeder');
    }
}