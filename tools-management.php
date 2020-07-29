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
                        <h2 class="mb-0">Tools Management
                            <a class="btn btn-success btn-sm float-right" type="button" href="add-tool.php" style="float: right;">+ Add tool</a>
                        </h2>

                        <div class="p-4">
                            <input type="text" class="form-control form-control-alternative" placeholder="Search..." id="sourceinput">
                        </div>

                    </div>
                    <div class="table-responsive">
                        <div>
                            <table class="table align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Project Name</th>
                                        <th scope="col" class="sort" data-sort="budget">Command</th>
                                        <th scope="col" class="sort" data-sort="status">Status</th>
                                        <th scope="col">Github Link</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="toolTable">
                                    <?php
                                    $con = getConnectionDB() or die("Could not connect to database.");
                                    $sql = $con->prepare("SELECT * FROM tools ORDER BY name;");
                                    $sql->execute();
                                    $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
                                    // FOREACH BEGINS
                                    foreach ($resultados as $resultado) {
                                        $id = $resultado['id'];
                                        $name = $resultado['name'];
                                        $category = $resultado['category'];
                                        $category2 = $resultado['category2'];
                                        $released = $resultado['released'];
                                        $categories = $resultado['categories'];
                                        $avatar = $resultado['avatar'];
                                        $github = $resultado['github'];
                                        $cmd = $resultado['cmd'];
                                        if (is_null($avatar)) {
                                            $avatar = 'assets/img/kali.png';
                                        }
                                    ?>
                                        <tr>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="<?php echo $name ?>" src="<?php echo $avatar ?>">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm"><?php echo $name ?></span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <?php echo $cmd ?>
                                            </td>
                                            <td>
                                                <span class="badge badge-dot mr-4">
                                                    <?php
                                                    if (is_null($released)) {
                                                        echo '<i class="bg-warning"></i>
                                                        <span class="status">Unavailable</span>';
                                                    } else {
                                                        echo '<i class="bg-success"></i>
                                                        <span class="status">Available</span>';
                                                    }
                                                    ?>
                                                </span>
                                            </td>
                                            <td>
                                                <?php 
                                                if (is_null($github)) {
                                                    echo "No Links";
                                                } else {
                                                    echo "<a href='$github' target='_blank' >Link</a>";
                                                }
                                                ?>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php
                                        // FOREACH ENDS
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                include("assets/includes/footer.php")
                ?>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#sourceinput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#toolTable tr").filter(function() {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                        });
                        $(".filter-button").click(function() {
                            var value = $(this).attr('data-filter');

                            if (value == "all") {
                                //$('.filter').removeClass('hidden');
                                $('.filter').show('1000');
                            } else {
                                //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                                //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                                $(".filter").not('.' + value).hide('3000');
                                $('.filter').filter('.' + value).show('3000');

                            }
                        });

                    });
                </script>
</body>

</html>