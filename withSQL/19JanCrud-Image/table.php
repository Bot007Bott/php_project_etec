<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div class="container mt-4 p-5 w-75 shadow rounded-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-hover btn-dark float-end mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            + Add Product
        </button>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require 'connection.php';
                    $select = "SELECT * FROM tbl_product";
                    $execute = mysqli_query($conn, $select);
                    while ($row = mysqli_fetch_assoc($execute)) {
                        echo '
                            <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['product_name'].'</td>
                                <td>'.$row['qty'].'</td>
                                <td>$ '.$row['price'].'</td>
                                <td>$ '.$row['total'].'</td>
                                <td>
                                    <img src="image/'.$row['image'].'" width="40" height="40" class="rounded-circle" alt="error">
                                </td>
                                <td>
                                    <button name="btnDelete" class="btn btn-danger">Delete</button>
                                    <button name="btnEdit" class="btn btn-warning">Edit</button>
                                </td>
                            </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="mb-2">
                                <label for="pro_name" class="form-label">Product Name</label>
                                <input name="pro_name" id="pro_name" type="text" class="form-control" placeholder="Enter Product's Name">
                            </div>
                            <div class="mb-2">
                                <label for="qty" class="form-label">Quantity</label>
                                <input name="qty" id="qty" type="number" class="form-control" placeholder="Enter Product's Quantity">
                            </div>
                            <div class="mb-2">
                                <label for="price" class="form-label">Price</label>
                                <input name="price" id="price" type="number" step="0.01" class="form-control" placeholder="Enter Product's Price">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Image</label> <br>
                                <img src="https://i.pinimg.com/736x/9d/16/4e/9d164e4e074d11ce4de0a508914537a8.jpg?fbclid=IwY2xjawPVdkRicmlkETF2eURLdXBNMzdFdVQxRWs4c3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHtcVyVV6QPKU0MhVVf6Lzj88UZygOqqNXeX09F0I49cQK3YW5nmVXPPXuuvU&brid=hDzoxEA0DX3u-fN9UIGWNg" alt="emptyPic" width="110" height="110" class="rounded-circle" id="image">
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" name="btnSubmit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>

<script>
    $(document).ready(function() {
        $('#file').hide();
        $('#image').click(function() {
            $('#file').click()
        })
        $('#file').change(function() {
            let file = this.files[0];
            if (file) {
                let image = URL.createObjectURL(file);
                $('#image').attr('src', image);
            }
        })
    })
</script>