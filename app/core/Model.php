<?php

class Model
{
    use Database;  // Using the Database trait

    

    public function __construct()
    {
        // Use the non-static method to get the database connection
        $this->con = $this->getConnection();  // Using non-static method getConnection
    }
    public function where($table, $data, $data_not = [])
{
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);

    // Avoid direct table/column names; consider validating them
    $query = "SELECT * FROM $table WHERE ";

    foreach($keys as $key) {
        $query .= "$key = :$key AND ";
    }

    foreach($keys_not as $key) {
        $query .= "$key != :$key AND ";  // "!=" instead of "=" for NOT EQUAL
    }
    $query = rtrim($query, " AND ");

    $data = array_merge($data, $data_not);

    return $this->query($query, $data);
}

public function all($table)
{
    // Avoid direct table/column names; consider validating them
    $query = "SELECT * FROM $table";

    return $this->query($query);
}
   
public function insert($table, $data)
{
    $keys = array_keys($data);
    $columns = implode(",", $keys);
    $placeholders = ":" . implode(", :", $keys);
    
    $query = "INSERT INTO $table ($columns) VALUES ($placeholders)";

    return $this->query($query, $data);
}

    public function update($table, $id, $data) 
    { 
        $keys = array_keys($data); $columns = implode(" = ?, ", $keys) . " = ?";
        $query = "UPDATE $table SET $columns WHERE id = ?"; 
        $data[] = $id; 
        return $this->query($query, array_values($data)); 
    }
    public function delete($table,$id, $data)
    {
        
    }
    

}
