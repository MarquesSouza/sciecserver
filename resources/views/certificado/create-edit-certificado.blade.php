@extends('app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Monte o Certificado do seu Evento</h3>
        </div>
        <div class="panel-body panel-body-image">
            <div id="certificado" style="border:1px solid black;">
                <img id="background" data-urldocumentoamazon="" class="bg" src="">
                <div id="textoCertificado" contenteditable="true" style="width:100%;height:100%;">
                    <p><br data-mce-bogus="1"><div style="font-size:10px;padding-left:10px">Verifique o código de autenticidade <b>{certificado.codigo}</b> em https://www.even3.com.br//documentos</div></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p style="padding-left: 180px; margin-right: 180px; text-align: justify; font-size:14pt;" data-mce-style="padding-left: 180px; margin-right: 180px; text-align: justify; font-size:14pt;">
                        Certificamos que o trabalho intitulado <b>{trabalho.titulo}</b> de autoria de {trabalho.autores}, foi
                        apresentado no evento <b>{evento.titulo}</b>, realizado em {evento.data.realizacao}, na cidade de {evento.cidade}, contabilizando carga horária total de {evento.carga.horaria} horas
                    </p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p style="padding-left: 180px; padding-right: 180px; text-align: center; font-size:12pt;" data-mce-style="padding-left: 180px; padding-right: 180px; text-align: center; font-size:12pt;">
                        {evento.cidade}, XX de XX de 2016
                    </p>
                </div>
            </div>
        </div>
    </div>
        <label>Faça o upload da imagem do layout de seu certificado!</label>
        <input type="file" multiple class="file" data-preview-file-type="any"/>
    <button class="btn btn-success btn-rounded btn-lg">Enviar Certificado</button>
    <input type="text" class="form-control" ng-model="evento.local" details="googlePlaceDetails" googleplace />
@endsection