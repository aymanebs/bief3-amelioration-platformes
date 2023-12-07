<?php
// session_start();
    require __DIR__ . '/../../../db/connect.php';
    require __DIR__ . '/../../../model/orders/list.php';
    $result=getOrders();
    while ($row = mysqli_fetch_assoc($result)) {

      echo "
                           
   <tr>
       <td>$row[id]</td>
      <td>$row[order_date]</td>
      <td>$row[service_id]</td>
     <td>$row[team_id]</td>
     <td>$row[user_id]</td>
     <td>
     <a href='edit.php?id=$row[id]'><i class='fas fa-edit btndit' style='cursor: pointer;'></i></a>
       <a href='delete.php?id=$row[id]'><i class='fas fa-trash-alt btndelete' style='cursor: pointer; padding-left: 20px;'></i></a>
      </td>
               
                            
                            
      </tr>";
    }





    ?>