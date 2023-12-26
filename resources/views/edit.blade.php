<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My TODO APP</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h3 class="text-center">My Todo App</h3>
        <form action="/update">
          <input type="hidden" class="form-control" name="Sno" value="{{ $items['Sno'] }}">
          <div class="form-group">
            <input type="text" class="form-control" name="item" value="{{ $items['item'] }}">
          </div>
          <input type="submit" class="btn btn-primary " name="update" value="update">
        </form>
        <hr>
      </div>
    </div>
  </div>

</body>
</html>
