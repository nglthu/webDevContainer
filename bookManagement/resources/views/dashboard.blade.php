<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}


        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}


                    <div class="row " style="background-color: white; ">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>

                    </div>
                    <div class="row align-items-start" style="background-color: green; color :white">
                        <div class="col">

                        </div>

                        <div class="col">
                            Book Name
                        </div>
                        <div class="col">
                            Book Code
                        </div>
                        <div class="col">
                            Book Author
                        </div>
                        <div class="col">

                        </div>

                    </div>

                    @foreach($books as $st)
                    <div class="row align-items-end" style="background-color: #e3f2fd; color:green; padding: 6px">

                        <div class="col">

                        </div>
                        <div class="col">

                            {{ $st->bookName}}

                        </div>
                        <div class="col">

                            {{ $st->bookCode}}

                        </div>
                        <div class="col">

                            {{ $st->bookAuthor}}

                        </div>

                        <div class="col">

                            <button class="btn btn-warning"><a href="{{url('/getEditBook/' . $st->id) }}">Edit</a></button>

                            <button class="btn btn-warning"><a
                                    href="{{ url('/getDeleteBook/' . $st->id) }}">Delete</a></button>

                        </div>
                    </div>
                    <div class="row " style="background-color: white; "></div>

                    @endforeach

                    <div>
                        <button class="btn btn-outline-success my-2 my-sm-0"><a href="{{ url('/bookNew/') }}">Create
                            </a></button>
                    </div>

                </div>


            </div>
        </div>
    </div>
    </div>
</x-app-layout>