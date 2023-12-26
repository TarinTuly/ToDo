<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My TODO APP</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <div class="container mt-3">
    <div class="row">
      <div class="col-md-6">
        <h3 class="text-center">My Todo App</h3>
        <form action="/add" class="mb-3">
          <div class="form-group">
            <input type="text" class="form-control" name="item" placeholder="add an item">
          </div>
          <input type="submit" class="btn btn-primary" name="add" value="Add item">
        </form>
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <table class="table">
          <thead>
            <tr>
              <th>S.no</th>
              <th>Todo Item</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
          </thead>
          @php $c = 0 @endphp
          @foreach($items as $item)
          @php $c = $c + 1 @endphp
          <tr>
            <td>{{ $c }}</td>
            <td>{{ $item['item'] }}</td>
            <td><a href="{{ "/edit/".$item['Sno'] }}">Edit</a></td>
            <td><a href="{{ "/delete/".$item['Sno'] }}">Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>

</body>

</html>
