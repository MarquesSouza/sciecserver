<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/theme-default.css') }}"/>
    <!-- EOF CSS INCLUDE -->

    <style>
        .page-break {
            page-break-after: always;
        }
    </style>

</head>
<body>
<img src="{{asset('img/certificado/certificado-ifto.jpg')}}" class="img-responsive imagem" style="width:100%"/>
<div style="position:absolute; top: 100px; left: 0px;">
    <div style="text-align: center;">
        <h2><b>REPÚBLICA FEDERATIVA DO BRASIL</b></h2>
        <h4><p>MINISTÉRIO DA EDUCAÇÃO</p>
            <p>SECRETARIA DA EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</p>
            <p>INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO TOCANTINS</p></h4>
    </div>
</div>
<div style="position: absolute; top: 380px; left: 150px; right: 150px;">
    <div style="text-align: justify; font-size: 20px">
        @foreach($retorno as $r)

            <p>CERTIFICAMOS QUE <b>{{$r->name}}</b> INSCRITO SOB O CPF  <b>{{$r->cpf}}</b> PARTICIPOU DO EVENTO
                <b>{{$r->nome}}</b> COM CARGA HORÁRIA TOTAL DE  <b>{{$r->hora}}</b> NO(S) DIA(S)
                <b>{{$r->data_inicio}}</b> a  <b>{{$r->data_conclusao}}</b> QUE OCORREU EM  <b>{{$r->local}}</b> PARTICIPOU TAMBÉM DAS
            ATIVIDADES LISTADAS NO VERSO DESTE CERTIFICADO.
        </p>
    </div>

        @endforeach
</div> <!--
<div class="page-break"></div>  <!-- Quebra de Página
<div>
    <table>
        <thead>
        <tr>
            <td>Atividade</td>
            <td>Local</td>
            <td>Descrição</td>
            <td>Carga Horária</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>{atividade.nome}</th>
            <th>{local.nome}</th>
            <th>{descricao}</th>
            <th>{carga.horaria.atividade}</th>
        </tr>
        </tbody>
    </table>
</div> -->
</body>
</html>