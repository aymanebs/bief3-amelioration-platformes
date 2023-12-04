<?php
                          // session_start();
// if(!isset($_SESSION['username'])){
    
// }
// 
                          require __DIR__ . '/../../../db/connect.php';
                          $sql="SELECT id,username,name,email,phone,adress,created_at 
                          FROM users
                          WHERE role='Client' ";
                          $query=mysqli_query($connection,$sql);
                          while($row=mysqli_fetch_assoc($query)){
                           
                            echo"
                           
                            <tr>
                            <td>$row[id]</td>
                            <td>$row[username]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[adress]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a href='edit.php?id=$row[id]'><i class='fas fa-edit btndit' style='cursor: pointer;'></i></a>
                                <a href='delete.php?id=$row[id]'><i class='fas fa-trash-alt btndelete' style='cursor: pointer; padding-left: 20px;'></i></a>
                            </td>
               
                            
                            
                          </tr>";

                          }


                        
                        
                        
                        ?>