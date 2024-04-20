<?php
session_write_close();
require_once '../config.php';  

$ip = isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'';
$time = date("Y-m-d H:i:s");

$time = date('Y-m-d H:i:s', strtotime('-60 minutes', strtotime('now')));

$SQL  = "";
$SQL .= " SELECT * FROM tbl_ru_price_log WHERE response_msg != 'Success' AND add_time > '" . $time . "' ";
$SQL .= " ORDER BY log_id ";
echo $SQL;
$stmt = $dCON->prepare($SQL);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

foreach($row as $rs)
{
    $dataval = $rs['unit_id'];
    
    $get_RUID_SQL = "";
    $get_RUID_SQL .= " SELECT ru_property_id,extra_guest_charges FROM tbl_unit WHERE unit_id = :unit_id ";
    $get_RUID_stmt = $dCON->prepare($get_RUID_SQL);
    $get_RUID_stmt->bindParam(':unit_id', $dataval);
    $get_RUID_stmt->execute();
    $row = $get_RUID_stmt->fetch();
    
    $ru_property_id = $row['ru_property_id'];
    $extra_guest_charges = floatval($row['extra_guest_charges']);
    
    $pricefile = $dataval.'RU_PriceResponse_again.txt';
    
    // $file1 = 'found-data1.txt';
    // file_put_contents($file1, print_r($ru_property_id, true) . PHP_EOL, FILE_APPEND);
    
    $stmtUp = $dCON->prepare("UPDATE tbl_booking_dates AS d, tbl_booking AS b SET d.booking_status = 0 WHERE b.booking_id=d.booking_id AND b.booking_status !='CONFIRMED'");
    $stmtUp->execute();
    $stmtUp->closeCursor();
    
    
    $get_data_sql = "";
    $get_data_sql .= "SELECT *, (SELECT case when multi_unit_status =1 then 'BLOCK' else type end FROM vw_booking_dates as b WHERE b.unit_id=p.unit_id AND b.bdate=p.price_date AND b.booking_status=1 and (type='BLOCK' or type='BLOCK-AUTO' or multi_unit_status=1) LIMIT 1) as booking_type FROM vw_tbl_unit_price_master as p WHERE unit_id = :UNID AND price_date >= '".date('Y-m-d')."' ";
    $get_data_stmt = $dCON->prepare($get_data_sql);
    $get_data_stmt->bindParam(':UNID', $dataval);
    $get_data_stmt->execute();
    $data = $get_data_stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    $username = $_SESSION["username"]; //Your username provided by Rentals United
    $password = $_SESSION["password"]; //Your password provided by Rentals United
    $server_url = 'https://rm.rentalsunited.com/api/Handler.ashx'; 
    
    
    foreach($data as $val=>$elemt)
    {
        // $file1 = 'found-data.txt';
        // file_put_contents($file1, print_r($elemt, true) . PHP_EOL, FILE_APPEND);
    
    
        $u = 1;
        $booking_type = $elemt['booking_type'];
        if($booking_type == 'BLOCK' || $booking_type == 'BLOCK-AUTO')
        {
            $u = 0;
        }
       
        
    	$price_date = '';
        $price_date = $elemt['price_date'];
        
        $price = '';
        $price = $elemt['price'];
    
        $min_stay = '';
        $min_stay = $elemt['min_stay'];
    
        $check_in = '';
        $check_in = $elemt['check_in'];
        
        $check_out= '';
        $check_out = $elemt['check_out'];
    
        
            $post = "<Push_PutAvbUnits_RQ>
                        <Authentication>
                        <UserName>$username</UserName>
                        <Password>$password</Password>
                        </Authentication>
                        <MuCalendar PropertyID='".$ru_property_id."'>
                        <Date From='".$price_date."' To='".$price_date."'>
                            <U>$u</U>
                            <MS>$min_stay</MS>
                            <C>4</C>
                        </Date>
                        </MuCalendar>
                    </Push_PutAvbUnits_RQ>";
    
            $x = curlPushBack($server_url,$post);  
            $addproeprtyavailability_msg = simplexml_load_string($x['messages']); 
        
    
            $postprice = "<Push_PutPrices_RQ>
                            <Authentication>
                            <UserName>$username</UserName>
                            <Password>$password</Password>
                            </Authentication>
                            <Prices PropertyID='".$ru_property_id."'>
                            <Season DateFrom='".$price_date."' DateTo='".$price_date."'>
                                <Price>$price</Price>
                                <Extra>$extra_guest_charges</Extra>
                            </Season>
                            </Prices>
                        </Push_PutPrices_RQ>";
    
            $xprice = curlPushBackprice($server_url,$postprice);  
            $addproeprtyprice_msg = simplexml_load_string($xprice['messages']);     
    
    }

}


