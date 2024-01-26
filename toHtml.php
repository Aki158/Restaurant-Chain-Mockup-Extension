<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <!-- Bootstrap CSSを読み込む -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/Public/css/style.css">
</head>

<body>
    <?php $index = 0 ?>
    <?php foreach ($restaurantChains as $restaurantChain): ?>
        <div class="text-center my-3">
            <?php print($restaurantChain->toHTML()); ?>
        </div>
        
        <div class="container bg-info p-3">
                <h4>Restaurant Chain Information</h4>
        </div>

        <div class="container custom-container">
            <?php foreach ($restaurantChain->getRestaurantLocation() as $restaurantLocation): ?>
                <?php $index++ ?>
                <div class="accordion accordion-flush" id="accordionFlush<?php print($index); ?>">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php print($index); ?>" aria-expanded="false" aria-controls="flush-collapseOne<?php print($index); ?>">
                                <?php print($restaurantLocation->toNameHTML()); ?>
                            </button>
                        </h2>
                        <div id="flush-collapseOne<?php print($index); ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlush"> 
                            <div class="accordion-body">
                                <?php print($restaurantLocation->toHTML()); ?>
                                <div class="custom-border-bottom"></div>
                                <h5>Employees:</h5>
                                <?php foreach ($restaurantLocation->getEmployees() as $employee): ?>
                                    <div class="container">
                                        <table class="table custom-border">
                                            <tr>
                                                <td><?php print($employee->toHTML()); ?></td>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>

