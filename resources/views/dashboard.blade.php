<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Booking</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/dashbo.css') }}" rel="stylesheet">
</head>
<body>
<div class="area"></div>
<nav class="main-menu">
            <ul>
                <li>
                    <a href=#>
                        <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                           Dashboard Booking
                        </span>
                    </a>
                </li>
            </ul>


</nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <h2>Bookings</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Studio ID</th>
                                <th>Booking Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->ID_Booking }}</td>
                                <td>{{ $item->ID_Studio}}</td>
                                <td>{{ $item->bookingDate}}</td>
                                <td>{{ $item->Status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
