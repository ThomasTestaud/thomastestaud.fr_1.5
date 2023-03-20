<?php

class Main {
    private function connect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=u960324483_main', 'u960324483_totolasticot', 'R$|ZRX9=d', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]);
            // echo "connect";
            return $db;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public function getList(): array
    {
        $db = $this->connect();
        $query = $db->prepare(
            'SELECT word, guess FROM `list`'
        );
        $query->execute();
        $list = $query->fetchAll();
        return $list;
    }
    
    public function addItem(): void
    {
        $db = $this->connect();
        $query = $db->prepare('INSERT INTO `list`(`word`, `guess`, `list_id`) VALUES (:word, :guess, 1)');
        $query->execute([
            'word' => $_POST['newWord'],
            'guess' => $_POST['newGuess']
        ]);
    }
        
    public function deleteItem(): void
    {
        $db = $this->connect();
        $query = $db->prepare('DELETE FROM `list` WHERE word = "'.$_SESSION['word'].'" AND guess = "'.$_SESSION['guess'].'"');
        $query->execute();
    }
}
