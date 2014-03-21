<?php
/**
 * Description of Db
 *
 * @author Dorian
 */
class My_Db
{

    /**
     * Crée et retourne une instance de PDO (objet de connexion à la base de données)
     * @return \PDO
     */
    static function getDb()
    {
        // Définit les paramètres de la base de données
        $dsn        = 'mysql:dbname=megacasting;host=127.0.0.1';
        $user_name  = 'root';
        $user_pwd   = '';
        // Crée un nouvel objet PDO (classe qui permet de gérer la base de données)
        $oDb = new PDO($dsn, $user_name, $user_pwd);

        return $oDb;
    }

}
