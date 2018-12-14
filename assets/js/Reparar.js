function DeHasta(enter,campo){
    var D= document.getElementById(enter);
    $(D).keydown(function(e){
        if (e.keyCode==13){
            e.preventDefault();
            document.getElementById(campo).focus();
            return false;
        }
    });
}


function Restan() {
    let val1 = document.getElementById('Total').value;
    let val2 = document.getElementById('Sena').value;

    if ( isNaN(val1)){
        document.getElementById('Total').value="0.00";
        val1 =0.00;
    }

    if (  isNaN(val2) ){
        document.getElementById('Sena').value="0.00";
        val2 =0.00;
    }
    document.getElementById('Restan').value=( val1 - val2 ).toFixed(2);
}

function chkCambia(id){
    if(id=="Tapa"){
        document.getElementById('T1').classList.toggle('btn-success');
    }
    if(id=="Bata"){
        document.getElementById('B1').classList.toggle('btn-success');
    }
    if(id=="Chip"){
        document.getElementById('C1').classList.toggle('btn-success');
    }
    if(id=="Memo"){
        document.getElementById('M1').classList.toggle('btn-success');
    }
    if(id=="imprimir"){
        document.getElementById('imprimir1').classList.toggle('btn-warning');
        document.getElementById('imprimir1').classList.toggle('btn-danger');
        (document.getElementById('imprimir').checked)? document.getElementById('imprimir1').innerHTML="IMPRIMIR" :document.getElementById('imprimir1').innerHTML="Sin Recibo";
    }
}

function chkCambia2(id,modo ) {
    if(id=="Tapa"){
        if(modo==1){
            //document.getElementById('T1').classList.remove('btn-info');
            document.getElementById('T1').classList.add('btn-success');
            document.getElementById('Tapa').checked=true;
        }else{
            document.getElementById('T1').classList.remove('btn-success');
            // document.getElementById('T1').classList.add('btn-info');
            document.getElementById('Tapa').checked=false;
        }
    }
    if(id=="Bata"){
        if(modo==1){
            document.getElementById('B1').classList.add('btn-success');
            document.getElementById('Bata').checked=true;
        }else{
            document.getElementById('B1').classList.remove('btn-success');
            document.getElementById('Bata').checked=false;
        }
    }
    if(id=="Memo"){
        if(modo==1){
            document.getElementById('M1').classList.add('btn-success');
            document.getElementById('Memo').checked=true;
        }else{
            document.getElementById('M1').classList.remove('btn-success');
            document.getElementById('Memo').checked=false;
        }
    }
    if(id=="Chip"){
        if(modo==1){
            document.getElementById('C1').classList.add('btn-success');
            document.getElementById('Chip').checked=true;
        }else{
            document.getElementById('C1').classList.remove('btn-success');
            document.getElementById('Chip').checked=false;
        }
    }
}

function Limpiar(){
    document.getElementById('ID').innerHTML="0";
    document.getElementById('NOrden').value="";
    document.getElementById('Cliente').value="";
    document.getElementById('Tel').value="";
    document.getElementById('Equipo').value="";
    document.getElementById('EMEI').value="";
    document.getElementById('Falla').value="";
    document.getElementById('RTecnico').value="";
    document.getElementById('Estado').selectedIndex="0";
    document.getElementById('Total').value="";
    document.getElementById('Sena').value="";
    document.getElementById('Restan').value="";
    chkCambia2('Tapa',0);
    chkCambia2('Bata',0);
    chkCambia2('Chip',0);
    chkCambia2('Memo',0);
    document.getElementById('FechaE1').innerHTML="";
    document.getElementById('FechaE2').innerHTML="";
    document.getElementById('FechaE3').innerHTML="";
}