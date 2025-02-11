<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 400; $i++) {
            $ano = rand(1990, 2005);
            $mes = rand(1, 12);
            $dia = rand(1, 28);
            Usuario::create([
                'nome' => 'Julia',
                'email' => 'souza@julia.com' . $i,
                'celular' => '123456789',
                'estado_civil' => 'Casada',
                'data_nascimento' => $ano .'-'. $mes .'-'. $dia,
                'cidade' => 'Interlagos',
                'estado' => 'SP',
                'endereco' => 'Rua Ayrton Senna 27-01',
                'cep' => '01153000',
                'password' => '1234'
            ]);
        }
    }
}
