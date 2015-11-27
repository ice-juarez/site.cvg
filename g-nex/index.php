<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title><!--<script language="JavaScript" src ="/js/pregval.js"> </script>-->
<style type="text/css">@import url(estilos.css);</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" onsubmit="return Validar(this);">
<table class="nombre">
<!-- [1] Usuario-->
                <tr>
                    <td>Usuario:</td>
                    <td>
                      <input class="texto" name="nick" type="text" id="nick" size="20" maxlength="20" onkeydown="checkout(this)" onkeypress="return blk(event);" onpaste="return false"/>
                    </td>
               </tr>
               <!--E.Us-->
               <tr><td></td><td><div id="mensaje01" class="error"> </div></td></tr>
               <!--/E.Us-->
<!--/Usuario-->

<!-- [2] Contraseña-->
               <tr>
                   <td>Contraseña:</td>
                   <td>
					<input id="pasword" class="texto"  name="pasword" type="password" size="22" onkeydown="checkout(this)" onkeypress="return blk(event);" onpaste="return false"/>
                    </td>
               </tr>
               <!--E.Cnt-->
               <tr><td></td><td><div id="mensaje02" class="error"> </div></td></tr>
               <!--E.Cnt-->
<!--/Contraseña-->

<!-- [3] Conf.Cn-->
              <tr>
                <td>Confirmación de contraseña:</td>
                <td>
                  <input id="pasword2" class="texto"  name="pasword2" type="password" size="22" onkeydown="checkout(this)" onkeypress="return blk(event);" onpaste="return false"/>
                </td>
              </tr>
              <!--E.CC--> 
                <tr><td></td><td><div id="mensaje03" class="error"> </div></td></tr>
              <!--E.CC-->
<!--/Conf.Cn-->

<!-- [4] Correo-->
			  <tr>
                    <td>Correo electrónico:</td>
                    <td>
                      <input id="correo" class="texto"  name="correo" type="email" size="22" onkeydown="checkout(this)" onpaste="return false"/>
                    </td>
                </tr>
                <!--E.Cr--> 
                <tr><td></td><td><div id="mensaje04" class="error"> </div></td></tr>
              <!--E.Cr-->
<!--/Correo-->

<!-- [5] Conf.Co-->
			  <tr>
                    <td>Confirmación del correo:</td>
                    <td>
                      <input id="correo02" class="texto"  name="correo02" type="email" size="22" onkeydown="checkout(this)" onpaste="return false"/>
                    </td>
                </tr>
                <!--E.CCr--> 
                <tr><td></td><td><div id="mensaje05" class="error"> </div></td></tr>
              <!--E.CCr-->
<!--/Conf.Co-->

<!-- [6] Nombre-->
                <tr>
                    <td>Nombre:</td>
                    <td>
                        <input  name="nombre" id="nombre" class="texto" type="text" maxlength="20" size="17" onkeydown="checkout(this)" onkeypress="return blk(event);" onpaste="return false"/>
                    </td>
                </tr>
                <!--E.CCr--> 
                <tr><td></td><td><div id="mensaje06" class="error"> </div></td></tr>
                <!--E.CCr-->
<!--/Nombre-->

<!-- [7] Tel-->
                <tr>
                    <td>Teléfono:</td>
                    <td >
                        <input  id="cel" class="texto" name="cel" type="text" size="20" maxlength="10" placeholder="Últimos 10 dígitos..." />
                    </td>
                </tr>
                <!--E.Tel--> 
                <tr><td></td><td><div id="mensaje07" class="error"> </div></td></tr>
                <!--E.Tel-->
<!--/Tel-->

<!-- [8] CP-->
                <tr>
                    <td>Código Postal:</td>
                    <td >
                        <input  id="cp" class="texto" name="cp" type="text" size="20" maxlength="5"/>
                    </td>
                </tr>
                <!--E.Tel--> 
                <tr><td></td><td><div id="mensaje08" class="error"> </div></td></tr>
                <!--E.Tel-->
<!--/CP-->

<!-- [9] Tipo.Us-->                
                <tr>
                        <td class="formulario">Tipo de Usuario:</td>
                        <td>
                            <select name="tipo" onkeydown="checkout(this)" onkeypress="return blk(event);" onpaste="return false">
                              <option value="none"> Opciones...</option>
                              <option value="01"> Administrativo </option>
                              <option value="02"> Posgrado </option>
                              <option value="03"> Docente </option>
                              <option value="05"> Nivel Superior</option>
                              <option value="06"> CELEX </option>
                              <option value="07"> Servicios Diversos </option>
                              <option value="04"> Honorarios </option>
                              <option value="08"> CAE </option>
                            </select>
                        </td>
                      </tr>
                <!--E.Tipo--> 
                <tr><td></td><td><div id="mensaje09" class="error"> </div></td></tr>
                <!--E.Tipo-->
<!--/Tipo.Us-->

<!-- [10] Categ-->                
                <tr>
                    <td class="formulario">Categoría:</td>
                    <td>
                        <select name="categ" onkeydown="checkout(this)" onkeypress="return blk(event);" onpaste="return false">
                          <option value="none"> Opciones...</option>
                          <option value="01"> A </option>
                          <option value="02"> B </option>
                          <option value="03"> C </option>
                          <option value="05"> D </option>
                          <option value="06"> E </option>                          
                        </select>
                    </td>
                </tr>
                <!--E.Ctg--> 
                <tr><td></td><td><div id="mensaje10" class="error"> </div></td></tr>
                <!--E.Ctg-->
<!--/Categ-->

<!-- [11] Cup-->
                <tr>
                    <td>Código:</td>
                    <td >
                        <input  id="cup" class="texto" name="cup" type="text" size="20" maxlength="10"/>
                    </td>
                </tr>
                <!--E.Cup--> 
                <tr><td></td><td><div id="mensaje11" class="error"> </div></td></tr>
                <!--E.Cup-->
<!--/Cup-->
                      <tr>
                      	<td colspan="2" align="center">
                        <input type="submit" name="Enviar" id="Enviar" value="Ingresar datos">
                        </td>
</table>
</form>
</body>
</html>