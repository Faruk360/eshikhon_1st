<?php include('header1.php'); 
include('navber.php') ; 
      session_start();
      
    //   if (isset($_COOKIE['userName'])) {
    //     // header("location:list.php");
    //     echo '';
    // }else{
    //     header("location:index.php");
    // }
    

      ?>
<div class="container list_section">
    <table class="table table-bordered">
        
        <thead>
            <tr>
                <th>     Sl                     </th>
                <th>     Project Name           </th>
                <th>     Developers             </th>
                <th>     Language               </th>
                <th>     Framework              </th>
                <th>     Start Date             </th>
                <th>     End Date               </th>
                <th>     Initial Deadline       </th>
                <th>     Client Name            </th>
                <th colspan="2">   Manage     </th>
                
            </tr>
        </thead>
        <tbody>
            <?php
        include('connection.php');

        $query = "SELECT * FROM `our_site`";
        $run_query = mysqli_query($connection,$query);
        $sl = 2;
        while ($myadmin = mysqli_fetch_array($run_query)) {
            ?>
            <tr>
                <td>
                    <?php echo $sl;         ?>
                </td>
                <td>
                    <?php echo $myadmin['pro_name'];         ?>
                </td>
                <td>
                    <?php echo $myadmin['dev_name'];          ?>
                </td>
                <td>
                    <?php echo $myadmin['language'];           ?>
                </td>
                <td>
                    <?php echo $myadmin['framework'];          ?>
                </td>
                <td>
                    <?php  echo $myadmin['start_date'];        ?>
                </td>
                <td>
                    <?php echo $myadmin['end_date'];           ?>
                </td>
                <td>
                    <?php echo $myadmin['initial_deadline'];   ?>
                </td>
                <td>
                    <?php echo $myadmin['client_name'];        ?>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $myadmin['id'];?>"><i class="fas fa-user-edit info"></i></a>
                </td>
                <td>
                    <a class="delete_membar logout" href="delete.php?id=<?php echo $myadmin['id'];?>"><i class="fas fa-ban danger"></i></a> 
                </td> 
            <?php
           
            $sl++;
        }
    ?> 
            </tr> 
        </tbody>
    </table>
    
   
<script>
$('.delete_mbar').click(function(e) {
    e.preventDefault();
    const href = $(this).attr('href');
    swal({
            title: "Are you sure?",
            text: "Remove ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                document.location.href = href;
            }
        });
})
$('.logout').click(function(e) {
    e.preventDefault();
    const href = $(this).attr('href');
    swal({
            title: "Are you sure?",
            text: "Logout And Delete All Data ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                document.location.href = href;
            }
        });
})

</script>
</php>