<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Scandiweb Test assigment</title>
</head>

<body>
    <div class="container pt-5">
        <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
            <div class=" mb-2 mb-md-0">
                <a class="btn btn-primary" href="<?= BASE_URL; ?>addproduct">ADD</a>
                <button class="btn btn-danger" id="massDeleted">MASS DELETE</button>
            </div>
            <h2 class="bd-title">Product List</h2>
        </div>
        <hr>


        <form action="" method="POST" id="massForm">
            <div class="content row justify-content-center">
                <?php foreach ($data['product'] as $product) : ?>
                    <div class="card col-2 mx-5 my-2" style="height: 10rem;">
                        <input type="checkbox" class="mt-2 delete-checkbox" name="id[]" value="<?= $product['id']; ?>">
                        <div class="text-center mt-1">
                            <div class="sku">
                                <?= $product['SKU']; ?>
                            </div>
                            <div class="name">
                                <?= $product['name']; ?>
                            </div>
                            <div class="price">
                                <?= number_format($product['price'], 2, ',', '.'); ?> $
                            </div>
                            <div class="attribute">
                                <?= $product['type']; ?>: <?= $product['attribute']; ?>
                                <?php if ($product['type'] == 'Size') : ?>
                                    MB
                                <?php elseif ($product['type'] == 'Weight') : ?>
                                    KG
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </form>



        <hr class="mt-5">
        <div class="text-center">Scandiweb Test assigment</div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $("#massDeleted").click(function() {
            $("#massForm").submit();
        });
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>