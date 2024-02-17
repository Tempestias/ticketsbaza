<html>
<head>
    <?php
    if($_SESSION['url']) {
        $url = $_SESSION['url'];
        $_SESSION['url']=''; }

    ?>
    <meta http-equiv="refresh" content="3;URL=<?php echo $url; ?>">
</head>
<body>
<div class="modal fade in" id="messageModal"  tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php if($_SESSION['msg']) { echo $_SESSION['msg']; $_SESSION['msg']=''; } ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>