 <?php
    include "config/connect.php";
    $output = '';
    if ($_POST['topic'] == 'rooms') {
        $sql = "SELECT r.*,b.building_name FROM rooms AS r 
                    JOIN building AS b ON r.building_id = b.id WHERE r.id = '" . $_POST["id"] . "'";
        $result = $conn->query($sql);
        $output .= ' <table class="table table-bordered">';
        while ($row = $result->fetch_array()) {
            $output .= '  
               <tr>
                    <th>ID</th>
                    <td>' . $row['id'] . '</td>
                </tr>
                <tr>
                    <th>ชื่อห้องประชุม</th>
                    <td>' . $row['name'] . '</td>
                </tr>
                <tr>
                    <th>ตึก</th>
                    <td>' . $row['building_name'] . '</td>
                </tr>
                <tr>
                    <th>ชั้น</th>
                    <td>' . $row['class_no'] . '</td>
                </tr>
                <tr>
                    <th>รายละเอียด</th>
                    <td>' . $row['detail'] . '</td>
                </tr>
           ';
            $output .= '  
           </table> ';
        }
    } else if ($_POST['topic'] == 'booking' || $_POST['topic'] == 'booking-list') {
        $id = $_POST['id'];
        $sql = "SELECT res.*,room.name ,room.building_id,room.detail, b.building_name ,room.class_no,u.username ,cat.topic AS use_for 
                    FROM reservation AS res
                        JOIN rooms AS room ON res.room_id = room.id
                            JOIN user AS u ON res.member_id = u.id_card
                                JOIN building AS b ON room.building_id =  b.id
                                    JOIN category AS cat ON res.for = cat.category_id
                                        WHERE cat.type = 'use' AND res.id = '" . $_POST['id'] . "'";
        // echo $sql;
        $result = $conn->query($sql);
        $output .= '<table class="table table-bordered">';
        // $acs = '';
        // $acs_text = '';
        while ($row = $result->fetch_assoc()) {
            // $acs = $row['acs'];
            // $acs_arr = explode(',',$acs);
            // $sql_acs = 'SELECT * FROM category WHERE ';
            // for($i = 0 ; $i < count($acs_arr) ; $i++){
            //     if($i == 0) {$sql_acs .= '(';}
            //     else if ($i != 0 && $i != count($acs_arr)){
            //         $sql_acs .= ' OR ';
            //     }

            //     $sql_acs .= "category_id = '". $acs_arr[$i]."'";

            //     if($i == count($acs_arr)-1){
            //          $sql_acs .= ") AND type = 'accessories'";
            //     }

            // }

            // $result = $conn->query($sql_acs);
            // if($result->num_rows > 0){
            //     $j = 0;
            //     while ($row2 = $result->fetch_assoc()){
            //         if($j != 0){
            //             $acs_text .= "<br>";
            //         }
            //         $acs_text .= $j+1 . ".".$row2['topic'];
            //         $j++;
            //     }
            // }

            $output .= '
                <tr>
                    <th>ID</th>
                    <td>' . $row['id'] . '</td>
                </tr>
                <tr>
                    <th>วันที่สร้างคำขอ</th>
                    <td>' . $row['create_date'] . '</td>
                </tr>
                <tr>
                    <th>ผู้จอง</th>
                    <td>' . $row['username'] . '</td>
                </tr>
                <tr>
                    <th>ตึก (ชั้น) / ห้องประชุม</th>
                    <td>' . $row['building_name'] . " ( ". $row['class_no'] . " )" . " / ". $row['name'].'</td>
                </tr> 
                <tr>
                    <th>รายละเอียดห้อง</th>
                    <td>' . $row['detail'] . '</td>
                </tr>
                <tr>
                    <th>หัวเรื่อง</th>
                    <td>' . $row['topic'] . '</td>
                </tr>
                <tr>
                    <th>วันที่จอง</th>
                    <td>' . date('d-m-Y', strtotime($row['begin'])) . '</td>
                </tr>
                <tr>
                    <th>เวลาจอง (วัน / เดือน / ปี)</th>
                    <td>' . date('G:h', strtotime($row['begin'])) . ' น. - ' . date('G:h', strtotime($row['end'])) . ' น.' . '</td>
                </tr>
                <tr>
                    <th>เบอร์โทร</th>
                    <td>' . $row['mobile'] . '</td>
                </tr> 
                <tr>
                    <th>ใช้สำหรับ</th>
                    <td>' . $row['use_for'] . '</td>
                </tr> 
                 <tr>
                    <th>รายละเอียดเพิ่มเติม</th>
                    <td>' . $row['comment'] . '</td>
                </tr> 
            ';
            if ($_POST['topic'] == 'booking-list') {
                $stats = $row['status'];
                $output .= '<tr>
                                <th>เครื่องมือ</th>
                                <td>
                                <select class="form-control form-control-sm" style="width:100%" type="text" name="status_value" id="status_value" placeholder="ดำเนินการ..." required>';

                $output .= ($stats == 0) ? '<option selected value="0">รอตรวจสอบ</option>' : '<option value="0">รอตรวจสอบ</option>';
                $output .= ($stats == 1) ? '<option selected value="1">อนุมัติ</option>' : '<option value="1">อนุมัติ</option>';
                $output .= ($stats == 2) ? '<option selected value="2">ยกเลิก</option>' : '<option value="2">ยกเลิก</option>';

                $output .= ' </select>
                                <input type="button" name = "status_set" value = "ดำเนินการ" class="btn btn-sm btn-success btn-block mt-2" id = "' . $_POST["id"] . '"/>
                                </td>
                            </tr> ';
            }
            $output .= ' </table> ';
        }
    }

    echo $output;
    ?>