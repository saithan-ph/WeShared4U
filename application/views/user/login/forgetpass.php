<!DOCTYPE html>
<html lang="en">
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('includecss'); ?>

</head>


<body>
<!-- bar -->
<?php $this->load->view('navbarlogin'); ?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <br>
        <div class="thumbnail">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">

                </div>
                <div class="col-md-6">
                    <div class="caption">
                        <h2></h2>
                        <div class="row">
                            <br>
<!--                            <h2>ชื่อของบริจาค : --><?php //echo $product_name ?><!--</h2>-->
<!--                            <h5>-->
<!--                                <p>สี : --><?php //echo $product_color ?><!--</p>-->
<!--                                <p>จำนวน : --><?php //echo $weight_number ?><!--</p>-->
<!--                                <p>น้ำหนัก : --><?php //echo $weight_number . "  " . $weight_type ?><!--</p>-->
<!--                                <p>ขนาด : --><?php //echo $size_width . " x " . $size_long . "  " . $size_type ?><!-- </p>-->
<!--                                <p>รายละเเอียด : --><?php //echo $product_detail ?><!--</p>-->
<!--                                <p>ประเภทสินค้า : --><?php //echo $product_type ?><!--</p>-->
<!---->
<!--                            </h5>-->
                        </div>


                    </div>
                </div>
            </div>
            <div><br></div>


        </div>
    </div>
</div>
<!-- footer -->
<?php $this->load->view('footer'); ?>
</body>
</html>