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
<img src="{{asset('img/certificado/certificado-capa.png')}}" class="img-responsive imagem" style="width:100%"/>
<div style="position:absolute; top: 100px; left: 0px;">
    <div style="text-align: center;">
        <h2><b></b></h2>
        <h4><p></p>
            <p></p>
            <p></p></h4>
    </div>
</div>
<div style="position: absolute; top: 380px; left: 150px; right: 150px;">
    <div style="text-align: justify; font-size: 20px">
        @foreach($certificado as $r)

            <p>CERTIFICAMOS QUE <b>{{$r->name}}</b> INSCRITO SOB O CPF  <b>{{$r->cpf}}</b> ATUOU COMO <b>{{$tipo}}</b> DO EVENTO
                <b>{{$r->evento}}</b> COM CARGA HORÁRIA TOTAL DE  <b>{{$SOMA}}</b> NO(S) DIA(S)
                <b>{{$r->data_inicio}}</b> a  <b>{{$r->data_conclusao}}</b> QUE OCORREU EM  <b>{{$r->local}}</b> PARTICIPOU TAMBÉM DAS
            ATIVIDADES LISTADAS NO VERSO DESTE CERTIFICADO.
        </p>
        @endforeach
    <div>
        <p style="text-align: end">{{$codigo}}</p>
    </div>
    </div>
</div>
<div class="page-break"></div>
<div>
    <img src="{{asset('img/certificado/certificado-contra.png')}}" class="img-responsive imagem" style="width:100%"/>

</div>
</body>
</html>