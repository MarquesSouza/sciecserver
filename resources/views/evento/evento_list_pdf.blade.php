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
<div style="position:absolute;">
    <div>

        <?php $count=1; ?>
        <table  style="text-align: center; margin-left: 5px; margin-top: 5px; margin-right: 5px; margin-bottom: 5px; width: 100%; border: 2px solid #0c0d10; border-collapse: collapse;"  >
                <tr style="background-color: grey; border: 1px solid grey">
                    <th style="border: 1px solid black">Numero</th>
                    <th style="border: 1px solid black">Nome</th>
                    <th style="border: 1px solid black">CPF</th>
                    <th style="border: 1px solid black">Assinatura</th>

                </tr>


        @foreach($lista as $a)
            <tr>
                <td style="border: 1px solid black">{{$count}}</td>
                <td style="border: 1px solid black">{{$a->name}}</td>
                <td style="border: 1px solid black">{{$a->cpf}}</td>
                <td style="border: 1px solid black"></td>
            </tr>
    <?php $count++; ?>
        @endforeach
            </table>
    </div>
</div>

</body>
</html>