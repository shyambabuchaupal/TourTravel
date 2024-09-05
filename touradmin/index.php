<?php include 'include/header.php' ?>
<?php include 'include/sidebar.php' ?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Tables</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>
                                        First Name
                                    </th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM `infodata`";
                                $query = mysqli_query($conn, $sql);
                                $rows = mysqli_num_rows($query);
                                $count= 0;
                                if($rows){
                                    while($row=mysqli_fetch_assoc($query)){
                                        ?>
                                <tr>
                                    <td><?=++$count?></td>
                                    <td><?=$row['fname']?></td>
                                    <td><?=$row['lname']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['phone']?></td>
                                    <td><?=$row['message']?></td>
                                </tr>
                                <?php
                                    }
                                }

                                ?>


                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php include 'include/footer.php' ?>