<?php

use Illuminate\Database\Seeder;
use App\Author as Author ;
class Authors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Rellenando la tabla authors con 30 datos aleatorios
        Author::Create(['name'=>'Facultad de sistemas']);
        Author::Create(['name'=>'Facultad de industrial']);
        Author::Create(['name'=>'Facultad de Electroníca']);
        Author::Create(['name'=>'Facultad de Odontología']);

        Author::Create(['name'=>'José Mateo Carrasco']);
        Author::Create(['name'=>'Eduardo Espinoza']);
        Author::Create(['name'=>'Luis Toro']);
        Author::Create(['name'=>'Pedro Diaz']);
        Author::Create(['name'=>'Gloria Fudeni']);
        Author::Create(['name'=>'Roberto Sediño']);

    }

}
// Eliminar esta semilla cuando se tenga gestion author
