

<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}




?>
<!-- MAIN -->
<main>
    <form class="forms-sample" action="index.php?controller=rooms&action=created" method="POST" enctype="multipart/form-data">
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Add Room Photo</h3>
                </div>
                <div class="profile-picture-room">
                    <h1 class="upload-icon">
                        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                    </h1>
                    <input class="file-uploader" name="images[]" id="fileInput" type="file" multiple />
                </div>
                <div id="imageContainer"></div>
            </div>
        </div>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Add Room Type</h3>
                </div>
                <div class="form-group">
                    <label for="NameR">Name of room</label>
                    <input type="text" name="NameRoom" class="form-control" id="NameR" placeholder="Name of room">
                </div>

                <div class="form-group">
                    <label for="area">Area</label>
                    <input type="text" name="area" class="form-control" id="area" placeholder="Area of room sq.m">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="desc" class="form-control" id="desc" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="MaxP">Maximum Persons</label>
                    <input type="number" name="MaxP" class="form-control" id="MaxP" max="8" min="1">
                </div>
                <div class="form-group">
                    <label for="MaxCH">Maximum Children</label>
                    <input type="number" name="MaxChelid" class="form-control" id="MaxCH" max="8" min="1">
                </div>

                <div class="form-group">
                    <label for="nbroom">Total Number of Rooms (from this type)</label>
                    <input type="number" name="NbRooms" class="form-control" id="nbroom">
                </div>

                <div class="form-group">
                    <label for="price">Default Price ($)</label>
                    <input type="text" name="price" class="form-control" id="price">
                </div>


                <!--<div class="row">
                    <div class="col-md-9 form-group">
                        <label for="custom_value">Room Facilities</label>
                        <input type="text" name="RoomFacil" class="form-control" placeholder="Value" id="custom_value">
                    </div>
                    <div class="AddButt">
                        <a class="btn btn-md btn-default" href="javascript:AddCustom()">Add</a>
                    </div>
                </div>-->

                <div class="row">
                    <div class="col-md-12">
                        <table>
                            <tbody id="custom_display">
                            </tbody>
                        </table>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">save</button>
                <button class="btn btn-light">Cancel</button>

            </div>
        </div>
    </form>
    <hr>

    <footer class="footer">
        <div>

        </div>
        <br>
    </footer>


</main>

<!-- MAIN -->