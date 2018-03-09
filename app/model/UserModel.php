<?php

namespace App\Model;

use Tracy\Debugger;


class UserModel extends BaseModel
{


    /**
     * Metoda vrací seznam všech uživatelů
     */
    public function listUsers()
    {
        /** TODO */

        $rows = $database->fetchAll('SELECT * FROM `user`');

        return $rows;
    }

    /**
     * Metoda vrací uživatele se zadaným id, pokud neexistuje vrací NoDataFound.
     * @param int  $id
     */
    public function getUser($id)
    {
        /** TODO */
        $rows = $database->fetch('SELECT * FROM `user` WHERE `user.id  = ?`', $id);

    }

    /**
     * Metoda vrací vloží nového uživatele
     * @param array  $values
     * @return $id vloženého uživatele
     */
    public function insertUser($values)
    {
        /** TODO */
        $rows = $database->query('INSERT INTO `user` ?', ['id'
            , 'surname'
            , 'firstname'
            , 'registered'
            , 'is_admin' 
    ], ['surname' => $surname,
        'firstname' => $surname, 
        'registered' => $registered,
        'is_admin' => $auth]


         
    );
        var_dump($rows);
        $id = $database->getInsertId();

        return $rows;
    }

    /**
     * Metoda edituje uživatele, pokud neexistuje vrací NoDataFound.
     * @param array  $values
     */
    public function updateUser($id, $values)
    {
        /** TODO */

    }

    /**
     * Metoda odebere uživatele, pokud neexistuje vrací NoDataFound.
     * @param array  $values
     */
    public function deleteUser($id)
    {
        /** TODO */

    }
}