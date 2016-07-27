<? 
header('Content-Type: text/html; charset=UTF-8');
include("conectar.php");
?>
<html>
<head>
  <title>Sistema de Gesti&oacute;n</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <script language="JavaScript" src="menu/JSCookMenu.js"></script>
  <link rel="stylesheet" href="menu/theme.css" type="text/css">
  <script language="JavaScript" src="menu/theme.js"></script>
  <script language="JavaScript">
<!--
var MenuPrincipal = [
	[null,'Inicio','central2.php','principal','Inicio'],
	[null,'Articulos',null,null,'Artículos',
		[null,'Nuevo','./articulos/nuevo_articulo.php','principal','Nuevo'],
		[null,'Buscar','./articulos/index.php','principal','Buscar'],	
		[null,'Nueva Categoria','./familias/nueva_familia.php','principal','Nuevo Categoria'],
		[null,'Buscar Categoria','./familias/index.php','principal','Buscar Categoria'],			
	],
	[null,'Clientes',null,null,'Clientes',
		[null,'Nuevo','./clientes/nuevo_cliente.php','principal','Nuevo'],
		[null,'Buscar','./clientes/index.php','principal','Buscar'],
		],
	[null,'Proveedores',null, null,'Proveedores',
		[null,'Nuevo','./proveedores/nuevo_proveedor.php','principal','Nuevo'],
		[null,'Buscar','./proveedores/index.php','principal','Buscar'],
		[null,'Compra','./facturas_proveedores/nueva_factura.php','principal','Compra'],		
		[null,'Buscar Compra','./facturas_proveedores/index.php','principal','Buscar Compra'],
	],
	[null,'Facturacion',null,null,'Facturación',
		[null,'Nueva Factura','./facturas_clientes/nueva_factura.php','principal','Nueva Factura'],
		[null,'Buscar Factura','./facturas_clientes/index.php','principal','Buscar Factura'],
		[null,'Presupuesto',null,null,'Presupuesto',
		[null,'Nuevo Presupuesto','./presupuesto/nueva_factura.php','principal','Nuevo Presupuesto'],
		[null,'Buscar Presupuesto','./presupuesto/index.php','principal','Buscar Presupuesto'],
		],
		[null,'Remito',null,null,'Remito',
		[null,'Nuevo Remito','./remito/nueva_factura.php','principal','Nuevo Remito'],
		[null,'Buscar Remito','./remito/index.php','principal','Buscar Remito'],
		],
		[null,'Cierre Z','./facturas_clientes/cierrez.php','principal','Cierre Z'],
		],			
	[null,'Tesoreria',null,null,'Tesoreria',
		[null,'Cobros','./cobros/index.php','principal','Cobros'],
		[null,'Pagos','./pagos/index.php','principal','Pagos'],
		[null,'Bancos','./entidades/index.php','principal','Bancos'],
		[null,'Cheques','./cheque/index.php','principal','Cheques'],
		[null,'Tarjetas de Credito','./tarjetas/index.php','principal','Tarjetas de Credito'],
		[null,'Cuenta Corriente','./cobros/pagoacuenta.php','principal','Cuenta Corriente'],		
	],
	[null,'Informes',null,null,'Informes',
		[null,'Stock','./fpdf/ges_articulos.php','principal','Stock'],
		[null,'Proveedores',null,null,'Proveedores',
		[null,'Facturas por Proveedores','./fpdf/ges_proveedores.php','principal','Facturas por Proveedores'],
		[null,'Ranking de Compras','./fpdf/ges_proveedores_ranking.php','principal','Ranking de Compras'],	
		],
		[null,'Clientes',null,null,'Clientes',
		[null,'Facturas por Clientes','./fpdf/ges_clientes.php','principal','Facturas por Clientes'],
		[null,'Ranking de Ventas','./fpdf/ges_clientes_ranking.php','principal','Ranking de Ventas'],
		],
		[null,'Libro Diario','./fpdf/ges_librodiario.php','principal','Libro Diario'],
		[null,'Libro IVA Compras','./fpdf/ges_ivacompras.php','principal','Libro IVA Compras'],
		[null,'Libro IVA Ventas','./fpdf/ges_ivaventas.php','principal','Libro IVA Ventas'],
		[null,'Movimientos de Caja','./fpdf/ges_movimientos.php','principal','Movimientos de Caja'],
	],
	[null,'BackUp',null,null,'Ordenes de Trabajo',
		[null,'Crear','./backup/hacerbak.php','principal','Crear'],
		[null,'Restaurar','./backup/restaurarbak.php','principal','Restaurar'],	
	],
	[null,'Salir','logout.php','','Salir'],
];

--></script>
  <style type="text/css">
  body { background-color: rgb(255, 255,255);
    background-image: url(images/superior.png);
    background-repeat: no-repeat;
	margin: 0px;
    }

  #MenuAplicacion { margin-left: 10px;
    margin-top: 0px;
    }


  </style>
</head>

<body>
<div id="MenuAplicacion" align="center"></div>
<script language="JavaScript">
<!--
	cmDraw ('MenuAplicacion', MenuPrincipal, 'hbr', cmThemeGray, 'ThemeGray');
-->
function keyDown(e) {
        	if (abilitato==3) {
		//var ns4=1;
		var nKey=e.which; var ieKey=0;
		var realkey = String.fromCharCode(e.which);
		strin="Codice tecla in Netscape: "+nKey+". Premuto tecla "+realkey
		}
        	if (abilitato==4) {
		//var ns4=0;
		var ieKey=event.keyCode; var nKey=0;
		var realkey = String.fromCharCode(event.keyCode);
		strin="Codice tecla in Explorer: " + ieKey+". Premuto tecla "+realkey
		}
           	alert(strin)
	}
document.onkeydown = keyDown

</script>
<iframe src="central2.php" name="principal" title="principal" width="100%" height="1050px" frameborder=0 scrolling="no" style="margin-left: 0px; margin-right: 0px; margin-top: 2px; margin-bottom: 0px;"></iframe>
</body>
</html>