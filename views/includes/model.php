<?php 
function format_number($number) {
    if ($number < 1000) {
        // Trường hợp số nhỏ hơn 1000, chỉ cần hiển thị số nguyên.
        return $number;
    } elseif ($number < 1000000) {
        // Trường hợp số từ 1000 đến 999,999, hiển thị dưới dạng K.
        return round($number / 1000, 1) . 'K';
    } elseif ($number < 1000000000) {
        // Trường hợp số từ 1,000,000 đến 999,999,999, hiển thị dưới dạng M.
        return round($number / 1000000, 1) . 'M';
    } else {
        // Trường hợp số từ 1,000,000,000 trở lên, hiển thị dưới dạng B.
        return round($number / 1000000000, 1) . 'B';
    }
}
function translateProcess($process){
    if($process == 0){
        return "<i style='font-size: 18px;' class='icon fa fa-stop-circle fa-3x'></i>";
    }
    if($process == 1){
        return "<i style='font-size: 18px;' class='icon fa fa-spinner fa-3x'></i>";
    }
    if($process == 2){
        return "<i style='font-size: 18px;' class='icon fa fa-check-circle-o fa-3x'></i>";
    }
}
function translateProcessClass($process){
    if($process == 0){
        return "danger";
    }
    if($process == 1){
        return "warning";
    }
    if($process == 2){
        return "success";
    }
}
function translateStatusClass($status){
    if($status == 0){
        return "danger";
    }
    if($status == 1){
        return "success";
    }
    if($status == 2){
        return "dark";
    }
    if($status == 3){
        return "warning";
    }
}
function selectTotalWhere($table, $process){
    include './config/database.php';
    $sql = "SELECT COUNT(*) AS num FROM $table WHERE process = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $process);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['num'];
}
function selectTotal($table){
    include './config/database.php';
    $sql = "SELECT COUNT(*) AS num FROM $table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['num'];
}
function deposit(){
    include './config/database.php';
    $sql = "SELECT SUM(`deposit`) AS num FROM task";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['num'];
}
function monneyGet(){
    include './config/database.php';
    
    $sql = "
        SELECT 
            SUM(`get`) AS net_amount
        FROM 
            task 
        WHERE 
            status = 1
    ";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    return $row['net_amount'];
}

function monneyPending(){
    include './config/database.php';
    $sql = "SELECT SUM(`get`) AS num FROM task WHERE status = 0";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $num = $row['num'];
    if($num){
        return $num;
    }
}
function addTask($customer, $information, $details, $deadline, $budget, $deposit, $get) : bool{
    include './config/database.php';
    $status = 0;
    $process = 0;
    $sql = "INSERT INTO task (`customer`,`information`,`details`,`deadline`,`budget`,`deposit`,`get`,`status`,`process`) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssiiiii", $customer, $information, $details, $deadline, $budget, $deposit, $get, $status, $process);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
function addDeadline($information, $deadline) : bool{
    include './config/database.php';
    $process = 0;
    $sql = "INSERT INTO deadline (`information`,`deadline`,`process`) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $information, $deadline, $process);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
function addTodo($information) : bool{
    include './config/database.php';
    $process = 0;
    $sql = "INSERT INTO todo (`information`,`process`) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $information, $process);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
function addProject($project, $url) : bool{
    include './config/database.php';
    $sql = "INSERT INTO project (`project`,`url`) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $project, $url);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
function editTask($customer, $information, $details, $deadline, $budget, $deposit, $get, $id) : bool{
    include './config/database.php';
    $sql = "UPDATE task SET customer = ?, information = ?, details = ?, deadline = ?, budget = ?, deposit = ?, get = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssiiii", $customer, $information, $details, $deadline, $budget, $deposit, $get, $id);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
function editDeadline($information, $deadline, $id) : bool{
    include './config/database.php';
    $sql = "UPDATE deadline SET information = ?, deadline = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $information, $deadline, $id);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
function editTodo($information, $id) : bool{
    include './config/database.php';
    $sql = "UPDATE todo SET information = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $information, $id);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
function editProject($project, $url, $id) : bool{
    include './config/database.php';
    $sql = "UPDATE project SET project = ?, url = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $project, $url, $id);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
function update($table, $column, $value, $id){
    include './config/database.php';
    $sql = "UPDATE $table SET $column = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $value, $id);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
function deleteQuery($table, $id){
    include './config/database.php';
    $sql = "DELETE FROM $table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}