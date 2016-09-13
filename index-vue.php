<?php include("doctype.php"); ?>

<head>
    <title>New Frontier POS System</title>
    <?php include("meta.php"); ?>
    <?php include("scripts.php"); ?>
</head>

<body>

    <div class="m-holder col-md-2"><?php include("sidebar.php"); ?></div>
    <div class="ct" id="t1">

        <div class="ct" id="t2">
            <div class="ct" id="t3">
                <div class="ct" id="t4">
                    <div class="ct" id="t5">
                        <div class="ct" id="t6">
                            <div class="ct" id="t7">
                                <div class="theader"><?php include("header.php"); ?></div>
                                <div class="page" id="p1">
                                    <?php include("pos.php"); ?>
                                </div>
                                <div class="page" id="p2">
                                    <?php include("inventory.php"); ?>
                                </div>
                                <div class="page" id="p3">
                                    <?php include("employees.php"); ?>
                                </div>
                                <div class="page" id="p4">
                                    <?php include("customers.php"); ?>
                                </div>
                                <div class="page" id="p5">
                                    <?php include("orders.php"); ?>
                                </div>
                                <div class="page" id="p6">
                                    <?php include("coupons.php"); ?>
                                </div>
                                <div class="page" id="p7">
                                    <?php include("reports.php"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"><?php include("footer/footer.php"); ?></div>
    <?php include("footer/footer-js.php"); ?>
    <?php include("modals/modals.php"); ?>

</body>
</html>