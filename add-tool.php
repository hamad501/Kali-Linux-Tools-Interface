<!DOCTYPE html>
<html>
<?php
include("assets/includes/head.php");
?>

<body>
    <?php
    include("assets/includes/header.php")
    ?>

    <!-- Page content -->
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <h2 class="mb-0">Add Tool
                            <a class="btn btn-dark btn-sm float-right" type="button" href="#" style="float: right;">+ Information</a>
                        </h2>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="name-input" class="form-control-label">Name</label>
                                <input class="form-control" type="text" id="name-input" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="fullname-input" class="form-control-label">Full name</label>
                                <input class="form-control" type="text" id="fullname-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Categories</label>
                                <input class="form-control" type="text" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-url-input" class="form-control-label">Description</label>
                                <input class="form-control" type="text" id="example-url-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Site URL</label>
                                <input class="form-control" type="url" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Github URL</label>
                                <input class="form-control" type="url" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Available</label>
                                <select class="form-control" id="example-email-input">
                                    <option value="0">Unavailable</option>
                                    <option value="1">Available</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Avatar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Upload Avatar (Optional)</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Command Line</label>
                                <input class="form-control" type="text" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Target</label>
                                <input class="form-control" type="text" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Resume</label>
                                <input class="form-control" type="text" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Category</label>
                                <input class="form-control" type="text" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Category 2</label>
                                <input class="form-control" type="text" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Solution</label>
                                <textarea class="form-control" type="text" id="example-email-input" rows="4"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                include("assets/includes/footer.php")
                ?>

                <script type="text/javascript">
                    $(document).ready(function() {


                    });
                </script>
</body>

</html>