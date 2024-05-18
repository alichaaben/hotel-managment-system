<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}




?>
<?php
$bookindId=$codes-> getCode();
?>

<!-- MAIN -->
<main>
    <form class="forms-sample" action="index.php?controller=bookings&action=updated&code=<?=$bookindId?>" method="POST" enctype="multipart/form-data">
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Edit Bookings </h3>
                </div>


                <div class="form-group">
                    <label for="Rtype">Room Type</label>
                    <select class="form-control" id="Rtype" name="NameRoom">
                        <?php
                        $selection = "selected";
                        foreach ($tab_R as $room) {
                            ?>
                            <option  value="<?=$room['roomId']?>"
                                <?php if ($codes->getRoomId() == $room['roomId']) {?> <?php echo $selection; }?>><?=$room['nameRoom']?></option>
                            <?php
                        }
                        ?>

                    </select>
                </div>


                <div class="form-group">
                    <label for="Check-in">Check in</label>
                    <input type="date" name="Check-in" class="form-control" value="<?=$codes->getCheckIn()?>" id="Check-in">
                </div>
                <div class="form-group">
                    <label for="Check-out">Check out</label>
                    <input type="date" name="Check-out" class="form-control" value="<?=$codes->getCheckOut()?>" id="Check-out">
                </div>
                <div class="form-group">
                    <label for="NameR">First Name</label>
                    <input type="text" name="FName" class="form-control" value="<?=$codes->getFirstName()?>" id="NameR" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="NameR">Last Name</label>
                    <input type="text" name="LName" class="form-control" value="<?=$codes->getLastName()?>" id="NameR" placeholder="Last Name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="<?=$codes->getEmail()?>" id="email" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="Phone">Phone Number</label>
                    <input type="text" name="Phone" class="form-control" value="<?=$codes->getPhone()?>" id="Phone" placeholder="Phone Number">
                </div>

                <div class="form-group">
                    <label for="Price">Total Price</label>
                    <input type="text" name="Price" class="form-control" value="<?=$codes->getTotalPrice()?>" id="Price" placeholder="Total Price">
                </div>
                <button type="submit" class="btn btn-primary mr-2">save</button>
                <button class="btn btn-light">Cancel</button>

            </div>
        </div>
    </form>
    <hr>

</main>

<!-- MAIN -->