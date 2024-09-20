<html>
  <head>
    <title>Cálculo de interés</title>
  </head>
  <body>
    <center>
      <h1>Cálculo de interés exacto y ordinario</h1>
      <form method="GET" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <table>
          <thead>
          </thead>
          <tbody>
            <tr>
              <td>Monto</td>
              <td><input type="text" name="monto" id="monto" autofocus autocomplete="off"></td>
            </tr>
            <tr>
              <td>Interés</td>
              <td><input type="text" name="interes" id="interes" autocomplete="off"></td>
            </tr>
            <tr>
              <td>Tiempo en días</td>
              <td><input type="text" name="dias" id="dias" autocomplete="off"></td>
            </tr>
            <tr>
              <td></td>
              <td align="center"><input type="submit"></td>
            </tr>
          </tbody>
        </table>
      </form>
      <?php
        $monto=$_GET["monto"];
        $interes=$_GET["interes"];
        $dias=$_GET["dias"];
        $exacto = number_format((($monto * ($interes/100) * $dias)/365),5,".",",");
        $simple = number_format((($monto * ($interes/100) * $dias)/360),5,".",",");
      ?>
      <table>
        <thead>

        </thead>
        <tbody>
          <tr>
            <td>El interés exacto es:</td>
            <td><?php echo $exacto;?></td>
          </tr>
          <tr>
            <td>El interés simple es:</td>
            <td><?php echo $simple;?></td>
          </tr>
        </tbody>
      </table>
    </center> 
  </body>
</html>
