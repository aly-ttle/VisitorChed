<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModelVisitor; // <--- ADD THIS LINE (or App\Models\Visitor based on your folder structure)

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // If your model is named ModelVisitor, change 'Visitor::factory()' to 'ModelVisitor::factory()'
        ModelVisitor::factory()->count(15)->create(); 
    }
}
