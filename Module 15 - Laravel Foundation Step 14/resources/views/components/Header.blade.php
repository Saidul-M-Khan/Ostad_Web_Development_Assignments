<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Assignment</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tasks
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('reg') }}">Task 1</a></li>
                <li><a class="dropdown-item" href="{{ url('home') }}">Task 2</a></li>
                <li><a class="dropdown-item" href="{{ url('profile') }}">Task 4</a></li>
                <li><a class="dropdown-item" href="{{ url('product') }}">Task 5 & 7</a></li>
                <li><a class="dropdown-item" href="{{ url('contact') }}">Task 6</a></li>
                <li><a class="dropdown-item" href="{{ url('/') }}">Task 8</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>
