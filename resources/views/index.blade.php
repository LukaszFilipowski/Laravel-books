<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>Listing 1 - wynik</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Book</th>
                            <th>Compatibility</th>
                            <th>Book Date</th>
                            <th>Female AVG age</th>
                            <th>Male AVG age</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stats1 as $book)
                            <tr>
                                <td>{{ $book->name }}</td>
                                <td>{{ number_format($book->compatibility, 2) }}%</td>
                                <td>{{ $book->book_date }}</td>
                                <td>{{ $book->favg != null ? $book->favg : 0  }}</td>
                                <td>{{ $book->mavg != null ? $book->mavg : 0 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <h2>Listing 2 - wynik</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Book</th>
                            <th>Compatibility</th>
                            <th>Book Date</th>
                            <th>Female AVG age</th>
                            <th>Male AVG age</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stats2 as $book)
                            <tr>
                                <td>{{ $book->name }}</td>
                                <td>{{ number_format($book->compatibility, 2) }}%</td>
                                <td>{{ $book->book_date }}</td>
                                <td>{{ $book->favg != null ? $book->favg : 0  }}</td>
                                <td>{{ $book->mavg != null ? $book->mavg : 0 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>  
        <script>
            $(document).ready(function(){
                $('.table').DataTable({
                    "order": [[ 1, "desc" ]]
                } );
            });
        </script>
    </body>
</html>
