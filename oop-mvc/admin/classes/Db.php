<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 27.01.2020
 * Time: 22:30
 */
namespace classes;



class Db
{
    protected $dbn;
    protected $sql;
    public $data;
    protected $qst;

    public function __construct ()
    {
        include (__DIR__.'\..\config\DB.php');
        $this->dbn = new \PDO( $dsn, 'root' );
    }

    public function execute( $sql ) {
        $this->qst = $this->dbn -> query ( $sql );
        $result = $this->qst->fetchALL(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function query( $sql, $data ) {

        $stmt = $this->dbn->prepare($sql);
        $stmt->execute( $data );

        return ;

    }



}