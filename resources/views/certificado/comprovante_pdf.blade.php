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
<body style=" background-color: #ffffff">
<div style="position:absolute; top: 5px; left: 0px; ">
    <div style="text-align: center;">
        <img src="{{asset('img/certificado/siell.png')}}" class="img-responsive imagem"  style="max-height: 20%"/>

        <h3><b>  SIMPÓSIO INTERNACIONAL DE EDUCAÇÃO, LÍNGUAS E LINGUAGENS:</b></h3>
        <h3><b> As Tecnologias Educativas em Ação</b></h3>
        <BR>
        <BR>
        <BR>
        <BR>
        <BR>
        <BR>
        <h2> <b> DECLARAÇÃO DE INSCRIÇÃO</b></h2>
    </div>

</div>
<div style="position: absolute; top: 380px; left: 150px; right: 150px;">
    <div style="text-align: justify; font-size: 20px">
        @foreach($certificado as $r)

            <BR>
            <BR>
            <BR>
            <BR>

            <BR>
            <BR>

            <p>Declaramos para os fins devidos que {{$r->name}}, CPF: {{$r->cpf}} está inscrito (a) no {{$r->evento}}, que ocorrerá de {{$r->data_inicio}} a {{$r->data_conclusao}} no campus Paraíso do Tocantins do IFTO, localizado à BR 153, KM 480 Distrito Agroindustrial, Paraíso do Tocantins TO, 77600000, tel.: (63) 33610300.</p>
            <br>
            <p style="text-align: right">Organização I SIELL</p>
            <p style="text-align: right">Julho 2017</p>
        @endforeach
    </div>
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