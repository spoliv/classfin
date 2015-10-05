<?php

class DBConnection
{

    static public function config()
    {
        return include __DIR__ . '/../config.php';
    }

    public function query($sql, $id, $values)
    {
        $config = static::config();
        $dsn = 'mysql:dbname' . '=' . $config['db']['dbname'] . ';' . 'host' . '=' . $config['db']['host'];
        $dbh = new PDO($dsn, $config['db']['user'], $config['db']['password']);
        $sth = $dbh->prepare($sql);

        if($values!==0 and $id==0){
            $sth->execute($values);
            $this->id = $dbh->lastInsertId();
            die('STOP');
        }
        elseif($id!==0 and $values==0){
            $sth->execute([':id'=>$id]);
            return $sth->fetch();

        } elseif($id==0 and $values==0) {
            $sth->execute();
            return $sth->fetchAll();
        }elseif($id!==0 and $values!==0){
            $sth->execute([':id'=>$id]+$values);
            die('STOP');
        }

    }
}