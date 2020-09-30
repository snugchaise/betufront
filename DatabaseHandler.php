<?php
/**
 * Database Handler class
 *
 * @author Bence Ladoczki (info@ldczk.com)
 */
class DatabaseHandler {
    private $connector;
    function __construct() {
        $this->connector = new DatabaseConnector;
        $this->connector->connect();
    }
    public function get_connector(){
        return $this->connector;
    }
    public function connect_to_database($database){
        $this->connector->set_database_name($database);
        $this->connector->connect();
    }

    public function select_all_from($table_name) {
        $query = $this->connector->db->prepare("SELECT * FROM `".$table_name."`");
        $query->execute();
        $result = $query->fetchAll();
        $to_return = array();

        foreach($result as $row) {
            array_push($to_return,$row);
        }
        return $to_return;
    }
    public function select_all_from_namespace_isnull($table_name) {
        $query = $this->connector->db->prepare("SELECT * FROM `".$table_name."` where page_namespace=0");
        $query->execute();
        $result = $query->fetchAll();
        $to_return = array();

        foreach($result as $row) {
            array_push($to_return,$row);
        }
        return $to_return;
    }
    public function select_with_like($table_name,$field,$like_string) {
        $query = $this->connector->db->prepare("SELECT * FROM `".$table_name."` WHERE ".$field." LIKE '%".$like_string."%'");
        $query->execute();
        $result = $query->fetchAll();
        $to_return = array();
        foreach($result as $row) {
            array_push($to_return,$row);
        }
        return $to_return;
    }

    public function get_all_content($table_name) {
        $query = $this->connector->db->prepare("SELECT * FROM `".$table_name."`");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    public function conditional_select_from($table_name,$condition) {

        $query_text = "SELECT * FROM `".$table_name."`";
        $query_text = $query_text." WHERE ";
        foreach($condition as $key => $value) {
            $query_text = $query_text.$key." = :s".$key." and ";
        }
        $query_text = substr($query_text, 0, -4);
        $q = $this->connector->db->prepare($query_text);
        foreach($condition as $key => $value) {
            $q->bindValue(":s".$key, $value);
        }
        $q->execute();
        $result = $q->fetchAll();
        $to_return = array();

        foreach($result as $row) {
            array_push($to_return,$row);
        }
        return $to_return;
    }


    /**
     * Executes a query specified in the parameter.
     *
     * @param $query
     * @return array $ret       The result of the query.
     * 
     * @author Hajdú Zsombor
     */
    public function execute_query($query)
    {
        //TODO: error handling, sanitizing
        $q = $this->connector->db->prepare($query);
        $q->execute();
        $result = $q->fetchAll();
        $ret = array();
        foreach($result as $row)
        {
            array_push($ret, $row);
        }
        return $ret;
    }
    public function create_table($table_name) {
        $mysqery=mysqli_query($this->connector->conn,"CREATE TABLE `".$table_name."` (
              `id` INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
              UNIQUE KEY id (id)
            )COLLATE='utf8_general_ci';");
    }
    public function alter_table_remove_column($table_name,$column_name) {
        $mysqery=mysqli_query($this->connector->conn,"ALTER TABLE `".$table_name."` DROP COLUMN `".$column_name."` ;");
        return;
    }
    public function alter_table_add_column($table_name,$column_name,$type) {
        if($type == "int"){
            $mysqery=mysqli_query($this->connector->conn,"ALTER TABLE `".$table_name."` ADD COLUMN `".$column_name."` int unsigned NOT NULL DEFAULT 0;");
            return;
        }
        if($type == "varchar"){
            $mysqery=mysqli_query($this->connector->conn,"ALTER TABLE `".$table_name."` ADD COLUMN `".$column_name."` VARCHAR(128) DEFAULT 'Unknown';");
            return;
        }
        if($type == "text"){
            $mysqery=mysqli_query($this->connector->conn,"ALTER TABLE `".$table_name."` ADD COLUMN `".$column_name."` TEXT ;");
            return;
        }
        die("Unknown type in alter_table_add_column, exciting...");
    }
    public function delete_entry_from_table($table_name,$field,$value) {
        try{
        $stmt = $this->connector->db->prepare("DELETE FROM `".$table_name."` WHERE ".$field." = ?");
        $stmt->execute(array($value));
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
            error_log(print_r($e->getMessage(),true));
            return $e->getMessage();

        }
        return True;
    }
    public function drop_table($table_name) {
        $mysqery=mysqli_query($this->connector->conn,"DROP TABLE `".$table_name."`;");
    }
    public function show_columns_from_table($table_name) {
        $mysqery=mysqli_query($this->connector->conn,"SHOW COLUMNS FROM `".$table_name."`;");
        while($mysqery_r= mysqli_fetch_array($mysqery)){
            print_r($mysqery_r);
            print_r("<br>");
        }
    }
    public function show_tables() {
        $sql = "SHOW TABLES";

        //Prepare our SQL statement,
        $statement = $this->connector->db->prepare($sql);

        //Execute the statement.
        $statement->execute();

        //Fetch the rows from our statement.
        $tables = $statement->fetchAll(PDO::FETCH_NUM);

        $table_names = "";
        //Loop through our table names.
        foreach($tables as $table){
            //Print the table name out onto the page.
            $table_names = $table_names.$table[0];
        }
        return $table_names;
    }

    public function update_in_table($table_name,$updates,$field_name,$field_value) {
        $updates = array_filter( $updates, 'strlen' );
        try{
            $query = 'UPDATE '.$table_name.' SET';
            $values = array();

            foreach ($updates as $name => $value) {
                $query .= ' '.$name.' = :'.$name.','; // the :$name part is the placeholder, e.g. :zip
                $values[':'.$name] = $value; // save the placeholder
            }

            $query = substr($query, 0, -1); // remove last , and add a ;
            $query .= ' WHERE '.$field_name.' = :'.$field_name.';';
            error_log($query);
            $values[':'.$field_name] = $field_value;

            $sth = $this->connector->db->prepare($query);

            $sth->execute($values); // bind placeholder array to the query and execute everything
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
            error_log($e->getMessage());
        }
        return;
    }
    public function insert_into_table($table_name,$fields,$associates) {
        try{
            $query = "INSERT INTO ".$table_name."(";
            foreach($fields as $field) {
                $query = $query." ".$field.",";
            }
            $query = substr($query, 0, -1);
            $query = $query." ) VALUES(";
            foreach($associates as $key => $value) {
                $query = $query." :".$key.", ";
            }
            $query = substr($query, 0, -2);
            $query = $query." )";

            $statement = $this->connector->db->prepare($query);
            $statement->execute($associates);
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
            error_log(print_r($e->getMessage(),true));
            return $e->getMessage();

        }
        return;
    }
}
