<!DOCTYPE html>
<html lang="en">
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "includecss.php" ?>

</head>


<body>
<!-- bar -->
    <?php include "navbar.php" ?>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <br>
            <div class="thumbnail">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <br><br><br>
                        <div class="thumbnail">
                            <img src="<?php echo base_url('uploads/donateImages/'.$img_path) ?>"
                                 alt="...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="caption">
                            <div class="row">
                                <br>
                                <h2>ชื่อของบริจาค : <?php echo $product_name ?></h2>
                                <h5><p>ขนาด : <?php echo $size_width." x ".$size_long ?></p>
                                <p>น้ำหนัก : <?php echo $weight_number ?></p>
                                <p>จำนวน : <?php echo $product_number ?></p>
                                <p>รายละเเอียด : <?php echo $product_detail ?></p></h5>
                            </div>

                            <div class="row">
                                <br><br><br><br><br><br><br>
                            <button class="btn btn-success">รับบริจาค</button>
                            <button class="btn btn-warning">ย้อนกลับ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div><br></div>


            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include "footer.php" ?>
</body>
</html>