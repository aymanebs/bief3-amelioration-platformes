<?php
// session_start();
// if(!isset($_SESSION['username'])){
    
// }


                         require __DIR__ . '/../../../db/connect.php';
                          $sql="SELECT *
                          FROM services";
                          $query=mysqli_query($connection,$sql);
                          while($row=mysqli_fetch_assoc($query)){
                           
                            echo"
                           
                            <tr>
                            <td>$row[id]</td>
                            <td>$row[libel]</td>
                            <td>$row[category]</td>
                            <td>$row[price]</td>
                            <td>
                                <a href='edit.php?id=$row[id]'><i class='fas fa-edit btndit' style='cursor: pointer;'></i></a>
                                <a href='delete.php?id=$row[id]'><i class='fas fa-trash-alt btndelete' style='cursor: pointer; padding-left: 20px;'></i></a>
                            </td>
               
                            
                            
                          </tr>";

                          }


                        
                        
                        
                        


?>