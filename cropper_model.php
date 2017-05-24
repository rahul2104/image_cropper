
<!-- Cropping modal -->
<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                <div class="">
                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                </div>
                <div class="modal-body">
                    
                        <div class="cropper_box insidegrey_bg">
                            <div class="cropper_title text-center col-md-4 col-sm-4 col-xs-4">Upload Image</div>
                            <div class="clearfix"></div>
                            <div class="avatar-body">

                                <!-- Upload image and data -->
                                <div class="avatar-upload">
                                    <input class="avatar-src" name="avatar_src" type="hidden">
                                    <input class="avatar-data" name="avatar_data" type="hidden">
                                    <label for="avatarInput">Local upload</label>
                                    <input class="avatar-input" id="avatarInput" name="avatar_file" type="file" accept="image/x-png, image/png, image/gif, image/jpeg, image/jpg">
                                </div>

                                <!-- Crop and preview -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="avatar-wrapper"></div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-3  avatar-btns">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-cropper fa fa-rotate-left" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees"></button>

                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-cropper fa fa-rotate-right" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees"></button>

                                        </div>
                                    </div>
                                    <div class="col-md-3 avatar-zooms">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-cropper fa fa-plus" data-method="zoom" data-option="0.1" type="button" title="Zoom Out"></button>

                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-cropper fa fa-minus " data-method="zoom" data-option="-0.1" type="button" title="Zoom In"></button>

                                        </div>

                                    </div>

                                    <div class="col-md-6 text-right" style="margin-top: 30px;margin-bottom: 15px;">
                                        <button class="btn btn-danger m-r-xs" onclick="$('.close').click()" type="reset">Cancel</button>
                                        <button class="btn btn-primary avatar-save" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Loading state -->
<div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>



