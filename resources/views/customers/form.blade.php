<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="{{ route('Customers.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone">
                    </div>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-select" aria-label="Default select example">
                        <option selected>Gender</option>
                        <option value="famale">Female</option>
                        <option value="male">Male</option>
                        <option value="other">Other</option>
                    </select>
                    <button type="submit" class="btn btn-primary" style="margin-top: 12px;">Submit</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>