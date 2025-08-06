<html>
<head>

    <?php

if (isset($_POST['style'])){
    $style1 = "style1.css";
    $style2 = "style2.css";
    $style3 = "style3.css";
    
    $styleSelect = $_POST['style'];
    
    if ($styleSelect === $style1){
        echo "<link rel='stylesheet' href='" . $style1 . "'>";
    }
    elseif ($styleSelect === $style2) {
        echo "<link rel='stylesheet' href='" . $style2 . "'>";
    }
    elseif ($styleSelect === $style3) {
        echo "<link rel='stylesheet' href='" . $style3 . "'>";
    }
}

?>
</head>    
<body>
<form method="POST">
<label for="style">Choisis un style :</label>
<br/>
<select name="style" id="style">
    <option value="style1.css">1er style </option>
    <option value="style2.css">2ème style </option>
    <option value="style3.css">3ème style </option>
    </select>
    <br/><br/>
    <button type="submit">Valider</button>
    </form>
    </body>
</html>