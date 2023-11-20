<?php
require 'connection.php';
if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($con, "DELETE FROM `review` WHERE review_id = $delete_id ") or die('query failed');
      ?>
     
      <script>
            Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
        });
</script>

<?php
     }?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>