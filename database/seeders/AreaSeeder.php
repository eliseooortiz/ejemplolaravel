<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        use Illuminate\Support\Facades\DB;
        DB:table('areas')->insert([
            'nombre_area'=>'coord.compu',
            'titular'=>'ruth',
            'informacion'=>'Auxiliar',
            'telefono'=>'123456'
        ]);
        */
        Area::create([
            'nombre_area'=>'coord.compu',
            'titular'=>'ruth',
            'informacion'=>'Auxiliar',
            'telefono'=>'123456'
        ]);

        Area::factory(20)->create();
    }
}
