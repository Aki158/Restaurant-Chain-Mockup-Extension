<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>User Profiles</title>
    <!-- Bootstrap CSSを読み込む -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>

    <style>
        .custom-border {
            border: 1px solid #000;
            margin: 0px;
        }
        .custom-border-bottom {
            border-bottom: 1px solid #000;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .custom-container {
            border: 1px solid #ddd;
            padding: 15px;
        }
    </style>
</head>
<body>
    <?php $index = 0 ?>
    <?php foreach ($restaurantChains as $restaurantChain): ?>
        <div class='text-center my-3'>
            <?php echo $restaurantChain->toHTML(); ?>
        </div>
        
        <div class='container bg-info p-3'>
                <h4>Restaurant Chain Information</h4>
        </div>

        <div class='container custom-container'>
            <?php foreach ($restaurantChain->getRestaurantLocation() as $restaurantLocation): ?>
                <?php $index++ ?>
                <div class='accordion accordion-flush' id='accordionFlush<?php echo $index; ?>'>
                    <div class='accordion-item'>
                        <h2 class='accordion-header'>
                            <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapseOne<?php echo $index; ?>' aria-expanded='false' aria-controls='flush-collapseOne<?php echo $index; ?>'>
                                <?php echo $restaurantLocation->toNameHTML(); ?>
                            </button>
                        </h2>
                        <div id='flush-collapseOne<?php echo $index; ?>' class='accordion-collapse collapse' data-bs-parent='#accordionFlush'> 
                            <div class='accordion-body'>
                                <?php echo $restaurantLocation->toHTML(); ?>
                                <div class='custom-border-bottom'></div>
                                <h5>Employees:</h5>
                                <?php foreach ($restaurantLocation->getEmployees() as $employee): ?>
                                    <div class='container'>
                                        <table class='table custom-border'>
                                            <tr>
                                                <td><?php echo $employee->toHTML(); ?></td>
                                            </tr>     
                                        </table>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    <?php endforeach; ?>

    <!--  Separate Popper and Bootstrap JS -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js' integrity='sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js' integrity='sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF' crossorigin='anonymous'></script>
</body>
</html>

