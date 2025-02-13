
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My web app </title>
    <!-- Fonts -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>


</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
        <div class="row " style="background-color: white; ">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col">
            <button class="btn btn-outline-success my-2 my-sm-0"><a href="{{ url('/studentNew/') }}">Create
                </a></button>
        </div>
    </div>
        <div class="row align-items-start" style="background-color: green; color :white">

            <div class="col">

            </div>
            <div class="col">
                Fullname
            </div>
            <div class="col">
                Student ID
            </div>
            <div class="col">
                Index
            </div>
            <div class="col">

            </div>


        </div>
        <form action="/editDeleteStudent" method="POST">
            @csrf

            @foreach($students as $st)
                <div class="row align-items-end" style="background-color: #e3f2fd; color:green; padding: 6px">
                    <div class="col">

                    </div>

                    <div class="col">

                        {{ $st->studentFullName}}

                    </div>
                    <div class="col">

                        {{ $st->studentIDNumber}}

                    </div>
                    <div class="col">

                        {{ $st->id}}

                    </div>

                    <div class="col">

                        <button class="btn btn-warning"><a href="{{url('/getEditStudent/' . $st->id) }}">Edit</a></button>

                        <button class="btn btn-warning"><a
                                href="{{ url('/getDeleteStudent/' . $st->id) }}">Delete</a></button>



                    </div>
                </div>
                <div class="row " style="background-color: white; "></div>

            @endforeach
        </form>
    </div>
    <div class="row " style="background-color: white; ">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>

        <div class="col">
            <button class="btn btn-outline-success my-2 my-sm-0"><a href="{{ url('/studentNew/') }}">Create
                </a></button>
        </div>
    </div>



    </div>
    </div>
</x-app-layout>
