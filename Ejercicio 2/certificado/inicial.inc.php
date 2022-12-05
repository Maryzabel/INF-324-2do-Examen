<!DOCTYPE html>
<html>
<head>
<title>Responsive Menu with CSS3</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />

</head>
<body>
    <br>
    <h1 align="center">SOLICITUD DE CERTIFICADO DE<br> CONCLUSION DE ESTUDIOS</h1>
    <br>
    <div class="container">
        <div style="padding-left:305px;">        
            <table>
                <tr>
                    <th class="c1">Cedula de identidad:</th>
                    <th class="c2"><input type="text" name="ci"> </th>
                </tr>
                <tr>
                    <td class="c1">Nombres:</td>
                    <td class="c2"><input type="text" name="nombre"> </td>
                </tr>
                <tr>
                    <td class="c1">Apellido Paterno:</td>
                    <td class="c2"><input type="text" name="apat"> </td>
                </tr>
                <tr>
                    <td class="c1">Apellido materno:</td>
                    <td class="c2"><input type="text" name="amat"> </td>
                </tr>
                <tr>
                    <td class="c1">Carta de solicitud:</td>
                    <td class="c2">
                        <select name="carta" style="height: 25px; width: 178px;">    
                            <option value="Si">Si</option>    
                            <option value="No">No</option>    
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td class="c1">Record academico:</td>
                    <td class="c2">
                        <select name="record" style="height: 25px; width: 178px;">    
                            <option value="Si">Si</option>    
                        <option value="No">No</option>    
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td class="c1">Pensum academico:</td>
                    <td class="c2">
                        <select name="pensum" style="height: 25px; width: 178px;">    
                            <option value="Si">Si</option>    
                            <option value="No">No</option>    
                        </select> 
                    </td>
                </tr>
            </table> 
        </div>  
    </div>
</body>
</html>