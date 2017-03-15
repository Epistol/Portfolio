
<nav class="navbar navbar-default navbar-static-top">

    <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
            <img alt="Logo" class="logo-img"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABcCAIAAABsjUUPAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OEUxQ0M1NEUzRUM4MTFFNjk2OUJDRjgxRDRENjYwMkEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OEUxQ0M1NEYzRUM4MTFFNjk2OUJDRjgxRDRENjYwMkEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4RTFDQzU0QzNFQzgxMUU2OTY5QkNGODFENEQ2NjAyQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4RTFDQzU0RDNFQzgxMUU2OTY5QkNGODFENEQ2NjAyQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqpPI9AAAAD4SURBVHja7N0xEoIwEAVQcLiBXtTa2tqDimfQoRLEMhuy8H5BDW9mk0yyE/r3+OxkmWF63K4gvrk/ThDWgQIFChQoUKBAaXpFW2ghuP3XFFqaDyXf6XzZUuQ1Kh9jChQoUA43JcdPCjtC6fLt7CkfKFCgQIECBQoUKFCgQIEiUKBAgQIFCpSmUmU3P64hIeacIB4lrhUh7ERJ+UCBAgVK+ilZ10HN1YTygQIFChQoUKBAEShQoECBAgUKFChQoECBAkVmSd6f8pMWb8X4m2pXZbgVw5gCBQqUY07JCVtRglF2dKmt8oECBQoUKFCgQEmU3m8n1vkIMADqAxzM8B7mNAAAAABJRU5ErkJggg=="/>
            <!-- Branding Image -->
        </a>
        {{--  {{ config('app.name', 'Laravel') }}--}}

    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->

            <li><a href="#profil">Profil</a></li>
            <li><a href="#comp">Competences</a></li>
            <li><a href="#exp">Experiences</a></li>
            <li><a href="epistol.info/cv">CV</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
                <a href="/en">
                <img class="flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/gb.svg" alt="United Kingdom Flag">
                </a>
            </li>
            {{--  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
     --}}
        </ul>
    </div>

</nav>


