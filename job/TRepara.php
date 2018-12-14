<style>
    .Titulo th,.Titulo tr{
        background: black;
        color:white;
        font-size: 1.1em;
    }
    .Repa{
        background: rgba(20,255,40,0.6);
    }
    .Pre {
        background: rgba(250,20,20,0.6);
    }

    #LstEquipos td:nth-child(1),#LstEquipos td:nth-child(8){
        text-align: right;
        vertical-align: center;
    }

    #LstEquipos td{
        vertical-align: middle;
    }
    #LstEquipos td:nth-child(9) {
       text-align: center;
    }
    #LstEquipos td:nth-child(10) a {
        padding: 5px 10px !important;
    }
    #Formulario,#ListaArt{
        float: left;
        position: relative;
        min-height: 1px;
        padding-left: 0px;
        padding-right: 0px;
    }
    #Formulario {
        width: 33%;
        display: none;
    }
    #ListaArt{
        width: 100%;
    }
    .btn .active{
        background-color: #088bda!important;
        border-color: #088bda;
    }
    .chk{  margin: 5px 6px; }
    .NV{
        display: none;
    }

    #Sena,#Total,#Restan{
        text-align: center;
    }

    @media only screen and (max-width: 600px) {
        #Formulario, #ListaArt {
            width: 100%;
            display: block;
        }
    }
</style>


<div id="Formulario">
    <div class="widget-box">
        <div class="widget-header" style="background: #4cae4c;">
            <h4 style="color:white">
                Ficha Equipo -
                <span id="ID">0</span>

            <button class="btn btn-danger fa fa-print" style="float:right; margin: -5px 6px 6px 6px;" onclick="PrintEquipo(0);"> Reimprimir</button>

            </h4>
        </div>

        <div class="widget-body">
            <div class="widget-main" style="min-height: 60vh;">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Nº
                        </span>
                        <input class="form-control input-mask-phone" type="text" id="NOrden" placeholder="  Automatico " style="text-align: center;" autocomplete="off" >
                    </div>
                    <div class="input-group">
                        <label for="Cliente">Cliente</label>
                        <input type="text" id="Cliente" onkeypress="DeHasta('Cliente','Equipo');" class="col-xs-12" autocomplete="off" >
                    </div>

                    <div class="input-group">
                        <label for="Equipo">Equipo</label>
                        <input type="text" id="Equipo" class="col-xs-12" autocomplete="off" onkeypress="DeHasta('Equipo','Tel');">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon">
                            Tel
                        </span>
                        <input class="form-control input-mask-phone" type="text" id="Tel" style="text-align: center;" autocomplete="off" onkeypress="DeHasta('Tel','EMEI');" >
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon">
                            EMEI
                        </span>
                        <input class="form-control input-mask-phone" type="text" id="EMEI" style="text-align: center;" autocomplete="off" onkeypress="DeHasta('EMEI','Falla');" >
                    </div>

                    <div>
                        <label for="form-field-8">Falla</label>
                        <textarea class="form-control" id="Falla" onkeypress="DeHasta('Falla','RTecnico');"></textarea>
                    </div>
                    <div>
                        <label for="form-field-8">Tecnico</label>
                        <textarea class="form-control" id="RTecnico"  onkeypress="DeHasta('RTecnico','Estado');"></textarea>
                    </div>
                    <br>
                    <div>
                        <label for="Estado">ESTADO:</label>
                        <select id="Estado" name="Estado" onkeypress="DeHasta( 'Estado','Total');">
                            <option value="0" selected="selected">Espera</option>
                            <option value="1">Sin Reparación</option>
                            <option value="2">Re presupuestar</option>
                            <option value="3">Aprobado</option>
                            <option value="4">Reparado</option>
                            <option value="5">Entragado</option>
                        </select>
                    </div>



                </div>

                <div class="col-md-6">

                    <fieldset class="btn-group radio" style="margin-top: 0;" >
                        <input type="checkbox" id="imprimir" name="imprimir" class="NV" onclick="chkCambia(this.id)" checked >
                        <label for="imprimir"  id="imprimir1"  style="width: 165px;" class="btn btn-danger active"> IMPRIMIR </label>
                    </fieldset>

                    <div class="form-group input-group">
                        <input type="checkbox" id="Tapa" name="Tapa" class="NV" onclick="chkCambia(this.id)"><label for="Tapa" id="T1" class="chk btn active" >TAPA </label>
                        <input type="checkbox" id="Bata" name="Bata" class="NV" onclick="chkCambia(this.id)"><label for="Bata" id="B1" class="chk btn  active" >Bateria </label>
                        <input type="checkbox" id="Chip" name="Chip" class="NV" onclick="chkCambia(this.id)"><label for="Chip" id="C1" class="chk btn active" >CHIP </label>
                        <input type="checkbox" id="Memo" name="Memo" class="NV" onclick="chkCambia(this.id)"><label for="Memo" id="M1" class="chk btn active" >Memoria </label>
                    </div>

                    <div class="form-group input-group espa">
                        <span class="input-group-addon">Total:</span>
                        <input type="text" class="form-control TD" id="Total" autocomplete="off" onkeyup="Restan();" onkeypress="DeHasta('Total','Sena'); ">
                    </div>
                    <div class="form-group input-group espa">
                        <span class="input-group-addon">Seña:</span>
                        <input type="text" class="form-control TD" id="Sena" autocomplete="off" onkeyup="Restan();" onkeypress="DeHasta('Sena','BTNGraba');">
                    </div>
                    <div class="form-group input-group espa">
                        <span class="input-group-addon">Restan:</span>
                        <input type="text" class="form-control TD" id="Restan" autocomplete="off" readonly>
                    </div>
                    <div style="background: #1ab7ea;border: black 1px solid; border-radius:18px;margin: 9px 0px;" class="TC">
                        <br>
                        <p id="FechaE1"> </p>
                        <p id="FechaE2"> </p>
                        <p id="FechaE3"> </p>
                    </div>


                </div>







            </div>

            <div>
                <hr>
                <div class="col-xs-6">
                    <a class="btn btn-success btn-lg btn-block">
                        <i class="ace-icon fa fa-floppy-o bigger-160"></i>
                        Grabar
                    </a>
                </div>

                <div class="col-xs-6">
                    <a class="btn btn-warning btn-lg btn-block">
                        <i class="ace-icon fa fa-undo bigger-160"></i>
                        CANCELAR
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>



