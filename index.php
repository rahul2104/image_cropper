<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/cropper/cropper.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-12 text-center">
                <img src="" id='pic' height="150px" width="150px" >
            <img src="images/loading.gif" id='loader' style="display: none;">
            <input type="hidden" id="upload-disPic1" name="pic" value="">
            <a href="javascript:void(0);" class="loader-bottom-action" onClick="callme('upload-disPic1', '640', '640', 'pic', 'add', 'loader', '1')">
            <input type="button" value="Add Profile" class="btn btn-blue"></a>
            </div>
            

        </div>
        
            <?php require_once 'cropper_model.php'; ?>
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/cropper/cropper.min.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
    $('#avatar-modal').on('shown.bs.modal', function () {
        $('.alert.alert-danger.avatar-alert.alert-dismissable').remove();
    });
</script>
    </body>
</html>
