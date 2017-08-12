<?php
$preference_data = array(
    "items" => array(
        array(
            "title" => "Traslado Cataratas Argentina",
            "quantity" => 1,
            "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
            "unit_price" => 1.00
        )
    )
);
$mp = new Mercadopago("2673738623774353", "lu3xy9QvaKLqfKUudd6AwBkKOAPGUw7Q");
$preference = $mp->create_preference($preference_data);
echo $nroTras;
?>

<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="thumbnail">
            <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/traslado1/1g.jpg" alt="">
            <div class="caption-full">
                <h3 class="pull-right">$ 650.00</h3>
                <h3><a href="#">Traslado Cataratas Argentina</a>

                </h3>
                <p>
                    Realizamos Servicios de traslado hasta el <b>Parque Nacional Iguazu.</b>
                </p>
                <p>Los traslados se pueden realizar desde el<strong> Aeropuerto Iguazú</strong> directamente hacia las <strong>Cataratas Argentina </strong>. Puede contratar también los servicios desde cualquier <strong>Hotel</strong> que estén Ubicado tanto en <strong>Argentina como en Brasil.</strong></p>
                <p>Una vez que coordinamos los horarios, pasamos a buscarlos por el lugar donde estén hospedados y los trasladamos hasta el parque.</p>
                <p>Luego se coordina el horario para pasar a buscarlos o pueden llamarnos cuando quieran realizar el regreso</p>
                <h5>Ingreso al Parque Nacional: </h5> 
                <ul>
                    <li><strong><span>Entrada General: $ 500,00 (pesos por persona)</span></strong></li>  
                    <li><strong><span>Mercosur (BRA, PAR, URU): $ 400,00 (pesos por persona)</span></strong></li> 
                    <li><strong><span>Residentes argentinos: $ 260,00 (pesos por persona)</span></strong></li> 
                    <li><strong><span>Menores (entre 6 y 12 años)  - Entrada general: $  130,00 (pesos por persona)</span></strong></li> 
                    <li><strong><span>Menores (entre 6 y 12 años)  - Mercosur: $  100,00 (pesos por persona)</span></strong></li>                       <li><strong><span>Menores (entre 6 y 12 años)  - Residentes argentinos: $  80,00 (pesos por persona)</span></strong></li>                    

                </ul>
                <p> * Ingresos al <b>Parque Nacional</b> no estan incluidos en el traslado. <br>
                    * Se puede abonar únicamente en pesos y en efectivo. <br>
                    * Para obtener los diferentes descuentos es necesario presentar D.N.I.                </p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Mapa Integrado</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Tarifas 2017</button>

            </div>
            <div class="ratings">
                <p class="pull-right">3 Opiniones</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    4.0 Extrellas
                </p>
            </div>

        </div>

        <div class="well">

            <h4><a href="#demo" data-toggle="collapse">Complete el Formulario de Reserva</a>
            </h4>

            <hr>
            <div id="demo" class="collapse">
                <div class="row">

                    <form action="" method="post" id="formulario" name="formulario"  class="form">
                        <input type="hidden" class="form-control" type="date"  id="idTraslado" value="<?php echo $nroTras ? $nroTras : '-1'; ?>" >
                        <input type="hidden" class="form-control" type="date"  id="nombreTraslado" value="<?php echo $preference_data['items'][0]['title']; ?>" >
                        <div  class="form-group">
                            <label  for="InputEmail">Email address/Direccion de Correo</label>
                            <input type="email" class="form-control" id="InputEmail" name="InputEmail">

                        </div>
                        <div c class="form-group">
                            <label for="InputNombre">Nombre Completo</label>
                            <input type="text" class="form-control" id="InputNombre" name="InputNombre">
                        </div>

                        <div class="form-group">
                            <label for="inputdate" class="col-2 col-form-label">Fecha Reserva/Date</label>

                            <div class="col-10">
                                <input type="date" name="inputdate" id="inputdate" min="<?php echo date("Y-m-d"); ?>" max="2019-12-31" value="<?php echo date("Y-m-d"); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Hotel/Hospedaje</label>
                            <select class="form-control" id="selectHotel" name="selectHotel" onchange="this.value == 'otro' ? document.getElementById('otroAlo').value = '' : document.getElementById('otroAlo').value = this.value">
                                <option value="">Seleccione un Hotel...</option>
                                <option value="El guembe">El guembe</option>
                                <option value="Lodge de la Selva">Lodge de la Selva</option>
                                <option value="otro">Otro</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label><input type="checkbox" onclick="document.getElementById('otroAlo').disabled = !this.checked;document.getElementById('selectHotel').disabled = this.checked;document.getElementById('selectHotel').value = 'otro'">Otro Alojamiento</label>
                        </div> 
                        <div class="form-group" >
                            <label for="exampleTextarea">donde va alojarse?</label>
                            <textarea class="form-control" name="otroAlo" id="otroAlo" rows="3" disabled></textarea>
                        </div>   
                        <div class="form-group">
                            <label for="exampleSelect2">Cantidad de Pasajeros</label>
                            <select  class="form-control" id="inputCantPax">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="form-group">

                            <label for="exampleTextarea">Alguna Aclaracion</label>
                            <textarea class="form-control" id="imputAclaracion" rows="3" ></textarea>
                        </div>                                  

                    </form>
                    <div class="row">
                        <p><a id="link" href="<?php echo $preference['response']['init_point']; ?>"   name="MP-Checkout" class="lightblue-M-Ov-ArOn" mp-mode="modal"  onreturn="execute_my_onreturn">Pagar</a>
<!--                            <button type="button" onclick="enviarConfirmacion('Pago aprobado')">prueba email</button>-->
                            <a href="<?php echo base_url(); ?>index.php/Home" class="btn btn-default" role="button">Volver Atras</a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>



<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php echo base_url(); ?>assets/images/mapacataratas.jpg"  class="img-responsive">
            </div>
        </div>
    </div>
</div>
<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?php echo base_url(); ?>assets/images/tarifas2017.jpg"  class="img-responsive">
            </div>
        </div>
    </div>
</div>
<style>
    .btn-link{
        border:none;
        outline:none;
        background:none;
        cursor:pointer;
        color:#0000EE;
        padding:0;
        text-decoration:underline;
        font-family:inherit;
        font-size:inherit;
    }
</style>

<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>

