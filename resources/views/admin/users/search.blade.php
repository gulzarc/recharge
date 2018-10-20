@extends('layouts.deshboard_layout')

@section('content')

<div class="page-wrapper">
            
    <div class="container-fluid">
        <div class="table-responsive">
            <center><h2 class="card-title">Search Users</h2></center><hr>
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sl. No</th>
                                                <th>User ID</th>
                                                <th>Name</th>
                                                <th>Mobile No</th>
                                                <th>User Type</th>
                                                <th>Owner ID</th>
                                                <th>Package Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for($i = 1; $i <= 100; $i++)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>Active</td>
                                            </tr>
                                            @endfor
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
    </div>               
</div>
            
@endsection
@section('scripts')
<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
@stop