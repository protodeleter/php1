<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 24.01.2020
 * Time: 18:51
 */
namespace classes;

class DB
{
    protected $dbn;
    protected $sql;
    public $data;
    protected $qst;


    public function __construct ()
    {

        include (__DIR__.'\..\config\DB.php');

        $this->dbn = new \PDO( $dsn, 'root' );

        var_dump ( $this->dbn );

    }

    public function execute( $sql ) {

        $this->qst = $this->dbn -> prepare ( $sql );

        if( $this->qst->execute ([':id' => '']) ) {
            return true;
        }

        return false;

    }

    public function query( $sql, $data ) {


        if ( $this->execute ($sql) ) {

            $newsArr=[];

            foreach ( $data as $datum ) {
                $stmt = $this->dbn->prepare($sql);
                $stmt->execute([':id' => $datum]);
                $newsArr[] = $stmt->fetchAll(PDO::FETCH_ASSOC);

            }

            return $newsArr;

        }

        return ;

    }



}