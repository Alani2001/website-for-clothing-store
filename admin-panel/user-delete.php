<?php
    require 'connection.php';
    /* delete product */
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($con, "DELETE FROM `users` WHERE user_id = $delete_id ") or die('query failed');
        if($delete_query){
           echo"
                         <script>
                             alert('user has been deleted!');
                             window.location.href='adminCustomer.php';
                         </script>
                         ";
        }else{
           echo"
                 <script>
                     alert('can,t delete!');
                     window.location.href='adminCustomer.php';
                 </script>
             ";
        };
     };
     if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($con, "DELETE FROM `review` WHERE review_id = $delete_id ") or die('query failed');
        if($delete_query){
            echo"
                          <script>
                              alert('review has been deleted!');
                              window.location.href='adminReviews.php';
                          </script>
                          ";
         }else{
            echo"
                  <script>
                      alert('can,t delete!');
                      window.location.href='adminReviews.php';
                  </script>
              ";
         };


     }?>