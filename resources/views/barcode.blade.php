<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
img{
         padding-left: 20px;
    }
.left{
    float: left;
    background:white;
    width: 49%;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
}
.right{
    float: right;
    background:white;
    width: 49%;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
}
html, body{
  height: 100%;
  background-color:white;
}
.centrar{
    text-align: center;
}
.izquierda{
    text-align: left;
}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <div class="left">
        <center>
            <img src="{{asset('image/escudo.png')}}" alt="Logo" height="80" margin-bottom: 100px>
        </center>
        <div class="centrar">
       <h1> Colegio Sagrado Corazon</h1>
       <h4><p>25 de Mayo 680, T4000 San Miguel de Tucumán, Tucumán</p></h4>
        </div>
    </div>
    <div class="right">
        <div class="izquierda">
            <h1>Alumno:  <b>Rodrigo Campos</b></h1>
            <h3>Legajo:  <b>234532</b></h3>
            <h3>Periodo: <b>2019</b></h3>
            <h3>Cupon Nº:<b>000-3434345</b></h3>
        </div>
    </div>
</div>
<hr />
<p></p>
<div style="margin-top:250px">
    <ul>
        <li>
                <b>Primer Vecimiento:</b> 10/04/2019 $9.000
        </li>
        <li>
                <b>Segundo Vecimiento:</b> 10/05/2019 $16.000
        </li>
        <li>
                <b>Tercer Vecimiento:</b> 10/05/2019 $22.000
        </li>

    </ul>
</div>




    <div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($valor, 'C39')}}" alt="barcode" />
    <p>{{$valor}}</p>
    </div>
</body>
<footer>
    <div style="float: right;">
        <hr />
           <p><b>Impreso:</b> 07/04/2019         09:43 hs</p>
    </div>
</footer>
</html>
