<?php

function getConn()
{
    define('_DB_SERVER_', 'localhost');
    define('_DB_USER_', 'root');
    define('_DB_PASSWD_', '');
    define('_DB_NAME_', 'euromus');
    return new mysqli("localhost", "root", "", "euromus");

    /* check connection */
    // if ($mysqli->connect_errno) {
    //     printf("Connect failed: %s\n", $mysqli->connect_error);
    //     exit();
    // }
    
    // /* check if server is alive */
    // if ($mysqli->ping()) {
    //     printf ("Our connection is ok!\n");
    // } else {
    //     printf ("Error: %s\n", $mysqli->error);
    // }
    
    // /* close connection */
    // $mysqli->close();
    // return new mysqli(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);

}

/**
function get_inserted_id($query){

    $conn = getConn();
    $result = $conn->query($query);

    $return = array();

    while ($row = $result->fetch_assoc()) $return[key($row)] = $row['id_ukoocompat_compat'];

    return $return;
}**/

function insert_data($sql, $echo = 0){
    $conn = getConn();

    if($echo) {
        echo '<br>' . $sql;
    }else{
        $conn->query($sql);
    }
}

function update_data($sql, $echo = 0){
    $conn = getConn();

    if($echo) {
        echo '<br>' . $sql;
    }else{
        $conn->query($sql);
    }
}

function sql_select_data_to_object($sql, $echo = 0){

    if($echo) dd($sql, 1);
    $filter = array();

    $conn = getConn();
    $result = $conn->query( $sql);

    while ($row = $result->fetch_assoc()){
        $filter[] = $row[key($row)];
    }

    return $filter;
}

function get_inserted_id($query, $field){

    $conn = getConn();
    $result = $conn->query($query);

    $return = array();

    while ($row = $result->fetch_assoc()) $return[key($row)] = $row[$field];

    return $return;
}