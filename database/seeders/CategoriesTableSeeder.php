<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Alimentacion', 'description' => 'Gastos relacionados con alimentos y bebidas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Transporte', 'description' => 'Gastos en transporte público, gasolina, etc.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Ropa', 'description' => 'Gastos en prendas de vestir y accesorios', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Entretenimiento', 'description' => 'Gastos en ocio, actividades recreativas y eventos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Salud', 'description' => 'Gastos en atención médica y productos de salud incluso en medicamentos o gymnasio', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], 
            ['name' => 'Vivienda', 'description' => 'Gastos en alquiler, hipoteca y servicios públicos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Educación', 'description' => 'Gastos relacionados con estudios y materiales educativos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Otros', 'description' => 'Cualquier otro gasto no clasificado', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
