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
    height: 210px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
}
.right{
    float: right;
    background:white;
    width: 49%;
    height: 210px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
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
    <title>Cupon de Pago</title>
</head>
<body>
<div>
    <div class="left">
        <center>
            <img src="https://i2.wp.com/colsagradocorazon.edu.ar/wp-content/uploads/2016/03/logo-sagrado-130px.png?resize=50%2C57" alt="Logo" height="80" margin-bottom: 100px>
        </center>
        <div class="centrar">
       <h1> Colegio Sagrado Corazon</h1>
       <h1><p>25 de Mayo 680, T4000 San Miguel de Tucumán, Tucumán</p></h1>
        </div>
    </div>
    <div class="right">
        <div class="izquierda">
            <h2>Alumno:  <b>Rodrigo Campos</b></h2>
            <h2>Legajo:  <b>234532</b></h2>
            <h2>Periodo: <b>2019</b></h2>
            <h2>Cupon Nº:<b>000-3434345</b></h2>
        </div>
    </div>
</div>

<p>
<div>


    <p><b>Primer Vecimiento:</b> 10/04/2019 $9.000</p>

    <p><b>Segundo Vecimiento:</b> 10/05/2019 $16.000</p>

    <p><b>Tercer Vecimiento:</b> 10/05/2019 $22.000</p>

</div>
</p>
    <div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 100%;">
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('11', 'C128B')}}" alt="barcode" style="width: 30%;" />
    </div>
    <p>{{$valor}}</p>
    <div style="float: right;">
        <hr />
           <p><b>Impreso:</b> 07/04/2019         09:43 hs</p>
    </div>
</body>
</html>
