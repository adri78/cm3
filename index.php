<?php include_once "php/comun.php"; ?>

<?php include_once 'php/cabe.php'; ?>

<style>
    #nav-search-input:focus{
        background: rgba(40, 230, 84, 0.7);
        text-align: center;
    }
    .page-content {
        padding-right: 1px !important;
        padding-left: 1px !important;
    }

</style>


</head>

<body class="no-skin">

<?php include_once 'php/Barra_Super.php'; ?>


		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

<?php include_once 'php/Barra_Izquierda.php'; ?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li class="btn btn-info btn-lg" id="BTNNuevo" title=" F1 - Nuevos equipos" onclick="MostrarFormulario();">
                                &nbsp;
								<i class="ace-icon glyphicon glyphicon-check"></i>
                                &nbsp; NUEVO &nbsp;&nbsp;&nbsp;
							</li>

							<li class="btn btn-warning btn-lg" id="BTNNuevo" title=" F2 - Repuestos" onclick="ML();">
                                &nbsp;
                                <i class="ace-icon fa fa-gavel"></i>
                                &nbsp; Repuestos &nbsp;&nbsp;&nbsp;
							</li>
							<li class="btn btn-default btn-lg" onclick="barraBusca()"> F3 - Buscar</li>
                            <li class="btn btn-success btn-lg" onclick="exportTableToExcel('LART')"> <i class="ace-icon fa fa-desktop"></i> EXCEL</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search" >
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Buscar ..." class="nav-search-input" id="nav-search-input" autocomplete="off"  style="width: 252px;" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">

<?php // include 'php/Barra_Derecha.php' ;   // Barra lateral derecha ?>

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->


<?php include 'job/TRepara.php'; ?>



								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php //include_once 'php/Footer.php'; ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>


<?php include 'job/Presupuestos.php' ; ?>





		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
        <script src="assets/js/zelect.js"></script>
        <script src="assets/js/Reparar.js"></script>
        <script src="assets/js/ToExcel.js"></script>
<script>
    var MostarFormu=0;

    function MostrarFormulario() {
        if(MostarFormu == 0){
            document.getElementById('Formulario').style.display='inline-block';
            document.getElementById('ListaArt').style.width = '66%';
            MostarFormu=1;
            document.getElementById('Cliente').focus();
        }else{
            document.getElementById('Formulario').style.display='none';
            document.getElementById('ListaArt').style.width = '100%';
            MostarFormu=0;
            document.getElementById('nav-search').focus();
        }
    }

    function barraBusca() {
        document.getElementById('nav-search-input').focus();
    }

    function ML() {
        document.getElementById('PreRes').classList.toggle("control-sidebar");
        document.getElementById('PreRes').classList.toggle("NV");
        document.querySelector('.zearch').focus();
    }

  jQuery('#intro select').zelect({ placeholder:'Equipo ' });


    (function(){


        const OBI=document.getElementById('OBI').addEventListener('click',function () { //reduce barra
             document.getElementById('sidebar-toggle-icon').click();
        });

        let TheKey = document.addEventListener("keydown",function (e) {

            var charCode = (e.which) ? e.which : e.keyCode;
            if (charCode == 112){
                e.preventDefault();
                MostrarFormulario();
            } // F1
            if (charCode == 113){
                e.preventDefault();
                ML();
            } // F2
            if (charCode == 114){
                e.preventDefault();
                barraBusca()
            } // F3

        });



        jQuery.extend(jQuery.expr[":"],
            {
                "contiene-palabra": function (elem, i, match, array) {
                    return (elem.textContent || elem.innerText || jQuery(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                }
            });
        let thebus=document.getElementById('nav-search-input').addEventListener("keyup",function (e) {
             let txt = document.getElementById('nav-search-input').value.toUpperCase(); ;
             if(txt !=""){
                 jQuery("#LART tbody>tr").hide();
                 jQuery("#LART td:contiene-palabra('" + txt + "')").parent("tr").show();
             }else{
                 jQuery("#LART tbody>tr").show();
             }
        });

    })();
</script>
	</body>
</html>
