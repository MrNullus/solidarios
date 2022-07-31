<?php 

function prepare_query($sql, $find_array, $conn) {
    $sql =  $conn->prepare($sql);
    
    replace_values($sql, $find_array);
    $sql->execute();

    return $sql;
}

?>