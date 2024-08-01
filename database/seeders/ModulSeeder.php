<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modul;

class ModulSeeder extends Seeder
{
    public function run()
    {
        Modul::create([
            'nama_modul' => 'Sample Modul',
            'deskripsi' => 'This is a sample modul.',
            'file_path' => 'moduls/sample.pdf',
            'file_name' => 'sample.pdf',
            'file_size' => 12345,
            'file_type' => 'application/pdf',
            'user_id' => 1, // Assuming a user with ID 1 exists
        ]);
    }
}