function curlPushBack($url, $post_fields = "", $head = 0, $follow = 1, $header="", $referer="", $is_ssl = false, $debug = 0){

        $ch = curl_init ();
        curl_setopt ($ch, CURLOPT_HEADER, $head);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, $follow);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows; U; Windows NT 5.0; en; rv:1.8.0.4) Gecko/20060508 Firefox/1.5.0.4");
        curl_setopt ($ch, CURLOPT_HTTPHEADER, array
              (
                  'Content-type: application/x-www-form-urlencoded; charset=utf-8',
                  'Set-Cookie: ASP.NET_SessionId='.uniqid().'; path: /; HttpOnly'
              ));
        curl_setopt ($ch, CURLOPT_REFERER,$referer);
        curl_setopt ($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $is_ssl);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $is_ssl);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);

        if ($post_fields != ""){
           if(is_array($post_fields)){
              $post_fields = implode("&",$post_fields);
           }
           curl_setopt ($ch, CURLOPT_POST,1);
           curl_setopt ($ch, CURLOPT_POSTFIELDS,$post_fields);
        }

        $result=curl_exec($ch);
        $err=curl_error($ch);

        $results["messages"] = $result;
        $results["errors"] = $err;
        
        
        curl_close($ch);
        return $results;
} 



function curlPushBackprice($url, $post_fields = "", $head = 0, $follow = 1, $header="", $referer="", $is_ssl = false, $debug = 0){

        $ch = curl_init ();
        curl_setopt ($ch, CURLOPT_HEADER, $head);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, $follow);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows; U; Windows NT 5.0; en; rv:1.8.0.4) Gecko/20060508 Firefox/1.5.0.4");
        curl_setopt ($ch, CURLOPT_HTTPHEADER, array
              (
                  'Content-type: application/x-www-form-urlencoded; charset=utf-8',
                  'Set-Cookie: ASP.NET_SessionId='.uniqid().'; path: /; HttpOnly'
              ));
        curl_setopt ($ch, CURLOPT_REFERER,$referer);
        curl_setopt ($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $is_ssl);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $is_ssl);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);

        if ($post_fields != ""){
           if(is_array($post_fields)){
              $post_fields = implode("&",$post_fields);
           }
           curl_setopt ($ch, CURLOPT_POST,1);
           curl_setopt ($ch, CURLOPT_POSTFIELDS,$post_fields);
        }

        $result=curl_exec($ch);
        $err=curl_error($ch);

        $results["messages"] = $result;
        $results["errors"] = $err;
        
        
        curl_close($ch);
        return $results;
} 



if(!empty($addproeprtyavailability_msg))
{
    
    $LOG_MS_SQL = "";
    $LOG_MS_SQL .= "INSERT INTO tbl_ru_price_log SET ";
    $LOG_MS_SQL .= " request_type = 'min stay log', ";
    $LOG_MS_SQL .= " unit_id = :unit_id, ";
    $LOG_MS_SQL .= " request_data = :request_data, ";
    $LOG_MS_SQL .= " response_msg = :response_msg, ";
    $LOG_MS_SQL .= " response_data = :response_data, ";
    $LOG_MS_SQL .= " response_id = :response_id, ";
    $LOG_MS_SQL .= " response_file = :response_file, ";
    $LOG_MS_SQL .= " add_ip = :add_ip, ";
    $LOG_MS_SQL .= " add_time = :add_time ";
    
    $addproeprtyavailability_msg_json = json_encode($addproeprtyavailability_msg);
    
    
    $log_MS_stmt = $dCON->prepare($LOG_MS_SQL);
    $log_MS_stmt->bindParam(':unit_id', $dataval);
    $log_MS_stmt->bindParam(':request_data', $post);
    $log_MS_stmt->bindParam(':response_msg', $addproeprtyavailability_msg->Status);
    $log_MS_stmt->bindParam(':response_data', $addproeprtyavailability_msg_json);
    $log_MS_stmt->bindParam(':response_id', $addproeprtyavailability_msg->ResponseID);
    $log_MS_stmt->bindParam(':response_file', $pricefile);
    $log_MS_stmt->bindParam(':add_ip', $ip);
    $log_MS_stmt->bindParam(':add_time', $time);
    $log_MS_stmt->execute();
    $log_MS_stmt->closeCursor();
}



if(!empty($addproeprtyprice_msg))
{
    $LOG_P_SQL = "";
    $LOG_P_SQL .= "INSERT INTO tbl_ru_price_log SET ";
    $LOG_P_SQL .= " request_type = 'price log', ";
    $LOG_P_SQL .= " unit_id = :unit_id, ";
    $LOG_P_SQL .= " request_data = :request_data, ";
    $LOG_P_SQL .= " response_msg = :response_msg, ";
    $LOG_P_SQL .= " response_data = :response_data, ";
    $LOG_P_SQL .= " response_id = :response_id, ";
    $LOG_P_SQL .= " response_file = :response_file, ";
    $LOG_P_SQL .= " add_ip = :add_ip, ";
    $LOG_P_SQL .= " add_time = :add_time ";
    
    $addproeprtyprice_msg_json = json_encode($addproeprtyprice_msg);

    $log_P_stmt = $dCON->prepare($LOG_P_SQL);
    $log_P_stmt->bindParam(':unit_id', $dataval);
    $log_P_stmt->bindParam(':request_data', $postprice);
    $log_P_stmt->bindParam(':response_msg', $addproeprtyprice_msg->Status);
    $log_P_stmt->bindParam(':response_data', $addproeprtyprice_msg_json);
    $log_P_stmt->bindParam(':response_id', $addproeprtyprice_msg->ResponseID);
    $log_P_stmt->bindParam(':response_file', $pricefile);
    $log_P_stmt->bindParam(':add_ip', $ip);
    $log_P_stmt->bindParam(':add_time', $time);
    $log_P_stmt->execute();
    $log_P_stmt->closeCursor();
}

?>
