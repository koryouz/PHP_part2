<?php $magnitude = 4;?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>PHP P2E4</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="row">
          <p><?php switch ($magnitude) {
            case 1:
            echo 'Micro-séisme impossible à ressentir.';
            break;
            case 2:
            echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
            break;
            case 3:
            echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
            break;
            case 4:
            echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
            break;
            case 5:
            echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
            break;
            case 6:
            echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
            break;
            case 7:
            echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
            break;
            case 8:
            echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
            break;
            case 9:
            echo 'Séisme capable de tout détruire sur une très vaste zone.';
            break;
          }?>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
