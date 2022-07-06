@extends('components.layout')

@section('content')
@if(\App\Models\Task::all()->count() == 0)
    <p>
        Oh no.. seems like you have no courses up and running
    </p>
    <a href="{{route('file')}}">
        <button>
            Upload new PDF
        </button>
    </a>
    @else
    {{-- Menu Div --}}
    <div class="is-pulled-right mr-6 is-fixed-top">
        <nav class="navbar" role="navigation" aria-label="dropdown navigation">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Menu
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Overview
                    </a>
                    <a class="navbar-item">
                        Elements
                    </a>
                    <a class="navbar-item">
                        Components
                    </a>
                    {{--                    <hr class="navbar-divider">--}}
                    {{--                    <div class="navbar-item">--}}
                    {{--                        Version 0.9.4--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </nav>
    </div>
    {{-- End Menu Div--}}
    <br>
    {{-- Course 1--}}
    <div class="block has-background-black m-6">
        <div class = "dropdown is-overlay">
            <div class = "dropdown-trigger">
                <button class = "button" aria-haspopup = "true" aria-controls = "dropdown-menu">
                    <span>Course Title: FDR-2</span>
                    <span class = "icon is-small">
                        <i class = "fa fa-angle-down" aria-hidden="true"></i>
                     </span>
                </button>
            </div>
            <div class = "dropdown-menu" id = "dropdown-menu" role = "menu">
                <ul class="">
                    <div class="">
                        <li class="">
                            {{-- Hover Div --}}
                            <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                                <div class="navbar-item has-dropdown" id="course0">
                                    <a class="navbar-link">
                                        <label class="checkbox">
                                            <input type="checkbox" id="course00" onclick=kuku()>
                                            {{$file[0]->title}} {{$file[0]->deadline}}{{$file[0]->weight}}
                                        </label>
                                    </a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item">
                                            DevOps
                                        </a>
                                        <a class="navbar-item">
                                            Usability
                                        </a>
                                        <a class="navbar-item">
                                            Innovation
                                        </a>
                                    </div>
                                </div>
                            </nav>
                            {{-- End Hover Div--}}
                        </li>
                        <li class="has-background-warning" id="course1">
                                        <label class="checkbox">
                                            <input type="checkbox" id="course11" onclick=kuku()>
                                            {{$file[1]->title}} {{$file[1]->deadline}}{{$file[1]->weight}}
                                        </label>

                        </li>
                        <li class="has-background-warning" id="course2">

                                        <label class="checkbox">
                                            <input type="checkbox" id="course22" onclick=kuku()>
                                            {{$file[2]->title}} {{$file[2]->deadline}}{{$file[2]->weight}}
                                        </label>

                            {{-- End Hover Div--}}
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        {{-- End Course 1 --}}
    </div>
@endif
<script>

    function kuku()
    {
        console.log("hello");

        let course0 = document.getElementById(`course0`);
        let course1 = document.getElementById(`course1`);
        let course2 = document.getElementById(`course2`);

        let course00 = document.getElementById(`course00`);
        let course11 = document.getElementById(`course11`);
        let course22 = document.getElementById(`course22`);

        if(course00.checked)
        {
            course0.className = 'has-background-success';
        }
        if(course11.checked)
        {
            course1.className = 'has-background-success';
        }
        if(course22.checked)
        {
            course2.className = 'has-background-success';
        }
    }

    //DOMContentLoaded - it fires when initial HTML document has been completely loaded
    document.addEventListener('DOMContentLoaded', function () {
        // querySelector - it returns the element within the document that matches the specified selector
        var dropdown = document.querySelector('.dropdown');

        //addEventListener - attaches an event handler to the specified element.
        dropdown.addEventListener('click', function(event) {

            //event.stopPropagation() - it stops the bubbling of an event to parent elements, by preventing parent event handlers from being executed
            event.stopPropagation();

            //classList.toggle - it toggles between adding and removing a class name from an element
            dropdown.classList.toggle('is-active');
        });
    });
</script>
@endsection
