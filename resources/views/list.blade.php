<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax To Do List</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jquery ui min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ajax ToDo List <a href="#" type="button" data-toggle="modal" data-target="#myModal" class="pull-right"><i class="fa fa-plus btn btn-primary btn-xs" aria-hidden="true"></i></a></h3>
                    </div>
                    <div class="panel-body" id="items">
                        <ul class="list-group">
                            @foreach($items as $item)
                            <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">
                                {{ $item->item }}
                                <input type="hidden" id="itemId" value="{{ $item->id }}">
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- search Box -->
        <div class="col-lg-2">
            <input type="text" name="searchItem" id="searchItem" class="form-control"  placeholder="Search Here..."/>
        </div>


        <!------------------------------Modal.. click pop up form -------------------------->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" id="addNew" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="title">Add New Item</h4>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" id="id">
                        <input type="text" id="addItem" placeholder="Enter Item here" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="button" id="addButton" class="btn btn-primary" data-dismiss="modal">Add Item</button>
                        <button type="button" id="saveChanges" class="btn btn-info"  data-dismiss="modal" style="display: none">Save changes</button>
                        <button type="button" id="delete" class="btn btn-danger"  data-dismiss="modal" style="display: none">Delete</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!------------------------------Modal.. end click pop up form -------------------------->
    </div>
</div>
{{ csrf_field() }}

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- external js that have in the public folder -->
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

<!-- jquery ui min.css -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</body>
</html>