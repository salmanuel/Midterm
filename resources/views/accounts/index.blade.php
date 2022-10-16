<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Midterm</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">IPT Midterm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-end">

                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= url('/') ?>">Home</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="<?= url('/users') ?>">Users</a>
                </li>

                <li class="nav-item">
                <a class="nav-link active" href="<?= url('/accounts') ?>">Accounts</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Accounts</h1>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="bg-primary text-dark">
                            <th>User ID</th>
                            <th>Account Name</th>
                            <th>Initial Investment</th>
                            <th>Starting Date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($accounts as $a): ?>
                            <tr>
                                <td><?= $a->user_id ?></td>
                                <td><?= $a->acct_name ?></td>
                                <td><?= $a->init_invest ?></td>
                                <td><?= $a->start_date ?></td>
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
