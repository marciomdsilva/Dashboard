<header id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small class="card-subtitle mb-2 text-muted"> Settings</small></h1>
            </div>
            <div class="col-md-2">
                <!--------------------------------------------------------------------------------------------------------------------->
                <div class="dropdown create" >
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" data-toggle="modal" href="#addPage">Add Page</a>
                        <a class="dropdown-item" href="action.htmk">Action</a>
                        <a class="dropdown-item" href="anotheraction.html">Another action</a>
                        <a class="dropdown-item" href="someting.html">Something else here</a>
                    </div>
                </div>
                <!--------------------------------------------------------------------------------------------------------------------->
            </div>
        </div>
    </div>
</header>


<section id="breadcrumb">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!--------------------------------------------------------------------------------------------------------------------->
                <div class="list-group mb-3">
                    <a href="dashboard.html" class="list-group-item list-group-item-action active bg-dark ">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <a href="pages.html" class="list-group-item list-group-item-action"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge badge-pill badge-secondary float-right">198</span></a>
                    <a href="posts.html" class="list-group-item list-group-item-action"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge badge-pill badge-secondary float-right">12</span></a>
                    <a href="users.html" class="list-group-item list-group-item-action"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge badge-pill badge-secondary float-right">7</span></a>
                    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Fora de Serviço</a>
                </div>
                <!--------------------------------------------------------------------------------------------------------------------->
                <div class="card card-body bg-light dash-box">
                    <h4>Disk Space Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <h4>Bandwidth Used </h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
                    </div>
                </div>
                <!--------------------------------------------------------------------------------------------------------------------->
            </div>
            <!--WEBSITE OVERVIEW-->
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="card-header bg-dark main-color-bg">
                        <div class="card-title">Settings</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 12</h2>
                                    <h4>Users</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 33</h2>
                                    <h4>Pages</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 203</h2>
                                    <h4>Posts</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h2>
                                    <h4>Visitors</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--LATEST USERS-->



                <div class="card mb-3">
                    <div class="card-header bg-secondary main-color-bg">
                        <div class="card-title">Latest Users</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                            </tr>
                            <tr>
                                <td>Márcio Silva</td>
                                <td>emailteste@hotmail.com</td>
                                <td>Dec 10, 2016</td>
                            </tr>
                            <tr>
                                <td>Guilherme Paias</td>
                                <td>emailteste@gmail.com</td>
                                <td>Dec 13, 2016</td>
                            </tr>
                            <tr>
                                <td>Zé João</td>
                                <td>emailteste@hotmail.com</td>
                                <td>Dec 18, 2016</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Modals-->

<!--Add Page-->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>