<?php

require_once("{$ROOT}{$DS}config{$DS}Conf.php");

class Model
{

    private static $pdo;

    public static function Init()
    {
        $host = Conf::getHostname();
        $dbname = Conf::getDatabase();
        $login = Conf::getLogin();
        $pass = Conf::getPassword();
        try {
            self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $login, $pass);
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
    }

    public static function getAll()
    {
        $SQL = "SELECT * FROM " . static::$table;
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->fetchAll();
    }

    public static function select($cle_primaire)
    {
        $sql = "SELECT * from " . static::$table . " WHERE " . static::$primary . "=:cle_primaire";
        $req_prep = self::$pdo->prepare($sql);
        $req_prep->bindParam(":cle_primaire", $cle_primaire);
        $req_prep->execute();
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        if ($req_prep->rowCount() == 0) {
            return null;
            die();
        } else {
            $rslt = $req_prep->fetch();
            return $rslt;
        }

    }

    /**************************detail************************ */

    public static function getRoomTab()
    {
        $SQL = "SELECT R.roomId, R.nameRoom FROM Rooms R, Offres o WHERE R.roomId = o.roomId;";
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_ASSOC);
        return $rep->fetchAll();
    }
    public static function getRoomBooking()
    {
        $SQL = "SELECT R.roomId, R.nameRoom FROM Rooms R, Bookings B WHERE R.roomId = B.roomId;";
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_ASSOC);
        return $rep->fetchAll();
    }
    public static function getAllRoom()
    {
        $SQL = "SELECT roomId, nameRoom FROM Rooms ;";
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_ASSOC);
        return $rep->fetchAll();
    }

    public static function RecheBookings($room, $Fname, $chekIn, $chekOut)
    {
        $SQL = ("SELECT * FROM Bookings B
                    JOIN Rooms R ON B.roomId = R.roomId
                    WHERE B.checkIn = '$chekIn'
                       OR B.checkOut = '$chekOut'
                       OR B.firstName = '$Fname'
                       OR R.nameRoom = '$room';
                    ");

        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->fetchAll();
    }


    public static function getAllNbBookings()
    {
        $SQL = ('SELECT * FROM Bookings;');
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    public static function getAllNbRooms()
    {
        $SQL = ('SELECT * FROM Rooms;');
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    public static function getNbOffres()
    {
        $SQL = ('SELECT * FROM Offres;');
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    public static function NbClients()
    {
        $SQL = ('SELECT * FROM Clients;');
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    public static function getConnect($user, $pass)
    {
        $SQL = ("SELECT * FROM Users WHERE userName='$user' AND password='$pass' AND accountStatus='ON'");
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    public static function getAllUser($user, $pass)
    {
        $SQL = ("SELECT * FROM Users WHERE userName='$user' AND password='$pass'");
        $rep = Model::$pdo->query($SQL);
        //$rep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
        return $rep->fetchObject();
    }

    public static function getUsersId($userName)
    {
        $SQL = ("SELECT * FROM Users WHERE userName='$userName'");
        $rep = Model::$pdo->query($SQL);
        return $rep->fetchObject();
    }


    public static function selectMDP($P)
    {
        $SQL = ("SELECT * FROM Users WHERE idUser='$P' ");
        $rep = Model::$pdo->query($SQL);
        return $rep->fetchObject();
    }


    /*
    public static function getAllNb()
    {
        $SQL = "SELECT * FROM " . static::$table;
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    public static function getAllNbPaye()
    {
        $SQL = ('SELECT * FROM Facture WHERE STATUS="paye"');
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    public static function getAllNbNonPaye()
    {
        $SQL = ('SELECT * FROM Facture WHERE STATUS="non paye"');
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    public static function getAllNbParPaye()
    {
        $SQL = ('SELECT * FROM Facture WHERE STATUS="partiellement paye"');
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    //
    public static function getAllDevi()
    {
        $SQL = ("SELECT sum(paied)as devi FROM Facture WHERE status='paye';");
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->fetchObject();
    }


    public static function RecheFacture($idf, $nomC, $date)
    {
        $SQL = ("SELECT * FROM Facture WHERE idf=$idf AND referencF='$nomC' AND date_emis='$date'");
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->fetchAll();
    }

    public static function RecheClient($idc, $nomC)
    {
        $SQL = ("SELECT * FROM client WHERE idc=$idc AND nom='$nomC'");
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->fetchAll();
    }

    public static function RecheProduit($reference, $description, $dateCreation)
    {
        $SQL = ("SELECT * FROM produit WHERE reference='$reference' AND description='$description' AND dateCreation='$dateCreation'");
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->fetchAll();
    }

    public static function RecheDevi($idD, $idcD, $date_emisD)
    {
        $SQL = ("SELECT * FROM Devi WHERE idD='$idD' AND idcD='$idcD' AND date_emisD='$date_emisD'");
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->fetchAll();
    }


    public static function RecheCommande($id_comm, $idc, $date)
    {
        $SQL = ("SELECT * FROM commande WHERE id_comm='$id_comm' AND idc='$idc' AND date_creation='$date'");
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->fetchAll();
    }

    public static function getConnect($user, $pass)
    {
        $SQL = ("SELECT * FROM utilisateur WHERE username='$user' AND password='$pass'");
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }

    public static function getAllUser($user, $pass)
    {
        $SQL = ("SELECT * FROM utilisateur WHERE username='$user' AND password='$pass'");
        $rep = Model::$pdo->query($SQL);
        //$rep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
        return $rep->fetchObject();
    }

    public static function selectP($P)
    {
        $SQL = ("SELECT * FROM utilisateur WHERE password='$P' ");
        $rep = Model::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
        return $rep->rowCount();
    }*/

    /************************************************************************ */


    public static function delete($cle_primaire)
    {
        $sql = "DELETE FROM " . static::$table . " WHERE " . static::$primary . "=:cle_primaire";
        $req_prep = Model::$pdo->prepare($sql);
        $req_prep->bindParam(":cle_primaire", $cle_primaire);
        $req_prep->execute();
    }

    public static function update($tab, $cle_primaire)
    {
        $sql = "UPDATE " . static::$table . " SET";
        foreach ($tab as $cle => $valeur) {
            $sql .= " " . $cle . "=:new" . $cle . ",";
        }
        $sql = rtrim($sql, ",");
        $sql .= " WHERE " . static::$primary . "=:oldid;";

        $req_prep = self::$pdo->prepare($sql);
        $values = array();

        foreach ($tab as $cle => $valeur) {
            $values[":new" . $cle] = $valeur;
        }
        $values[":oldid"] = $cle_primaire;
        $req_prep->execute($values);
        $obj = self::select($tab[static::$primary]);
        return $obj;
    }


    public static function insert($tab)
    {
        $sql = "INSERT INTO " . static::$table . " VALUES(";
        foreach ($tab as $cle => $valeur) {
            $sql .= " :" . $cle . ",";
        }
        $sql = rtrim($sql, ",");
        $sql .= ");";
        $req_prep = Model::$pdo->prepare($sql);
        $values = array();
        foreach ($tab as $cle => $valeur)
            $values[":" . $cle] = $valeur;
        $req_prep->execute($values);
    }

}//class
Model::Init();