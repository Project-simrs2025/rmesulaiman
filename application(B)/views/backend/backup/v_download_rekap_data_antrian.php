<?php 
$trust = new ApiAntrian($con);

$data    =  $trust->antreanPerTanggal($tgl);
$message = $trust->getLastStatus();  

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Rekap_Data_Antrian_$tgl.xls");
header("Pragma: no-cache");
header("Expires: 0");

                   
 
?>
<!DOCTYPE html>
<html>
    <head>
	
        <!-- Title -->
        <title></title>
        
    </head>
    <body>
    									<h2>Rekap Data Antrian Tanggal <?php echo format_indo(date($tgl)); ?></h2>
										<table id="mytable" class="display table" style="width: 100%; cellspacing: 0;">
                                        
                                            <thead>
                                            <tr>
                                                <th>Kode Booking</th>
                                                <th>No. Kartu</th>
                                                <th>Poli</th>
                                                <th>Sumber Data</th>
                                                <th class="col-3">Task ID</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $content = json_decode($data, TRUE);
                                                foreach($content as $row)
                                                    {
                                                    
                                            ?>
                                            	<tr>
                                                
                                                    <td><?php echo ' '.$row['kodebooking'].' ';?></td>
                                                    
                                                    <td><?php echo ' '.$row['nokapst'].' ';?></td>
                                                    
                                                    <td><?php echo $row['kodepoli'];?></td>
                                                    
                                                    <td><?php echo $row['sumberdata'];?></td>
                                                    <?php 
                                                        $trust = new ApiAntrian($con);
                                                        $arr=array(
                                                            "kodebooking"=>$row['kodebooking'],
                                                        );
                                                        $data2    =  $trust->getListtask($arr);  
            
                                                        $content2 = json_decode($data2, TRUE);
            
                                                        $jlhdata = count($content2);
                                                        if ($jlhdata>0)
                                                        {
                                                        for ($x=0;$x<$jlhdata;$x++)
                                                            {
                                                                $taskid=$content2[$x]['taskid'];
                                                                $wakturs=$content2[$x]['wakturs'];
                                                    ?>
													<td><?php echo 'Task ID : '.$taskid.'  Tanggal '.$wakturs.' | ';?></td>
                                                    <?php 
                                                            }
                                                        }
                                                    ?>
                                                </tr>
                                              
                                            <?php 
                                                        
                                                    
                                        
                                                    } ?>
											
                                            </tbody>
                                            
                                        </table>
                               
    </body>
</html>