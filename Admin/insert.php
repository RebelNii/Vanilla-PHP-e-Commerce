<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Css Link-->
    <link rel="stylesheet" href="Admin.css">
    <title>Document</title>
</head>

<body>
    <div class="form">
        <form action="actions.php" method="POST" enctype="multipart/form-data">
            <div class="forms">
                <input type="text" name="name" placeholder="Product Name" value="" autocomplete="off">
            </div>
            <div class="forms">
                <input type="text" name="brand" placeholder="Product Brand" value="" autocomplete="off">
            </div>
            <div class="forms">
                <input type="text" name="price" placeholder="Product price" value="" autocomplete="off">
            </div>
            <div class="forms">
                <input type="text" name="description" placeholder="Product description" value="" autocomplete="off">
            </div>
            <div class="forms">
                <input type="text" name="category" placeholder="Product category" value="" autocomplete="off">
            </div>
            <div class="forms">
                <input type="text" name="keyword" placeholder="Product Keywords" value="" autocomplete="off">
            </div>
            <div class="forms">
                <input type="hidden" name="max_size" value="30000000">
                <input type="file" name="image" placeholder="Product Image" value="" autocomplete="off">
            </div>
            <div class="forms">
                <button id="nav-btn" name="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>