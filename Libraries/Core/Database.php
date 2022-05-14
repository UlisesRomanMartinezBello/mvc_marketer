<?php

class Database extends Connection {
    private $query;
    private $values;

    public function __construct() {
        parent::__construct();
    }

    public function insert(string $query, array $values) {
        $this -> query = $query;
        $this -> values = $values;
        $insert = $this -> getConnection() -> prepare($this -> query);
        for ($i = 0; $i < count($this->values); $i++) { 
            $insert -> bindParam($i + 1, $values[$i], PDO::PARAM_STR);
        }
        $insert -> execute();
    }

    public function select(string $query, $value) {
        $this -> query = $query;
        $this -> value = $value;
        $select = $this -> getConnection() -> prepare($this -> query);
        $select -> bindParam(1, $value);
        $select -> execute();
        $dataResult = $select -> fetch(PDO::FETCH_ASSOC);
        return $dataResult;
    }

    public function selectAll(string $query) {
        $this -> query = $query;
        $selectAll = $this -> getConnection() -> prepare($this -> query);
        $selectAll -> execute();
        $dataResult = $selectAll -> fetchAll(PDO::FETCH_ASSOC);
        return $dataResult;
    }

    public function delete(string $query, $value) {
        $this -> query = $query;
        $this -> value = $value;
        $delete = $this -> getConnection() -> prepare($this -> query);
        $delete -> bindParam(1, $value, PDO::PARAM_STR);
        $delete -> execute();
    }

    public function update(string $query, array $values) {
        $this -> query = $query;
        $this -> values = $values;
        $update = $this -> getConnection() -> prepare($this -> query);
        for ($i = 0; $i < count($this->values); $i++) { 
            $update -> bindParam($i + 1, $values[$i], PDO::PARAM_STR);
        }
        $update -> execute();
    }
}

?>