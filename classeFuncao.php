    <?php
    function conversorFah()
    {
        require_once('atividade1.php');
        $fahCel = $_GET['fah'] ?? null;
        $fahCel = ((($fahCel - 32) * 5) / 9);

        return $fahCel = round($fahCel, 2);
    }

    function conversorDol()
    {
        $dolar = 1.81;

        require_once('atividade2.php');
        $dolReal = $_GET['dol'] ?? null;
        $real = $dolReal * $dolar;

        return $real = round($real, 2);
    }

    function pesoIdealChecar()
    {
        $pesoIdeal = 0;

        require_once('atividade3.php');
        $pegarValor1 = $_GET['genero'] ?? null;
        $pegarValor2 = $_GET['altura'] ?? null;
        if ($pegarValor1 == 2) {
            $pesoIdeal = (72.2 * $pegarValor2) - 58;
        } elseif ($pegarValor1 == 3) {
            $pesoIdeal = (62.1 * $pegarValor2) - 44.7;
        }

        return $pesoIdeal = round($pesoIdeal, 2);
    }
    ?>