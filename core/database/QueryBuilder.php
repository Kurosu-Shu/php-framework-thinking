<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($dataArr, $table)
    {   
        $dataArrKeys = array_keys($dataArr);
        $columns = implode(',', $dataArrKeys);

        $questionMarks = "";
        foreach($dataArrKeys as $key) {
            $questionMarks.= "?,";
        }

        $questionMarks = rtrim($questionMarks, ",");

        $sql = "insert into $table ($columns) values ($questionMarks)";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array_values($dataArr));
    }
}
