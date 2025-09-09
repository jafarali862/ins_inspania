  <div class="sidenav-menu">
  <ul class="side-nav">
            <li class="side-nav-title" data-lang="menu-title">Dashboard</li>

            <!-- <li class="side-nav-title" data-lang="apps-title">Apps</li> -->


            <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-users"></i></span>
            <span class="menu-text" data-lang="users"> Users </span>
            <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarUsers">
            <ul class="sub-menu">
            <li class="side-nav-item">
            <a href="{{ route('user.create') }}" class="side-nav-link">
            <span class="menu-text" data-lang="contacts">Add User</span>
            </a>
            </li>
            <li class="side-nav-item">
            <a href="{{ route('user.list') }}" class="side-nav-link">
            <span class="menu-text" data-lang="roles">User List</span>
            </a>
            </li>

            </ul>
            </div>
            </li>

            <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-briefcase"></i></span>
            <span class="menu-text" data-lang="projects">Insurance Company </span>
            <span class="menu-arrow"></span>
            </a>


            <div class="collapse" id="sidebarProjects">
            <ul class="sub-menu">
            <li class="side-nav-item">
            <a href="{{ route('company.create') }}" class="side-nav-link">
            <span class="menu-text" data-lang="projects">Add Company</span>
            </a>
            </li>
            <li class="side-nav-item">
            <a href="{{ route('company.list') }}" class="side-nav-link">
            <span class="menu-text" data-lang="projects-list">Company List</span>
            </a>
            </li>
            <li class="side-nav-item">
            <a href="{{ route('questions.index_question') }}" class="side-nav-link">
            <span class="menu-text" data-lang="project-details">Questionnaire List</span>
            </a>
            </li>
            <li class="side-nav-item">
            <a href="{{ route('templates.list_templates') }}" class="side-nav-link">
            <span class="menu-text" data-lang="project-kanban">Templates</span>
            </a>
            </li>

            </ul>
            </div>
            </li>




            <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false" aria-controls="sidebarInvoice" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-invoice"></i></span>
            <span class="menu-text" data-lang="invoice">  Case Management</span>
            <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarInvoice">
            <ul class="sub-menu">
            <li class="side-nav-item">
            <a href="{{ route('insurance.create') }}" class="side-nav-link">
            <span class="menu-text" data-lang="invoices">Add Case</span>
            </a>
            </li>
            <li class="side-nav-item">
            <a href="{{ route('case.index') }}" class="side-nav-link">
            <span class="menu-text" data-lang="invoice-details">Case List</span>
            </a>
            </li>
            <li class="side-nav-item">
            <a href="{{ route('assigned.case') }}" class="side-nav-link">
            <span class="menu-text" data-lang="invoice-create">Assigned Case</span>
            </a>
            </li>
            </ul>
            </div>
            </li>


            <li class="side-nav-item">
            <a href="{{ route('request.report') }}" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-chart-histogram"></i></span>
            <span class="menu-text" data-lang="metrics"> Report Management </span>
            </a>
            </li>


            <li class="side-nav-item">
            <a href="{{ route('odometer.list') }}" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-folder"></i></span>
            <span class="menu-text" data-lang="file-manager"> Odometer Reading </span>
            </a>
            </li>


            <li class="side-nav-item">
            <a href="{{ route('approval.request') }}" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-message-dots"></i></span>
            <span class="menu-text" data-lang="chat"> Approvel Request </span>
            </a>
            </li>

            <li class="side-nav-item">
            <a href="{{ route('password.reset.request') }}" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-calendar"></i></span>
            <span class="menu-text" data-lang="calendar"> Password Reset </span>
            </a>
            </li>

            <li class="side-nav-item">
            <a href="{{ route('logos') }}" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-category"></i></span>
            <span class="menu-text" data-lang="widgets"> Company Management </span>
            </a>
            </li>


            <li class="side-nav-item">
            <a href="{{ route('final.report.create') }}" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-chart-histogram"></i></span>
            <span class="menu-text" data-lang="metrics"> Make Final Report </span>
            </a>
            </li>

            </ul>
</div>