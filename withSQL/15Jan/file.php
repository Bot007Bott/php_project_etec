<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="container mt-4 p-5 shadow rounded-3 w-50">
        <form action="move_file.php" method="post" enctype="multipart/form-data">
            <img width="200px" height="200px" class="rounded-circle" src="https://i.pinimg.com/736x/9d/16/4e/9d164e4e074d11ce4de0a508914537a8.jpg?fbclid=IwY2xjawPVdkRicmlkETF2eURLdXBNMzdFdVQxRWs4c3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHtcVyVV6QPKU0MhVVf6Lzj88UZygOqqNXeX09F0I49cQK3YW5nmVXPPXuuvU&brid=hDzoxEA0DX3u-fN9UIGWNg" alt="" id="image">
            <input id="file" name="file" class="form-control" type="file"> <br> <br>
            <button type="submit" name="btnSubmit" class="btn btn-success ms-5">Submit</button>
        </form>
    </div>

</body>
</html>

<script>

    $(document).ready(function(){
        $('#file').hide()
        $('#image').click(function() {
            $('#file').click()
        })
        $('#file').change(function() {
            const file = this.files[0];
            if(file) {
                const image = URL.createObjectURL(file)
                $('#image').attr('src',image)
            }
        })
    })

</script>