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
            'password' => '123',
            'cpf'  => '99999999999',
            'email' => 'pedrocesar1010@gmail.com',
            'telefone' => '63992194736',
        ]);
        factory(App\Entities\User::class)->create([
            'name' => 'Jonas',
            'password' => '123',
            'cpf'  => '22999999999',
            'email' => 'jonasjunior@ifto.edu.br',
            'telefone' => '63992194736',
        ]);
        factory(App\Entities\User::class)->create([
            'name' => 'Álvaro',
            'password' => '123',
            'cpf'  => '99999999988',
            'email' => 'alvaro@gmail.com',
            'telefone' => '63992194736',
        ]);
        factory(App\Entities\User::class)->create([
            'name' => 'Marcos',
            'password' => '123',
            'cpf'  => '22999990000',
            'email' => 'marcos@ifto.edu.br',
            'telefone' => '63992194736',
        ]);

        //Usuário Tipo de Usuário
        factory(App\Entities\UserTypeUser::class)->create([
            'id_user'=> ,
            'id_type_user' => ,
            'status' => true,
        ]);

        //Tipo de usuários
        factory(App\Entities\TypeUser::class)->create([
            'status' => 'true',
            'nome' => 'Organizador',
            'descricao' => 'Criar e editar evento',

        ]);
        factory(App\Entities\TypeUser::class)->create([
            'status' => 'true',
            'nome' => 'Administrador',
            'descricao' => 'Criar e editar eventos, usuários etc.',

        ]);
        factory(App\Entities\TypeUser::class)->create([
            'status' => 'true',
            'nome' => 'Administrador',
            'descricao' => 'Criar e editar eventos, usuários etc.',
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

        //Atividades
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Mineração de Dados',
            'descricao' => 'Curso completo.',
            'status'=> '0',
            'hora' => '8',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '40',
            'cod_inscritos'=> '9090',
            'data_inicio'=> '08/07/2017',
            'data_conclusao'=> '15/05/2017',
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Banco de Dados Completo',
            'descricao' => 'Curso My SQL.',
            'status'=> '1',
            'hora' => '7',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '30',
            'cod_inscritos'=> '8080',
            'data_inicio'=> '08/07/2017',
            'data_conclusao'=> '15/05/2017',
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Ferramentas para Gerenciamento de Redes',
            'descricao' => 'Aprenda a ter dominio completo sobre sua rede hoje, e veja quais as soluções mais viáveis nos dias de hoje',
            'status'=> '1',
            'hora' => '7',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '25',
            'cod_inscritos'=> '7070',
            'data_inicio'=> '10/07/2017',
            'data_conclusao'=> '20/05/2017',
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Scrum',
            'descricao' => 'Curso completo de Scrum.',
            'status'=> '0',
            'hora' => '7',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '40',
            'cod_inscritos'=> '6060',
            'data_inicio'=> '09/07/2017',
            'data_conclusao'=> '15/05/2017',
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Inteligência Artificial',
            'descricao' => 'Curso completo de Inteligência Artificial.',
            'status'=> '0',
            'hora' => '8',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '38',
            'cod_inscritos'=> '9090',
            'data_inicio'=> '08/07/2017',
            'data_conclusao'=> '15/05/2017',
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'Laravel Básico',
            'descricao' => 'Curso completo sobre Laravel.',
            'status'=> '1',
            'hora' => '7',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '29',
            'cod_inscritos'=> '7090',
            'data_inicio'=> '08/07/2017',
            'data_conclusao'=> '15/05/2017',
        ]);
        factory(App\Entities\Activity::class)->create([
            'nome' => 'PHP Avançado',
            'descricao' => 'Mini curso sobre PHP.',
            'status'=> '0',
            'hora' => '8',
            'local'=> 'IFTO - Campus Paraíso',
            'qtd_inscritos' => '40',
            'cod_inscritos'=> '9090',
            'data_inicio'=> '08/07/2017',
            'data_conclusao'=> '15/05/2017',
        ]);
        //Eventos
        factory(App\Entities\Event::class)->create([
            'nome' => 'II Semana Agroinformática de Paraíso do Tocantins',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 'true',
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '10/07/2017',
            'data_conclusao'=> '15/07/2017',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'II Semana Agroinformática de Paraíso do Tocantins',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 'true',
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '10/07/2017',
            'data_conclusao'=> '15/07/2017',
            'logoEvento'=> 'Agroinformática',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'II ciclo de palestras: os saberes da agricultura indígena.',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 'true',
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '10/07/2017',
            'data_conclusao'=> '15/07/2017',
            'logoEvento'=> 'Indígena',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'IV SEMAD (Semana Acadêmica de Administração)',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 'true',
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '28/08/2017',
            'data_conclusao'=> '30/08/2017',
            'logoEvento'=> 'SEMAD',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'Semana Tecnológica',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 'true',
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '24/10/2017',
            'data_conclusao'=> '27/10/2017',
            'logoEvento'=> 'Tecnológica',
        ]);
        factory(App\Entities\Event::class)->create([
            'nome' => 'II Jornada Acadêmica Multidisciplinar ( IV SATECA; IV SEMAQ; VII SEMAT e V 
            Jornada Tocantinense de Gestão TI)',
            'descricao' => 'Evento contará com a presença de vários professores renomados, palestras e mini cursos.',
            'status'=> 'true',
            'local'=> 'IFTO - Campus Paraíso',
            'data_inicio'=> '24/10/2017',
            'data_conclusao'=> '27/10/2017',
            'logoEvento'=> 'Tecnológica',
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

        //Atividade do usuário
        factory(App\Entities\ActivityUser::class)->create([
            'status'=> '1',
            'presenca' => 'Confirmada',
            'data_entrada' => '10/07/17',
            'data_saida' => '15/10/2017',
        ]);
        factory(App\Entities\ActivityUser::class)->create([
            'status'=> '1',
            'presenca' => 'Falta',
            'data_entrada' => '10/07/17',
            'data_saida' => '12/10/2017',
        ]);
        //Artigos
        factory(App\Entities\Article::class)->create([
            'titulo'    => 'SDD - Implantação de sistema para distribuição de disciplinas',
            'resumo'    => 'A eficiência na realização de tarefas rotineiras de cunho administrativo em instituições de ensino, em especial as que são efetuadas de forma centralizada, muitas vezes comprometem o bom andamento das tarefas acadêmicas primordiais, principalmente quando estas atividades ocorrem de forma manual. 
             No contexto atual cada dia mais se faz necessário a implementação de soluções tecnológicas nas organizações  para solucionar problemas e agilizar processos que existem e acontecem muitas das vezes de forma manual e repetitiva. Uma solução de grande relevância para inovar esses processos que ocorrem de forma estática  seria a utilização de aplicações WEB para o desenvolvimento de soluções que irão automatizar essas atividades, pois várias são as vantagens em utilizá-la. Alguns benefícios são a facilidade no acesso, que significa que em qualquer local você pode facilmente acessar as informações contidas na aplicação, outra grande vantagem é  a possibilidade de acessar a aplicação sem a necessidade de instalar nada no computador,
             somente utilizando um browser você poderá acessar  a aplicação.',
            'autores'   => 'Giovanni, Pedro César, Marcos Paulo',
            'local'     => 'Paraíso do Tocantins',
            'subtitulo' => 'SDD',
            'situacao'  => 'Concluído',
            'status'    =>  'true',
        ]);
        factory(App\Entities\Article::class)->create([
            'titulo'    => 'Segurança dos Dados',
            'resumo'    => 'A eficiência na realização de tarefas rotineiras de cunho administrativo em instituições de ensino, em especial as que são efetuadas de forma centralizada, muitas vezes comprometem o bom andamento das tarefas acadêmicas primordiais, principalmente quando estas atividades ocorrem de forma manual. 
             No contexto atual cada dia mais se faz necessário a implementação de soluções tecnológicas nas organizações  para solucionar problemas e agilizar processos que existem e acontecem muitas das vezes de forma manual e repetitiva. Uma solução de grande relevância para inovar esses processos que ocorrem de forma estática  seria a utilização de aplicações WEB para o desenvolvimento de soluções que irão automatizar essas atividades, pois várias são as vantagens em utilizá-la. Alguns benefícios são a facilidade no acesso, que significa que em qualquer local você pode facilmente acessar as informações contidas na aplicação, outra grande vantagem é  a possibilidade de acessar a aplicação sem a necessidade de instalar nada no computador,
             somente utilizando um browser você poderá acessar  a aplicação.',
            'autores'   => 'Geverson',
            'local'     => 'Paraíso do Tocantins',
            'subtitulo' => 'Segurança',
            'situacao'  => 'Concluído',
            'status'    =>  'true',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Marcos',
            'descricao'=> 'Participante',
            'status' => 'true',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Marques',
            'descricao'=> 'Administrador',
            'status' => 'true',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Álvaro',
            'descricao'=> 'Organizador',
            'status' => 'false',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Rômulo',
            'descricao'=> 'Participante',
            'status' => 'true',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Marcos Paulo',
            'descricao'=> 'Participante',
            'status' => 'true',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Múcio',
            'descricao'=> 'Participante',
            'status' => 'true',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Guilherme',
            'descricao'=> 'Participante',
            'status' => 'true',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Juliana',
            'descricao'=> 'Participante',
            'status' => 'true',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Dolores',
            'descricao'=> 'Participante',
            'status' => 'true',
        ]);
        factory(App\Entities\Participation::class)->create([
            'nome' => 'Joaquina',
            'descricao'=> 'Participante',
            'status' => 'true',
        ]);

        //Instituições
        factory(App\Entities\Instution::class)->create([
            'nome' => 'IFTO - Campus Paraíso',
            'site' => 'https://paraiso.ifto.edu.br/',
            'email' => 'https://paraiso.ifto.edu.br/',
            'descricao' => 'Localizada em Paraíso do Tocantins',
            'status' => 'true',
            'telefone' => '633610300',
        ]);
        factory(App\Entities\Instution::class)->create([
            'nome' => 'IFTO - Campus Palmas',
            'site' => 'https://palmas.ifto.edu.br/',
            'email' => 'https://palmas.ifto.edu.br/',
            'descricao' => 'Localizada em Palmas do Tocantins',
            'status' => 'true',
            'telefone' => '6332364000',
        ]);
        factory(App\Entities\Instution::class)->create([
            'nome' => 'UFT -Palmas',
            'site' => 'http://ww2.uft.edu.br/',
            'email' => 'dirpalmas@uft.edu.br',
            'descricao' => 'Localizada em Palmas do Tocantins',
            'status' => 'true',
            'telefone' => '6332328020',
        ]);

        //Cursos
        factory(App\Entities\Course::class)->create([
            'nome' => 'Sistemas de Informação',
            'descricao' => 'Curso possui oito períodos',
            'status' => 'true',
        ]);
        factory(App\Entities\Course::class)->create([
            'nome' => 'Administração',
            'descricao' => 'Curso possui oito períodos',
            'status' => 'true',
        ]);
        factory(App\Entities\Course::class)->create([
            'nome' => 'Matemática',
            'descricao' => 'Curso possui oito períodos',
            'status' => 'true',
        ]);
        factory(App\Entities\Course::class)->create([
            'nome' => 'Química',
            'descricao' => 'Curso possui oito períodos',
            'status' => 'true',
        ]);

    }
}
