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
        <p>CERTIFICAMOS QUE <code>{aluno.nome}</code> INSCRITO SOB O CPF <code>{aluno.cpf}</code>PARTICIPOU DO EVENTO
            <code>{evento.nome}</code> COM CARGA HORÁRIA TOTAL DE <code>{carga.hóraria.evento}</code> NO(S) DIA(S)
            <code>{data.evento}</code> QUE OCORREU EM <code>{instituicao.nome}</code> PARTICIPOU TAMBÉM DAS
            ATIVIDADES LISTADAS NO VERSO DESTE CERTIFICADO.
        </p>
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