<?php include './config/config.php'; ?>
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="index.html">Nghĩa Pro</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="./add-task.php"><i class="fa fa-plus" aria-hidden="true"></i>New Task</a></li>
                <li><a class="dropdown-item" href="./add-deadline.php"><i class="fa fa-plus" aria-hidden="true"></i>New Deadline</a></li>
                <li><a class="dropdown-item" href="./add-todo.php"><i class="fa fa-plus" aria-hidden="true"></i> New Todo</a></li>
                <li><a class="dropdown-item" href="./add-project.php"><i class="fa fa-plus" aria-hidden="true"></i> New Project</a></li>
                <li><a class="dropdown-item" href=""><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" width="55px" src="./images/<?= AVATAR ?>" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><?= USERNAME ?></p>
            <p class="app-sidebar__user-designation"><?= JOB ?></p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item " href="./index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item " href="./show-task.php"><i class="app-menu__icon fa fa fa-money"></i><span class="app-menu__label">Task</span></a></li>
        <li><a class="app-menu__item " href="./show-deadline.php"><i class="app-menu__icon fa fa-clock-o"></i><span class="app-menu__label">Deadline</span></a></li>
        <li><a class="app-menu__item " href="./show-todo.php"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">To do</span></a></li>
        <li><a class="app-menu__item " href="./show-project.php"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Project</span></a></li>
    </ul>
</aside>
