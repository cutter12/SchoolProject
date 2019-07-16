<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ</th>
                        <th>สกุล</th>
                        <th>ข้อมูลเพิ่มเติม</th>
                    </tr>
                </thead>
                <tbody>
                 <?php foreach($table->result_array() as $row){
                     echo "<tr>";
                     echo "<td>".$row['id']."</td>";
                     echo "<td>".$row['fname']."</td>";
                     echo "<td>".$row['lname']."</td>";
                     echo "<td><a href=".base_url('maincontroller/student_information/').$row['id']." class='btn btn-primary'>ดูข้อมูลเพิ่มเติม</a>";
                     echo "</tr>";
                 } ?>
                
                </tbody>
            </table>
        </div>
    </div>
</div>