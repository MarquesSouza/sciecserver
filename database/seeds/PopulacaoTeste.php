<?php

use Illuminate\Database\Seeder;

class PopulacaoTeste extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuários
        factory(App\Entities\User::class)->create([
            'name' => 'Pedro César',
            'password' =>  bcrypt('123'),
            'cpf'  => '99999999999',
            'email' => 'pedrocesar1010@gmail.com',
            'telefone' => '63992194736',
        ]);
        factory(App\Entities\User::class)->create([
            'name' => 'Jonas',
            'password' =>  bcrypt('123'),
            'cpf'  => '22999999999',
            'email' => 'jonasjunior@ifto.edu.br',
            'telefone' => '63992194736',
        ]);
        factory(App\Entities\User::class)->create([
            'name' => 'Álvaro',
            'password' =>  bcrypt('123'),
            'cpf'  => '99999999988',
            'email' => 'alvaro@gmail.com',
            'telefone' => '63992194736',
        ]);
        factory(App\Entities\User::class)->create([
            'name' => 'Marcos',
            'password' =>  bcrypt('123'),
            'cpf'  => '22999990000',
            'email' => 'marcos@ifto.edu.br',
            'telefone' => '63992194736',
        ]);


        //Tipo de usuários
        factory(App\Entities\TypeUser::class)->create([
            'status' => 1,
            'nome' => 'Organizador',
            'descricao' => 'Criar e editar evento',

        ]);
        factory(App\Entities\TypeUser::class)->create([
            'status' => 1,
            'nome' => 'Administrador',
            'descricao' => 'Criar e editar eventos, usuários etc.',
        ]);
        factory(App\Entities\TypeUser::class)->create([
            'status' => 1,
            'nome' => 'Administrador',
            'descricao' => 'Criar e editar eventos, usuários etc.',
        ]);

        //Usuário Tipo de Usuário
        factory(App\Entities\UserTypeUser::class)->create([
            'id_user'=> 1,
            'id_type_user' => 1,
            'status' => 1,
        ]);
        factory(App\Entities\UserTypeUser::class)->create([
            'id_user'=> 2,
            'id_type_user' => 2,
            'status' => 1,
        ]);
        factory(App\Entities\UserTypeUser::class)->create([
            'id_user'=> 3,
            'id_type_user' => 3,
            'status' => 1,
        ]);
        factory(App\Entities\UserTypeUser::class)->create([
            'id_user'=> 4,
            'id_type_user' => 3,
            'status' => 1,
        ]);


        //Tipo de atividades
        factory(App\Entities\TypeActivity::class)->create([
            'nome' => 'Reunião',
            'descricao' => 'Reuniões do semestre.',
            'status'=> '1',
        ]);
        factory(App\Entities\TypeActivity::class)->create([
            'nome' => 'Palestra',
            'descricao' => 'Palestras 2017',
            'status'=> '1',
        ]);
        factory(App\Entities\TypeActivity::class)->create([
            'nome' => 'Evento Esportivo',
            'descricao' => 'Palestras 2017',
            'status'=> '1',
        ]);

        //Eventos
        factory(App\Entities\Event::class)->create([
            'nome' => 'II Semana Agroinformática de Paraíso do Tocantins',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 1,
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '2017-07-10 00:00:00',
            'data_conclusao'=> '2017-07-15 00:00:00',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'II Semana Agroinformática de Paraíso do Tocantins',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 1,
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '2017-07-10 00:00:00',
            'data_conclusao'=> '2017-07-15 00:00:00',
            'logoEvento'=> 'Agroinformática',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'II ciclo de palestras: os saberes da agricultura indígena.',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 1,
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '2017-07-10 00:00:00',
            'data_conclusao'=> '2017-07-15 00:00:00',
            'logoEvento'=> 'Indígena',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'IV SEMAD (Semana Acadêmica de Administração)',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 1,
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '2017-08-28 00:00:00',
            'data_conclusao'=> '2017-08-30 00:00:00',
            'logoEvento'=> 'SEMAD',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'Semana Tecnológica',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 1,
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '2017-10-24 00:00:00',
            'data_conclusao'=> '2017-10-27 00:00:00',
            'logoEvento'=> 'Tecnológica',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'II Jornada Acadêmica Multidisciplinar ( IV SATECA; IV SEMAQ; VII SEMAT e V 
            Jornada Tocantinense de Gestão TI)',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 1,
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '2017-10-24 00:00:00',
            'data_conclusao'=> '2017-10-27 00:00:00',
            'logoEvento'=> 'Tecnológica',
        ]);

        //Atividades
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Mineração de Dados',
            'descricao' => 'Curso completo.',
            'status'=> '1',
            'hora' => '8',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '40',
            'cod_inscritos'=> '9090',
            'data_inicio'=> '2017-07-08 00:00:00',
            'data_conclusao'=> '2017-05-15 00:00:00',
            'id_evento'=> 6 ,
            'id_tipo_atividade'=> 2,
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Banco de Dados Completo',
            'descricao' => 'Curso My SQL.',
            'status'=> '1',
            'hora' => '7',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '30',
            'cod_inscritos'=> '8080',
            'data_inicio'=> '2017-07-08 00:00:00',
            'data_conclusao'=> '2017-05-15 00:00:00',
            'id_evento'=> 6 ,
            'id_tipo_atividade'=> 2,
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Ferramentas para Gerenciamento de Redes',
            'descricao' => 'Aprenda a ter dominio completo sobre sua rede hoje, e veja quais as soluções mais viáveis nos dias de hoje',
            'status'=> '1',
            'hora' => '7',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '25',
            'cod_inscritos'=> '7070',
            'data_inicio'=> '2017-07-10 00:00:00',
            'data_conclusao'=> '2017-05-20 00:00:00',
            'id_evento'=> 6 ,
            'id_tipo_atividade'=> 2,
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Scrum',
            'descricao' => 'Curso completo de Scrum.',
            'status'=> '1',
            'hora' => '7',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '40',
            'cod_inscritos'=> '6060',
            'data_inicio'=> '2017-07-09 00:00:00',
            'data_conclusao'=> '2017-05-15 00:00:00',
            'id_evento'=> 6 ,
            'id_tipo_atividade'=> 2,
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Inteligência Artificial',
            'descricao' => 'Curso completo de Inteligência Artificial.',
            'status'=> '1',
            'hora' => '8',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '38',
            'cod_inscritos'=> '9090',
            'data_inicio'=> '2017-07-08 00:00:00',
            'data_conclusao'=> '2017-05-15 00:00:00',
            'id_evento'=> 6 ,
            'id_tipo_atividade'=> 2,
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Laravel Básico',
            'descricao' => 'Curso completo sobre Laravel.',
            'status'=> '1',
            'hora' => '7',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '29',
            'cod_inscritos'=> '7090',
            'data_inicio'=> '2017-07-08 00:00:00',
            'data_conclusao'=> '2017-05-15 00:00:00',
            'id_evento'=> 6 ,
            'id_tipo_atividade'=> 2,
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'PHP Avançado',
            'descricao' => 'Mini curso sobre PHP.',
            'status'=> '1',
            'hora' => '8',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '40',
            'cod_inscritos'=> '9090',
            'data_inicio'=> '2017-07-08 00:00:00',
            'data_conclusao'=> '2017-05-15 00:00:00',
            'id_evento'=> 6 ,
            'id_tipo_atividade'=> 2,
        ]);

        //Tipo de atividade do usuário
        factory(App\Entities\TypeActivityUser::class)->create([
            'nome' => 'Participante',
            'descricao' => 'Todos os inscritos no evento.',
            'status'=> '0',
        ]);
        factory(App\Entities\TypeActivityUser::class)->create([
            'nome' => 'Organizador',
            'descricao' => 'Criar e editar eventos.',
            'status'=> '0',
        ]);
        factory(App\Entities\TypeActivityUser::class)->create([
            'nome' => 'Administrador',
            'descricao' => 'Criar, excluir, editar usuários e eventos.',
            'status'=> '1',
        ]);

        //Artigos
        factory(App\Entities\Article::class)->create([
            'titulo'    => 'SDD - Implantação de sistema para distribuição de disciplinas',
            'resumo'    => 'A eficiência na realização.',
            'autores'   => 'Giovanni, Pedro César, Marcos Paulo',
            'local'     => 'Paraíso do Tocantins',
            'subtitulo' => 'SDD',
            'situacao'  => 'Concluído',
            'status'    =>  1,
        ]);
        factory(App\Entities\Article::class)->create([
            'titulo'    => 'Segurança dos Dados',
            'resumo'    => 'Banco de dados mais seguros.',
            'autores'   => 'Geverson',
            'local'     => 'Paraíso do Tocantins',
            'subtitulo' => 'Segurança',
            'situacao'  => 'Concluído',
            'status'    =>  1,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Marcos',
            'descricao'=> 'Participante',
            'status' => 1,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Marques',
            'descricao'=> 'Administrador',
            'status' => 1,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Álvaro',
            'descricao'=> 'Organizador',
            'status' => 0,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Rômulo',
            'descricao'=> 'Participante',
            'status' => 1,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Marcos Paulo',
            'descricao'=> 'Participante',
            'status' => 1,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Múcio',
            'descricao'=> 'Participante',
            'status' => 1,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Guilherme',
            'descricao'=> 'Participante',
            'status' => 1,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Juliana',
            'descricao'=> 'Participante',
            'status' => 1,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Dolores',
            'descricao'=> 'Participante',
            'status' => 1,
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Joaquina',
            'descricao'=> 'Participante',
            'status' => 1,
        ]);

        //Instituições
        factory(App\Entities\Instution::class)->create([
            'nome' => 'IFTO - Campus Paraíso',
            'site' => 'https://paraiso.ifto.edu.br/',
            'email' => 'https://paraiso.ifto.edu.br/',
            'descricao' => 'Localizada em Paraíso do Tocantins',
            'status' => 1,
            'telefone' => '633610300',
        ]);
        factory(App\Entities\Instution::class)->create([
            'nome' => 'IFTO - Campus Palmas',
            'site' => 'https://palmas.ifto.edu.br/',
            'email' => 'https://palmas.ifto.edu.br/',
            'descricao' => 'Localizada em Palmas do Tocantins',
            'status' => 1,
            'telefone' => '6332364000',
        ]);
        factory(App\Entities\Instution::class)->create([
            'nome' => 'UFT -Palmas',
            'site' => 'http://ww2.uft.edu.br/',
            'email' => 'dirpalmas@uft.edu.br',
            'descricao' => 'Localizada em Palmas do Tocantins',
            'status' => 1,
            'telefone' => '6332328020',
        ]);

        //Cursos
        factory(App\Entities\Course::class)->create([
            'nome' => 'Sistemas de Informação',
            'descricao' => 'Curso possui oito períodos',
            'status' => 1,
            'id_instutions' => 1,
        ]);
        factory(App\Entities\Course::class)->create([
            'nome' => 'Administração',
            'descricao' => 'Curso possui oito períodos',
            'status' => 1,
            'id_instutions' => 1,
        ]);
        factory(App\Entities\Course::class)->create([
            'nome' => 'Matemática',
            'descricao' => 'Curso possui oito períodos',
            'status' => 1,
            'id_instutions' => 1,
        ]);
        factory(App\Entities\Course::class)->create([
            'nome' => 'Química',
            'descricao' => 'Curso possui oito períodos',
            'status' => 1,
            'id_instutions' => 1,
        ]);
        factory(App\Entities\ActivityUser::class)->create([
            'status'=> '1',
            'presenca' => 1,
            'data_entrada' => '2017-07-10 00:00:00',
            'data_saida' => '2017-10-15 00:00:00',
            'id_users' => 2,
            'id_activity' => 3,
            'id_type_activity_user' => 1,
        ]);
        factory(App\Entities\ActivityUser::class)->create([
            'status'=> '1',
            'presenca' => 0,
            'data_entrada' => '2017-07-10 00:00:00',
            'data_saida' => '2017-10-12 00:00:00',
            'id_users' => 1,
            'id_activity' => 4,
            'id_type_activity_user' => 1,
        ]);
    }
}
