<!DOCTYPE html>
<html lang="fr">

<head>
    <title>formulaire Inscription</title>
    <meta name="viewport" content="width= device-width, initial-scale=1.0" />
    <meta name="author" content="Elie Ruvinga" />
    <meta name="keywords" content="Cours, Web" />
    <meta name="description" content="Cours Web2" />

    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="./style/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./style/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"><br><br>
                <div class="card">
                    <div class="card-header bg-info text-white">STUDENT INFORMATIONS</div>
                    <div class="card-body">
                        <table class="table" border='1'>
                            <tr class="bg-dark text-white">
                                <th>Nom</th>
                                <th>Post-Nom</th>
                                <th>Age</th>
                                <th>Genre</th>
                            </tr>

                            <tr >
                                <td><?php echo $_POST['fname'] ?></td>
                                <td><?php echo $_POST['lname'] ?></td>
                                <td><?php echo $_POST['age'] ?></td>
                                <td><?php echo $_POST['gender'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
</body>

</html>