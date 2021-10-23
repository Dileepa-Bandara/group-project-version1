<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/profile.css">
    <title>Document</title>
</head>

<body>

    <div class="main-container">

        <div class="profile-view">
            <span style="font-weight:bold">User</span> profile
            <hr>
            <div class="row-one">
                <div class="row-one-column-one"><img src="" alt="Profile picture"></div>
                <div class="row-one-column-two">
                    <div class="rowOne-columnOne-content">
                        <p><?php echo "Dileepa Bandara"; ?></p>
                        <p>Employee ID</p>
                        <p>Employed since April 3,2018</p>
                        <p>Kurunegala,Sri Lanka</p>
                    </div>

                </div>
                <div class="row-one-column-three">
                    <div class="rowOne-columnTwo-content">
                        <p>Department</p>
                        <p>Position</p>
                        <p>Ruwinda@gmail.com</p>
                        <p>077 - 345678</p>
                    </div>

                </div>
            </div>
            <div class="row-two">
                <input type="file" name="" id="">
            </div>


        </div>
        <form action="" class="profile-form">
            <div class="edit-personal">
                <span style="font-weight:bold">Edit Personal </span> details
                <hr style="margin-top:0.5em;margin-bottom:0.5em">

                <div class="edit-row-one">
                    <div class="edit-column" style="width:600px"><label for="">Name :</label>
                        <input type="text"></div>

                    <div class="edit-column"><label for="">Employee ID:</label>
                        <input type="text"></div>
                    <div class="edit-column"><label for="">Department :</label>
                        <input type="text"></div>
                </div>
                <div class="edit-row-two">
                    <div class="edit-column"><label for="">Position :</label>
                        <input type="text"></div>
                    <div class="edit-column"><label for="">Email Address :</label>
                        <input type="text"></div>
                </div>
                <div class="edit-row-three">
                    <div class="edit-column" style="width:600px"><label for="">Address :</label>
                        <input type="text"></div>
                </div>
            </div>

            <div class="edit-contact">
                <span style="font-weight:bold">Edit Contact </span> details
                <hr style="margin-top:0.5em;margin-bottom:0.5em">
                <div class="edit-row-one">
                    <div class="edit-column" style="width:600px"><label for="">Contact :</label>
                        <input type="text"></div>

                </div>
                <button>Save</button>

            </div>
        </form>
    </div>

</body>

</html>