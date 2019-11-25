<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand " href="#">
        <img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top">
        NearJobs
    </a>

    <div class="navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Algo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Algo2</a>
            </li>
        </ul>
    </div>

    <form class="form-inline mr-2">
        <div class="md-form my-0">
            <select id="lang" class="form-control form-control-sm">
                <option value="en">English</option>
                <option value="es">Español</option>
                <option value="ca">Català</option>
            </select>
        </div>
    </form>


    <form id="register" class="d-none" action="register.view.php">
        <button type="submit" id="rtr" class="btn btn-primary mr-2">Register</button>
    </form>

    <form id="logout" class="d-none" action="closesession.php">
        <button type="submit" id="logOut" class="btn btn-primary">Log out</button>
    </form>
</nav>