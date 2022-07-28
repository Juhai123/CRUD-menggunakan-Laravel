<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CRUD Laravel</title>
</head>
<style type="text/css">
    body {
        background-color:#d3cae0;
    }
</style>

<body>

    <br>
    <br>
    <h1 class="text-center mb-3 ">Project Monitoring</h1>
    <div class="container">
        <a href="/tambahpegawai" class="btn btn-success">Tambah Project </a>
        <div class="row g-5 align-items-center">
            <div class="col-auto">
                <br>
                <form action="/pegawai" method="GET">
                    <label text-right for="disabledTextInput" class="form-label">Search by Client </label>
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">

                </form>
            </div>

        </div>
        <br>
        <div class="row">
            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e($message); ?>

            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead class="table-secondary table-primary">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">PROJECT NAME</th>
                        <th scope="col">CLIENT</th>
                        <th scope="col">PROJECT LEADER</th>
                        <th scope="col">START DATE</th>
                        <th scope="col">END DATE</th>
                        <th scope="col">PROGRESS</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no =1;
                    ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th class="table-light" scope="row"><?php echo e($index + $data->firstItem()); ?></th>
                        <td class="table-light col-md-2"><?php echo e($row->project_name); ?></td>
                        <td class="table-light col-md-2"><?php echo e($row -> client); ?></td>
                        <td class="table-light">
                            <img src="<?php echo e(asset('fotopegawai/'.$row->foto)); ?>" alt="" align="left" style="width: 40px; height: 40px; border-radius: 50%;">
                            &nbsp;&nbsp;<?php echo e($row -> nama_leader); ?><br>
                            &nbsp;&nbsp;<?php echo e($row -> email); ?>

                        </td>
                        <td class="table-light"><?php echo e($row ->created_at->format ('d M Y')); ?></td>
                        <td class="table-light"><?php echo e($row ->updated_at->format ('d M Y')); ?></td>
                        <td class="table-light">
                            <?php if($row->progress == 100): ?>
                            <div class="progress ">
                                <div class="progress-bar text-left" style="width:100%"><?php echo e($row->progress); ?>%</div>
                            </div>
                <?php else: ?>
                <div class="progress ">
                                <div class="progress-bar bg-success" style="width:<?php echo e($row->progress); ?>%"><?php echo e($row->progress); ?>%</div>
                            </div>
                <?php endif; ?>
                        </td>
                        <td class="table-light">
                            <a href="/delete/<?php echo e($row->id); ?>" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span></a>
                            <a href="/editdata/<?php echo e($row->id); ?>" class="btn btn-success">
                                <span class="glyphicon glyphicon-pencil"></span></a>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>
            <?php echo e($data->links()); ?>


            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html><?php /**PATH C:\xampp\htdocs\project1\resources\views/datapegawai.blade.php ENDPATH**/ ?>