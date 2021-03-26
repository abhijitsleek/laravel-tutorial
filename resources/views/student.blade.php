<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student Details</h2>
  <!-- <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p> -->
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($Student_data as $rows)
            @if ($rows != null)
                <tr>
                    <td>{{$rows->name}}</td>
                    <td>{{$rows->email }}</td>
                    <td>{{$rows->phone}}</td>
                    <td>{{$rows->status}}</td>
                    <td><a href="edit/{{$rows->id}}">Edit</a> <a href="delete/{{$rows->id}}">Delete</a></td>
                </tr>
            @else
                There is no record
            @endif
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

