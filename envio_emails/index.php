<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Envio emails</title>
        <style>
            table{
                margin:auto;
                left:0;
                background-color: #AAA;
                border: 1px solid black;
                border-radius: 5px;
            }
        </style>
    </head>

    <body>
        <form name="formulario_contacto" method="post" action="enviar_mail.php">
            <table width="500px">
                <tr>
                    <td>
                        <label for="nombre">Nombre: *</label>
                    </td>
                    <td>
                        <input type="text" name="nombre" maxlength="50" size="25">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="apellido">Apellido: *</label>
                    </td>
                    <td>
                        <input type="text" name="apellido" maxlength="50" size="25">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Dirección de E-mail: *</label>
                    </td>
                    <td>
                        <input type="text" name="email" maxlength="80" size="35">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tfno">Número de teléfono:</labe>
                    </td>
                    <td>
                        <input type="text" name="tfno" maxlength="25" size="15">
                    </td>
                </tr>
                <tr>
                    <td>Asunto:</td>
                    <td>
                        <label for="asunto"></label>
                        <input type="text" name="asunto" id="asunto">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="comments">Comentarios: *</label>
                    </td>
                    <td>
                        <textarea name="comentarios" maxlength="500" cols="30" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="Enviar">
                </td>
                </tr>
            </table>
        </form>
    </body>
</html>