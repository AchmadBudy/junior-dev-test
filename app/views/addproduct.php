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
                <a class="btn btn-primary" id="save">Save</a>
                <a class="btn btn-danger" href="<?= BASE_URL; ?>">Cancel</a>
            </div>
            <h2 class="bd-title">Product List</h2>
        </div>
        <hr>


        <div class="content">
            <form action="" id="product_form" method="POST">
                <div class="mb-3 row">
                    <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="sku" required name="SKU">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" required name="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="price" class="col-sm-2 col-form-label">Price ($)</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="price" required name="price">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="productType" class="col-sm-2 col-form-label">Type Switcher</label>
                    <div class="col-sm-3">
                        <select class="form-select" id="productType" required name="type">
                            <option value="Size" id="dvd">DVD</option>
                            <option value="Weight" id="book">Book</option>
                            <option value="Dimensions" id="furniture">Furniture</option>
                        </select>
                    </div>
                </div>

                <div id="attribute">

                    <div class="mb-3 row">
                        <label for="size" class="col-sm-2 col-form-label">Size (MB)</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="size" required name="attribute[]">
                        </div>
                    </div>
                    <p class="mt-2">Please, provide size in MB</p>




                </div>

            </form>
        </div>



        <hr class="mt-5">
        <div class="text-center">Scandiweb Test assigment</div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $("#save").click(function() {
            $("#product_form").submit();
        });

        const attributes = {
            "Size": '<div class="mb-3 row"> <label for="size" class="col-sm-2 col-form-label">Size (MB)</label> <div class="col-sm-3"> <input type="number" class="form-control" id="size" required name="attribute[]"> </div> </div> <p class="mt-2">Please, provide size in MB</p>',
            "Dimensions": '<div class="mb-3 row"> <label for="height" class="col-sm-2 col-form-label">Height (CM)</label> <div class="col-sm-3"> <input type="number" class="form-control" id="height" required name="attribute[]"> </div> </div> <div class="mb-3 row"> <label for="width" class="col-sm-2 col-form-label">Width (CM)</label> <div class="col-sm-3"> <input type="number" class="form-control" id="width" required name="attribute[]"> </div> </div> <div class="mb-3 row"> <label for="length" class="col-sm-2 col-form-label">Length (CM)</label> <div class="col-sm-3"> <input type="number" class="form-control" id="length" required name="attribute[]"> </div> </div> <p class="mt-2">Please, provide dimensions in CM</p>',
            "Weight": '<div class="mb-3 row"> <label for="weight" class="col-sm-2 col-form-label">Weight (KG)</label> <div class="col-sm-3"> <input type="number" class="form-control" id="weight" required name="attribute[]"> </div> </div> <p class="mt-2">Please, provide weight in KG</p>'
        };


        $("#productType").change(function() {

            $("#attribute").html("");
            $("#attribute").append(attributes[this.value]);
        });
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>