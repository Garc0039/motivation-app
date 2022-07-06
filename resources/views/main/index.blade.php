@extends('components.layout')

@section('content')
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
                <ul class="level">
                    <div class="level-right">
                        <li class="level-item">
                            {{-- Hover Div --}}
                            <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link">
                                        Portfolio
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
                        <li class="level-item">
                            {{-- Hover Div --}}
                            <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link">
                                        Project Assessment
                                    </a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item">
                                            Assessment
                                        </a>
                                    </div>
                                </div>
                            </nav>
                            {{-- End Hover Div--}}
                        </li>
                        <li class="level-item">
                            {{-- Hover Div --}}
                            <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link">
                                        Project Result
                                    </a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item">
                                            Result
                                        </a>
                                    </div>
                                </div>
                            </nav>
                            {{-- End Hover Div--}}
                        </li>
                    </div>
                </ul>
            </div>
        </div>
{{-- End Course 1 --}}
        <script>
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
    </div>

<div class="block has-background-black m-6">
    <div id="{{$foobar->id}}" class = "dropdown is-overlay" onclick="open({{$foobar->id}})">
        <div class = "dropdown-trigger">
            <button class = "button" aria-haspopup = "true" aria-controls = "dropdown-menu">
                <span>Course Title: FDR-2</span>
                <span class = "icon is-small">
                        <i class = "fa fa-angle-down" aria-hidden="true"></i>
                     </span>
            </button>
        </div>
        <div class = "dropdown-menu" id = "dropdown-menu" role = "menu">
            <ul class="level">
                <div class="level-right">
                    <li class="level-item">
                        {{-- Hover Div --}}
                        <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                    Portfolio
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
                    <li class="level-item">
                        {{-- Hover Div --}}
                        <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                    Project Assessment
                                </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item">
                                        Assessment
                                    </a>
                                </div>
                            </div>
                        </nav>
                        {{-- End Hover Div--}}
                    </li>
                    <li class="level-item">
                        {{-- Hover Div --}}
                        <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                    Project Result
                                </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item">
                                        Result
                                    </a>
                                </div>
                            </div>
                        </nav>
                        {{-- End Hover Div--}}
                    </li>
                </div>
            </ul>
        </div>
    </div>
{{-- End Course 1 --}}
</div>

    <script>
        function open(course)
        {
            course = document.getElementById(`${course}`)
            course.addEventListener("click", function(event) {
                //event.stopPropagation() - it stops the bubbling of an event to parent elements, by preventing parent event handlers from being executed
                event.stopPropagation();

                //classList.toggle - it toggles between adding and removing a class name from an element
                course.classList.toggle('is-active');
            });
        }
    </script>
@endsection
