<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\gig;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(5)->create();
        gig::factory(5)->create();
        
         gig::create([
            
            'email' => 'test@example.com',
            'title' => 'Laravel Senior Developer', 
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);

       gig::create(
            [
             
                'title' => 'Full-Stack Engineer',
                'tags' => 'laravel, backend ,api',
                'company' => 'Stark Industries',
                'location' => 'New York, NY',
                'email' => 'email2@email.com',
                'website' => 'https://www.starkindustries.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
              ]
            );
    }
}
