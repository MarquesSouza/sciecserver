<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\User::class)->create([
            'email' => 'jonasjunior@ifto.edu.br',
            'name'  => 'jonas'
        ]);
        factory(\App\Entities\User::class)->create([
            'email' => 'pedrocesar1010@gmail.com',
            'name'  => 'Pedro'
        ]);
        factory(App\Entities\User::class, 100)->create();
        factory(App\Entities\TypeUser::class, 5)->create();
//      factory(App\Entities\TypeUser::class)->create([
//            'nome' => 'Participante',
//            'descricao' => 'Usuário'
//        ]);
//        factory(App\Entities\TypeUser::class)->create([
//            'nome' => 'Organizador',
//            'descricao' => 'Organizador'
//        ]);
//        factory(App\Entities\TypeUser::class)->create([
//            'nome' => 'Administrador Sistema',
//            'descricao' => 'Administrador'
//        ]);
        factory(App\Entities\UserTypeUser::class, 100)->create();
        factory(App\Entities\Event::class, 100)->create();
        factory(App\Entities\Event::class)->create([]);
        factory(App\Entities\TypeActivity::class, 100)->create();
        factory(App\Entities\Activity::class, 10)->create();
        factory(App\Entities\TypeActivityUser::class, 5)->create();
        factory(App\Entities\ActivityUser::class, 5)->create();
        factory(App\Entities\Article::class,100)->create();
        factory(App\Entities\Participation::class,100)->create();
        factory(App\Entities\Instution::class,10)->create();
        factory(App\Entities\Course::class,10)->create();
//        factory(App\Entities\Course::class)->create([
//            'nome' => 'Banco de Dados',
//            'descricao' => 'Curso completo de banco de dados.'
//        ]);
//        factory(App\Entities\Course::class)->create([
//            'nome' => 'Gerenciamento de Redes',
//            'descricao' => 'Curso completo de redes.'
//        ]);
//        factory(App\Entities\Course::class)->create([
//            'nome' => 'Inteligência Artificial',
//            'descricao' => 'Curso completo.'
//        ]);
//        factory(App\Entities\Course::class)->create([
//            'nome' => 'Comercio Eletrônico',
//            'descricao' => 'Curso com carga de 20 hrs.'
//        ]);
//        factory(App\Entities\Course::class)->create([
//            'nome' => 'Laravel',
//            'descricao' => 'Curso com carga de 20 hrs.'
//        ]);
//        factory(App\Entities\Course::class)->create([
//            'nome' => 'Interface Homem-Máquina',
//            'descricao' => 'Curso com carga de 20 hrs.'
//        ]);

        // Erro nessa dois
        factory(App\Entities\CourseEvent::class,5)->create();
        factory(App\Entities\UserEvent::class,5)->create();
    }
}
