<html>
 <head>
  <title>Hilfetool Address-Meldungen</title>
  </head>
  <body>
    <?php

    $csvStr = "";

    for ($i = 0; $i < count($groups); $i++)
    {
      if($groups[$i]['found'] == "true")
      {
        $csvStr .= "<h4>".$groups[$i]['email']."</h4>";
        $csvStr .= "<p>".$groups[$i]['persons']."</p>";
      }
      else {
        $csvStr .= "<i>".$groups[$i]['error']."</i>";
      }
    }

    echo $csvStr;
    //TODO
    // Mailgun API
    ?>
  </body>
</html>
