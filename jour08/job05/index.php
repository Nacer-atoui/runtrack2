
<?php 
    session_start();

    function win(array $board){
        $wins = [
            [0,1,2], [3,4,5], [6,7,8],
            [0,3,6], [1,4,7], [2,5,8],
            [0,4,8], [2,4,6]
        ];
        foreach ($wins as $combo) {
            list($a,$b,$c) = $combo;
            if ($board[$a] !== '' && $board[$a] === $board[$b] && $board[$b] === $board[$c]){
                return $board[$a];
            }
        }
        return false;
    }

    if (!isset($_SESSION['board'])) {
        $_SESSION['board'] = array_fill(0, 9, '');
        $_SESSION['turn'] = 'X';
        $_SESSION['message'] = '';
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['move'])) {
        $i = intval($_POST['move']);
        
        if ($i >= 0 && $i < 9 && $_SESSION['board'][$i] === '' && $_SESSION['message'] === '') {
            $_SESSION['board'][$i] = $_SESSION['turn'];
            
        
        
        $winner = win($_SESSION['board']);
        if ($winner !== false) {
            $_SESSION['message'] = "Le joueur $winner a gagné !";
        } else if (!in_array('', $_SESSION['board'], true)) {
            $_SESSION['message'] = "Match nul !";
        } else {
            $_SESSION['turn'] = ($_SESSION['turn'] === 'X') ? 'O' : 'X';
        }
    }
    }

    if (isset($_POST['reset'])) {
        session_unset();
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="morpion.css">
    <title>Morpion</title>
</head>
<body>
    <h1>Le Morpion...</h1>

    <?php if ($_SESSION['message'] !== ''): ?>
        <span class="msg"><p class="message"><?= $_SESSION['message'] ?></p></span>
    <?php endif; ?>

    <form method="post">
        <table class="morpion">
            <?php for ($row = 0; $row < 3; $row++): ?>
                <tr>
                    <?php for ($col = 0; $col < 3; $col++): ?>
                     <?php
                     $i = $row * 3 + $col;
                     $val = $_SESSION['board'][$i];
                     ?>
                     <td>
                        <button class="btn_jeu" type="submit" name="move" value="<?= $i ?>"
                        <?= $val !== '' ? 'disabled' : '' ?> > <span class="jeu"><?= htmlspecialchars($val) ?></span></button>
                     </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
            </table>
        <button class="btn_reset" type="submit" name="reset" value="1">Reset</button>
    </form>

    

    <!-- <form method="post">
    <table class="table_morpion">
    <tr>
        <th>
            <button class="btn_jeu" type="submit" name="move" value="0"></button>
        </th>
        <th>
            <button class="btn_jeu" type="submit" name="move" value="1"></button>
        </th>
        <th>
            <button class="btn_jeu" type="submit" name="move" value="2"></button>
        </th>
    </tr>
    <tr>
        <td>
            <button class="btn_jeu" type="submit" name="move" value="3"></button>
        </td>
        <td>
            <button class="btn_jeu" type="submit" name="move" value="4"></button>
        </td>
        <td>
            <button class="btn_jeu" type="submit" name="move" value="5"></button>
        </td>
    </tr>
    <tr>
        <td>
            <button class="btn_jeu" type="submit" name="move" value="6"></button>
        </td>
        <td>
            <button class="btn_jeu" type="submit" name="move" value="7"></button>
        </td>
        <td>
            <button class="btn_jeu" type="submit" name="move" value="8"></button>
        </td>
    </tr>
    </table>
    <button class="btn_reset" type="submit" name="reset" value="1">Reset</button>
    </form> -->
</body>
</html>