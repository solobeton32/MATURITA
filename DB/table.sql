
database 'agenzia';

 $sql = "CREATE TABLE Clients(
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(70) NOT NULL,
    oggetto VARCHAR(255) NOT NULL,
    messaggio VARCHAR(255) NOT NULL
    )";
                
    $dbco->exec($sql);
    echo 'Table creato !';

$sql1 = "CREATE TABLE offerte(
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    citta VARCHAR(255) NOT NULL,
    gironi VARCHAR(70) NOT NULL,
    notte VARCHAR(255) NOT NULL,
    immagini VARCHAR(255) NOT NULL,
    prezzo VARCHAR(255) NOT NULL
    )";
                
    $dbco->exec($sql1);
    echo 'Table creato !';

$sql2 = "CREATE TABLE registrazione(
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    password VARCHAR(70) NOT NULL
    )";
                
    $dbco->exec($sql2);
    echo 'Table creato!';
    
                
                
            