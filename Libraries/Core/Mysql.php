<?php
function refValues($arr){
    if (strnatcmp(phpversion(),'5.3') >= 0) //Reference is required for PHP 5.3+
    {
        $refs = array();
        foreach($arr as $key => $value)
            $refs[$key] = &$arr[$key];
        return $refs;
    }
    return $arr;
}
        class mysql extends Conection{

            private $conn;
            private $strQuery;
            private $arrValues;

            /**
             * mysql constructor.
             */
            public function __construct()
            {
                $this->conn = new Conection();
                $this->conn = $this->conn->conect();

            }

            public function insert(string $query, array $arrValues){
                $this->strQuery = $query;
                $this->arrValues = $arrValues;
                $insert = $this->conn->prepare($this->strQuery);
                //$prepareok = $insert==true ? "" : die('prepare() failed: ' . htmlspecialchars($this->conn->error));
                call_user_func_array(array($insert, 'bind_param'), refValues($this->arrValues));
                $insert->execute();
            }
            public function selectBId(string $query, array $arrValues){
                echo $this->strQuery = $query;
                print_r($this->arrValues = $arrValues);
                $result = $this->conn->prepare($this->strQuery);
                call_user_func_array(array($result, 'bind_param'), refValues($this->arrValues));
                $result->execute();
                $geresult = $result->get_result();
                return $row = $geresult->fetch_array(MYSQLI_ASSOC);
            }
            public function selectAllBId($sql){
                $result = $this->conn->prepare($sql);
                //call_user_func_array(array($result, 'bind_param'), refValues());
                $result->execute();
                $geresult = $result->get_result();
                return $row = $geresult->fetch_all(MYSQLI_ASSOC);
            }
            public function updateBId(string $query, array $arrValues){
                $this->strQuery = $query;
                $this->arrValues = $arrValues;
                $insert = $this->conn->prepare($this->strQuery);
                //$prepareok = $insert==true ? "" : die('prepare() failed: ' . htmlspecialchars($this->conn->error));
                call_user_func_array(array($insert, 'bind_param'), refValues($this->arrValues));
                $insert->execute();
            }
            public function deleteBId(string $query, array $arrValues){
                $this->arrValues = $arrValues;
                $result = $this->conn->prepare($query);
                call_user_func_array(array($result, 'bind_param'), refValues($this->arrValues));
                $result->execute();
                echo $result->affected_rows;

            }

        }
