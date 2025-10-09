<?php 
class User {

    private $id;
    public $login;
    public $email;
    public $firstname;
    public $lastname;
    public $password;
    public $conn;

    //initialisation de l'objet / connexion à la base de données.
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "classes");

        if ($this->conn->connect_error) {
            die("Erreur de connexion : " . $this->conn->connect_error);
        }
    }

    //enregistrement et sécurisation des données utilisateurs, enregistrement en base et d'une copie locale dans l'objet
    public function create($login, $email, $firstname, $lastname, $password) {
        
        $login = $this->conn->real_escape_string($login);
        $email = $this->conn->real_escape_string($email);
        $firstname = $this->conn->real_escape_string($firstname);
        $lastname = $this->conn->real_escape_string($lastname);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $this->firstname = $firstname;
        $this->login = $login;
        $this->lastname = $lastname;

        $sql = "INSERT INTO utilisateurs (login, email, firstname, lastname, password)
        VALUES ('$login', '$email', '$firstname', '$lastname', '$password')";

        if ($this->conn->query($sql) === TRUE) {
            $this->id = $this->conn->insert_id;
            echo "Nouvel utilisateur créé avec succès ! <br/>";
            return $this->read($this->id);
           
        } else {
            echo "erreur : " . $this->conn->error;
        }
    }


    public function read($id) {
        $id = intval($id);
        $sql = "SELECT * FROM utilisateurs WHERE id = $id";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $this->id = $data['id'];
            $this->login = $data['login'];
            $this->email = $data['email'];
            $this->firstname = $data['firstname'];
            $this->lastname = $data['lastname'];
            $this->password = $data['password'];
            return $data;       
        } else {
            echo "Aucun utilisateur trouvé";
            return false;
        }
    }


    public function register($login, $email, $firstname, $lastname, $password) {
        if (empty($login) || empty($email) || empty($firstname) || empty($lastname) || empty($password)) {
            echo "⚠️ Tous les champs doivent être remplis.";
            return false;
        }

        $login = $this->conn->real_escape_string($login);
        $email = $this->conn->real_escape_string($email);

        $checkSql = "SELECT * FROM utilisateurs WHERE login = '$login' OR email = '$email'";
        $result = $this->conn->query($checkSql);

        if ($result->num_rows > 0) {
            echo "⚠️ Ce login ou cet email existe déjà.";
            return false;
        } else {
            return $this->create($login, $email, $firstname, $lastname, $password);
        }
    }



}

//     public function getAllInfos(){
//             return [
//                 'login' => $this->login,
//                 'email' => $this->email,
//                 'firstname' => $this->firstname,
//                 'lastname' => $this->lastname,
//             ];
        
//     }

// }

$data = [];

if (isset($_POST['submit'])) {
    $user = new User();
    $data = $user->register(
        $_POST['login'] ?? '',
        $_POST['email'] ?? '',
        $_POST['firstname'] ?? '',
        $_POST['lastname'] ?? '',
        $_POST['password']?? ''
    );

    
  
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire classes</title>
</head>
<body>
    
    <form method="POST" action="">
        <input type="text" name="login" placeholder="Login"> <br/><br/>
        <input type="email" name="email" placeholder="Email"><br/><br/>
        <input type="text" name="firstname"     placeholder="Prénom"><br/><br/>
        <input type="text" name="lastname" placeholder="Nom"><br/><br/>
        <input type="password" name="password"  placeholder="Mot de passe"><br/><br/>
        <button type="submit" name="submit">Créer</button>
    </form>

        <?php if (!empty($data)) : ?>
    <h2>Informations de l'utilisateur</h2>
    <p><strong>Login :</strong> <?= htmlspecialchars($data['login']) ?></p>
    <p><strong>Email :</strong> <?= htmlspecialchars($data['email']) ?></p>
    <p><strong>Prénom :</strong> <?= htmlspecialchars($data['firstname']) ?></p>
    <p><strong>Nom :</strong> <?= htmlspecialchars($data['lastname']) ?></p>
<?php endif; ?>


</body>
</html>