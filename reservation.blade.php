<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transitaire Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/vitrine/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="/vitrine/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/vitrine/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/vitrine/css/responsive.css" rel="stylesheet" />

    <style>
        /* Personnalisation des styles */
        .sidebar {
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }

        .nav-link.active {
            background-color: #e9ecef;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <div style="display: flex;gap:20px;">
                <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Réservation') }}
                </div>
        </x-slot>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">
                                    <i class="fa fa-home"></i> Tableau de bord
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-truck"></i> Expéditions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="fa fa-calendar-check-o"></i> Réservations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-male"></i> Clients
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-info-circle"></i> Assistance
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Les réservations</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Partager</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Exporter</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                <i class="fa fa-calendar"></i> Cette semaine
                            </button>
                        </div>
                    </div>

                    <h2>Les réservations récentes</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th>Besoin</th>
                                    <th>Contacter</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->name }}</td>
                                    <td>{{ $reservation->email }}</td>
                                    <td>{{ $reservation->date }}</td>
                                    <td>{{ $reservation->time }}</td>
                                    <td>{{ $reservation->description }}</td>
                                    <td><a href="#"></a><button class="btn btn-success">Le conacter</button></td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </x-app-layout>

</body>

</html>