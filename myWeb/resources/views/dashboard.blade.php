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
