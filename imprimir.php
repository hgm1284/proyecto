<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php

session_start();
include_once('../../../../conf/conf.php');
require_once(ENLACE_SERVIDOR.'mod_facturacion/class/factura.class.php');
require_once(ENLACE_SERVIDOR.'mod_terceros/class/terceros.class.php');
require_once(ENLACE_SERVIDOR.'mod_configuracion/class/configuracion_class.php');


 $factura2	=	 new Factura($dbh);
 $factura2->fetch($_GET['facid']);
 $tercero    =    new Terceros($dbh);
 $conf       =    new configuracion($dbh);
 $tr="";



                 $sql="Select
                  fd.label as nombre     ,
                  fd.cantidad            ,
                  fd.subtotal            ,
                  d.label

                  from fi_facturas_detalle fd
                  left join fi_productos p on p.rowid = fd.fk_producto
                  left join diccionario_marca  d on d.rowid = p.diccionario_3

                  where fd.fk_factura = ? ";
                 $db=$dbh->prepare($sql);
                 $db->bindValue(1,$_GET['facid']  ,PDO::PARAM_INT);
                 $db->execute();




while($obj=$db->fetch(PDO::FETCH_ASSOC)){


if ($obj['tipo_impuesto'] > 0)
 { $obj['impuestot']='<span class="label label-warning">Impuesto '.$obj['tipo_impuesto'].'</span>';}
                   else { $obj['impuestot']='<span class="label label-primary">Sin Impuesto</span>';}

//-------------------
$subtotal +=$obj['subtotal'];
$impuesto +=$obj['impuesto'];
$total    +=$obj['total'];



 $tr.="<tr>
  <td colspan='2' ><b>".$obj['cantidad']."</b> </td>
  <td colspan='2' ><b> x ".$obj['nombre']."</b></td>
  <td colspan='2' ><b>".$obj['label']."</b> </td>
  </tr>
  <tr><td colspan='2' >".numero($obj['subtotal'])."</td>
  </tr>";




                                    }// fin del While---




?>


<html >
<head>
<style>

@page {
  size: auto;/* es el valor por defecto */
  margin: 0%;
}
 .titulo{ font-size:6mm; }
 .subtitulo{ font-size:3mm; }

 p {  }
 @page :first {

}

</style>

</head>
<body >
<p style="margin-left:10%"> <strong style="font-size:5mm;">EL CEVICHITO </strong> <br>
<strong><p style="margin-right:10%"> 75 metros norte del Casino de Liberia </p></strong><br>
Ced. 5-0326-0318 <br>
Teléfono: 8751-1931<br>
 Liberia, Guanacaste, C.R<br>
 <br>
<?php   $tercero->fetch($factura2->tercero);
            echo $tercero->nombre." ".$tercero->apellidos ;
                ?><br>
 <strong><?php  echo "Factura  ". $factura2->referencia;  ?> </strong><br>

 <strong><?php


if ($factura2->estado==3){ echo "Factura <b><ins> NULA </ins></b>";}
      else { echo  ($factura2->estado_pagada==0)? 'Factura Pendiente':'Factura Pagada'; } ?> </strong><br>


Fecha <?php  echo date('d-m-Y',strtotime($factura2->fecha));  ?>


<?php
/***********************************************************************/


if ($conf->configuracion['mostrar_hora_ticket']){ echo '<br>Hora  '. date('H:i',strtotime($factura2->fecha_creacion_server)); }



/***********************************************************************/

?>





<hr>
</p>

Cant.  /  Descrip.  /   Valor
<hr>
<table  border="0" width="230mm">
<?php echo $tr; ?>
</table>

<hr>
 <?php if ($factura2->estado==3){ echo "Factura <b><ins> NULA </ins></b>";}  ?>
<br>
<table  border="0" width="230mm">
<tr><td> </td><td align="right">subtotal <?php echo numero($factura2->subtotal); ?></td></tr>
<tr><td> </td><td align="right">Impuesto <?php echo numero($factura2->impuesto); ?></td></tr>
<tr><td></td><td align="right" ><strong class="font-size:7mm">Total  <?php echo numero($factura2->total); ?></strong></td></tr>
<tr><Td></td><Td></td><tr>

<?php
/***********************************************************************/


if ($conf->mostrar_forma_pago_ticket and ($factura2->pagado > 0 )){

              $sql="select
              dp.label as forma ,
              p.monto
              from fi_facturas_pagos p
              left join diccionario_formas_pago dp on dp.rowid = p.forma_pago

              where p.fk_factura = ".$factura2->id." ";

              $db=$dbh->prepare($sql);
              $db->execute();
              echo '<tr><td colspan="2" align="left">Pago Recibido</td></tr>';

              while($pagos=$db->fetch(PDO::FETCH_ASSOC)){

              echo '<tr><td>'.$pagos['forma'].'</td><td  align="right" >'.numero($pagos['monto']).'</td></tr>';

              }


 }



/***********************************************************************/

?>

</table>
<p>
Autorizado mediante oficio numero 11-97 <br> del dia 01 Octubre de 1997 De D.G.T.D

</p>
<br>
</BODY>
</html>


<?php if  ($_GET['orden']=="imprimir") { ?>
   <script >
     window.print();
   </script>
<?php }  ?>
