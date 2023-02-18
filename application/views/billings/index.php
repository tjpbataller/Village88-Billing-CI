<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.canvasjs.min.js"></script>
    <script src="assets/js/action.js"></script>
    <title>Client Billing</title>
</head>
<body>
    <form class="my-5 mx-auto d-flex pe-5 ps-5 w-50" action="filter" method="post">
        <label class="form-label">From: </label>
        <input class="form-control" type="date" name="from">
        <label class="form-label">To: </label>
        <input class="form-control" type="date" name="to">
        <input class="btn btn-primary btn-primary-sm" type="submit" name="submit" value="submit">
    </form>
    <div class="container-fluid w-50">
        <h4 class="mb-5">List of total charges per month:</h4>
        <table class="table mb-5">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Total Cost</th>
                </tr>
            </thead>
            <tbody>
<?php       if($billings){
                foreach($billings as $billing){
?>
                <tr class="billing">
                    <td><?= $billing["month"] ?></td>
                    <td><?= $billing["year"] ?></td>
                    <td><?= $billing["total"] ?></td>
                </tr>
<?php           }
            }
?>
            </tbody>
        </table>
        <div id="chartContainer"></div>
    </div>
</body>
</html>