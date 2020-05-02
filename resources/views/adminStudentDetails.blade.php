

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .table-bordered {
        border: 2px solid #000000;
        }
        .table-bordered > thead > tr {
        color: #002147;
        background-color: #ffc002; 
        }
        .table-bordered > thead > tr > th {
        font-weight: bold;
        color: #ffffff;
        background-color: #002147;
        }
      </style>
</head>
<body>
    <div class='container'>
        <br><br><br>
        <div class='row'>
            <div class="col-lg-12">
            <table id="table_format" class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th colspan="7">Student Details</th>
                      </tr>
                    <tr>
                        <td> Sr No.</td>
                        <td> Dte Id</td>
                        <td> Course</td>
                        <td> First Name </td>
                        <td> Last Name</td>
                        <td> Email </td>
                        <td>Profile</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($data as $key => $user)
                    <tr >
                        <td>{{++$key}}</td>
                        <td> {{$user->dte_id}} </td>
                        <td> {{$user->course}} </td>
                        <td> {{$user->first_name}} </td>
                        <td> {{$user->last_name}} </td>
                        <td> {{$user->email}} </td>
                        <td><a href="#">View Profile</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
       
    </div>
    </div>


</body>
</html>