<div id="ListaArt">
    <table width="100%" class="table  table-bordered sortable" id="LART">
        <thead class="Titulo">
        <tr>
            <th style="width: 40px;"> Orden </th>
            <th style="width: 91px;"> Fecha</th>
            <th style="width: 51px;"> IMEI </th>
            <th style="width: 78px;"> Dispositivo</th>
            <th style="width: 214px;"> Falla </th>
            <th> Cliente </th>
            <th style="width: 80px;"> Telefono </th>
            <th style="width: 41px;"> Restan </th>
            <th style="width: 55px;"> Estado </th>
            <th style="width: 120px;"> Menu </th>
        </tr>
        </thead>
        <tbody id="LstEquipos">
            <tr class="Repa" ondblclick="CE(1073)">
                <td>00006</td>
                <td>2017-11-02 11:47:55</td>
                <td>blanca 7"</td>
                <td>TABLET G53</td>
                <td>Pin de carga ing apgado</td>
                <td>BARBARA CAGNA</td>
                <td>1157939348</td>
                <td>$380.00</td>
                <td>Aprobado</td>
                <td><a class="btn btn-danger" onclick="ER(1073)">Entregar</a></td>
            </tr>

            <tr class="Repa" ondblclick="CE(1074)">
                <td>00007</td>
                <td>2017-11-02 12:44:56</td>
                <td>8069</td>
                <td>MOTO G3</td>
                <td>modulo ing apgado</td>
                <td>RINCON ELIO</td>
                <td>1131192976</td>
                <td>$2,000.00</td>
                <td>Aprobado</td>
                <td><a class="btn btn-danger" onclick="ER(1074)">Entregar</a></td>
            </tr>

            <tr class="" ondblclick="CE(1978)">
                <td>00008</td>
                <td>2018-01-11 20:21:20</td>
                <td>000</td>
                <td>J5 PRIME</td>
                <td>REVISAR NO PWR</td>
                <td>AGUSTIN</td>
                <td>000</td>
                <td>$0.00</td>
                <td>ESPERA</td>
                <td><a class="btn btn-info" onclick="R(1978);"><i class="fa fa-check-square"></i><br> SI </a> <a class="btn btn-danger" onclick="N(1978);"><i class="fa fa-ban"></i><br>NO</a></td>
            </tr>
            <tr class="" ondblclick="CE(1979)"><td>00009</td><td>2018-01-11 20:38:02</td><td>9310</td><td>NOKIA RM-1073</td><td>SE APAGA SOLO</td><td>GOMEZ MATIAS</td><td>1164987603</td><td>$0.00</td><td>ESPERA</td><td><a class="btn btn-info" onclick="R(1979);"><i class="fa fa-check-square"></i><br> SI </a> <a class="btn btn-danger" onclick="N(1979);"><i class="fa fa-ban"></i><br>NO</a></td></tr><tr class="" ondblclick="CE(1980)"><td>00010</td><td>2018-01-11 20:40:21</td><td>6316</td><td>S3</td><td>REVISAR PIN</td><td>FLAVIA</td><td>1168935152</td><td>$0.00</td><td>ESPERA</td><td><a class="btn btn-info" onclick="R(1980);"><i class="fa fa-check-square"></i><br> SI </a> <a class="btn btn-danger" onclick="N(1980);"><i class="fa fa-ban"></i><br>NO</a></td></tr><tr class="" ondblclick="CE(3005)"><td>00011</td><td>2018-03-14 10:34:01</td><td>2556</td><td>GRAND PRIME</td><td>boton inicio</td><td>SEBASTIAN</td><td></td><td>$0.00</td><td>ESPERA</td><td><a class="btn btn-info" onclick="R(3005);"><i class="fa fa-check-square"></i><br> SI </a> <a class="btn btn-danger" onclick="N(3005);"><i class="fa fa-ban"></i><br>NO</a></td></tr><tr class="" ondblclick="CE(3006)"><td>00012</td><td>2018-03-14 11:05:56</td><td>3042</td><td>LG D855</td><td>revisar prende y apaga</td><td>MARIA</td><td>42366367</td><td>$0.00</td><td>ESPERA</td><td><a class="btn btn-info" onclick="R(3006);"><i class="fa fa-check-square"></i><br> SI </a> <a class="btn btn-danger" onclick="N(3006);"><i class="fa fa-ban"></i><br>NO</a></td></tr><tr class="Repa" ondblclick="CE(3380)"><td>00013</td><td>2018-04-09 10:48:25</td><td>1234</td><td>J7 2015</td><td>MODULO</td><td>PRICILA SANCHEZ</td><td>12345678</td><td>$2,300.00</td><td>Aprobado</td><td><a class="btn btn-danger" onclick="ER(3380)">Entregar</a></td></tr><tr class="" ondblclick="CE(3382)"><td>00014</td><td>2018-04-09 13:06:55</td><td>0000</td><td>SAMSUNG J7</td><td>pin de carga</td><td>AMADEO FRANCISCO PANCURULO</td><td>4545521</td><td>$390.00</td><td>ESPERA</td><td><a class="btn btn-info" onclick="R(3382);"><i class="fa fa-check-square"></i><br> SI </a> <a class="btn btn-danger" onclick="N(3382);"><i class="fa fa-ban"></i><br>NO</a></td></tr><tr class="Repa" ondblclick="CE(3387)"><td>00016</td><td>2018-04-09 18:44:50</td><td>2250</td><td>P712</td><td>LCD + TOUCH</td><td>CHAVEZ MILAGROS</td><td>1156151717</td><td>$900.00</td><td>Aprobado</td><td><a class="btn btn-danger" onclick="ER(3387)">Entregar</a></td></tr><tr class="Repa" ondblclick="CE(3573)"><td>00047</td><td>2018-04-21 11:37:46</td><td>4394</td><td>MOTO G3</td><td>SOCALO DE SIM Y T2FULL</td><td>ALEJANDRA CRRRANO</td><td>1557958133</td><td>$850.00</td><td>Aprobado</td><td><a class="btn btn-danger" onclick="ER(3573)">Entregar</a></td></tr><tr class="" ondblclick="CE(3591)"><td>00051</td><td>2018-04-23 11:52:41</td><td>6119</td><td>K10</td><td>modulo</td><td>NELIDA</td><td>42698222</td><td>$2,100.00</td><td>ESPERA</td><td><a class="btn btn-info" onclick="R(3591);"><i class="fa fa-check-square"></i><br> SI </a> <a class="btn btn-danger" onclick="N(3591);"><i class="fa fa-ban"></i><br>NO</a></td></tr><tr class="Pre" ondblclick="CE(3634)"><td>00061</td><td>2018-04-25 18:12:35</td><td>6998</td><td>LG D693AR</td><td>NO POWER (PRESUPUESTAR)</td><td>FAVIO BURIANI</td><td>42696659</td><td>$0.00</td><td>Sin Reparación</td><td><a class="btn btn-success" onclick="SR(3634)">Entregar</a></td></tr>
        </tbody>
        <tfoot></tfoot>
    </table>
</div>

