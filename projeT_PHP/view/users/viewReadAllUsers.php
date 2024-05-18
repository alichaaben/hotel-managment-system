<?php

session_start();


if ((!isset($_SESSION['role']) || empty($_SESSION['role'])) ) {

    header("Location: index.php?controller=login");
    exit();
}


?>


<!-- MAIN -->
<main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Manage Users</h3>
                        <a href="index.php?controller=users&action=create"> <button type="submit" href="#" class="btn btn-primary"><i class="bx bx-plus"></i>Add User</button></a>
                    </div>

                    <table id="manage-usersData">
                        <thead>
                        <tr>
                            <th class="Radu1" style="text-align: center;">Images</th>
                            <th style="text-align: center;">UserName</th>
                            <th style="text-align: center;">Email Address</th>
                            <th style="text-align: center;">Creation date</th>
                            <th style="text-align: center;">Role</th>
                            <th style="text-align: center;" >Account Status</th>
                            <th class="Radu3" style="text-align: center;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($tab_C as $users){

                        ?>
                        <tr>

                            <td><img src="<?=$users->getImage()?>"></td>
                            <td>

                                <p><?=$users->getUserName()?></p>
                            </td>
                            <td><?=$users->getEmailAddress()?></td>
                            <td><?=$users->getCreationDate()?></td>
                            <td><?=$users->getRole()?></td>
                            <?php if ($users->getAccountStatus() == "ON") {
                                $status = "Active";
                            } else {
                                $status = "notActive";
                            }
                            ?>
                            <td><span class="status <?php echo $status ?>"><?php echo $users->getAccountStatus() ?></span></td>

                            <td>
                                <a href="index.php?controller=users&action=update&idUser=<?=$users->getIdUser()?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="bx bxs-edit"></i></a>
                                <a href="index.php?controller=users&action=delete&idUser=<?=$users->getIdUser()?>" class="delete_btn_ajax btn btn-danger" title="Delete"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <div class="pagination-buttons">
                        <button class="btn btn-outline-dark btn-icon-text" onclick="previousPage('manage-usersData')">
                            <i class='bx bx-left-arrow'></i><span class="d-inline-block text-left"><b>Previous</b></span>
                        </button>
                        <button class="btn btn-outline-dark btn-icon-text" onclick="nextPage('manage-usersData')">
                            <span class="d-inline-block text-left"><b>Next</b> <i class='bx bx-right-arrow' ></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <hr>
</main>
<script src="./assetes/JS/pagination.js"></script>
<!-- MAIN -->
