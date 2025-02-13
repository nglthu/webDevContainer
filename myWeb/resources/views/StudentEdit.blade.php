<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web with Laravel </title>
    <!-- Fonts -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>


</head>

<body>

    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h4 class="text-white">Collapsed content</h4>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <div class="container">


        <form action="/edit" method="POST">
            @csrf
            <div class="row align-items-start">
                <div class=".col-md-6">
                    <input class="form-control mr-sm-1" type="search" id="search" name="search" placeholder="Search"
                        aria-label="Search">
                </div>
                <div class=".col-md-6">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>


    <form action="/saveStudent" method="POST">
        @csrf



        <div class="row align-items-start" style="background-color: green; color :white">



            <div class="col">
                Student ID
            </div>
            <div class="col">
                Fullname
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>


        </div>



        <div class="row align-items-end" style="background-color: #e3f2fd; color:green; padding: 6px">

            <div class="col">
                <input class="form-control mr-sm-1" type="search" id="studentIDNumber" name="studentIDNumber"
                    placeholder="Student ID" aria-label="StudentID" value={{$student->studentIDNumber}}>



            </div>
            <div class="col">
                <input class="form-control mr-sm-1" type="search" id="studentFullName" name="studentFullName"
                    placeholder="Student Fullname" aria-label="Student Fullname" value={{ $student->studentFullName}}>

            </div>
            <div class="col">
                <input class="form-control mr-sm-1" id="id" name="id" placeholder="id" aria-label="id" type="hidden"
                    value={{ $student->id}}>

            </div>


            <div class="col">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>

            </div>
        </div>
        <div class="row " style="background-color: white; "></div>


    </form>
    </div>


</body>

</html>