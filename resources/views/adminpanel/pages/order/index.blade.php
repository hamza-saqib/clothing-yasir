@extends('adminpanel.layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Dashboard</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('adminpanel.partials.header')
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Oders Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Oders</a>
                    </li>
                    <li class="active">
                        <strong>List</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary">+ Create New</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>List of custom qoutes recieved.</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                        <tr>
                                            {{-- <th>No.</th> --}}
                                            <th>Code/ID</th>
                                            <th>Date</th>
                                            <th>Product</th>
                                            <th>QTY</th>
                                            <th>Customer</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Dimesnsions</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr class="gradeX" id="row-{{ $order->id }}">
                                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                                <td>{{sprintf("%05d", $order->id)}}</td>
                                                <td>{{ date('d-M-Y', strtotime($order->created_at)) }}</td>
                                                <td>{{ $order->product->name }}</td>
                                                <td>{{ $order->product->qty_1 }}</td>
                                                <td>{{ $order->customer_name }}</td>
                                                <td>{{ $order->customer_email }}</td>
                                                <td>{{ $order->customer_phone }}</td>
                                                <td>{{ $order->height }} x {{ $order->width }} x {{ $order->depth }} ({{ $order->unit }}) </td>
                                                <td>
                                                    @if ($order->status == 'Pending')
                                                        <span class="label label-primary">{{$order->status}}</span>
                                                    @elseif($order->status == 'Inprocess')
                                                        <span class="label label-danger">{{$order->status}}</span>
                                                    @elseif($order->status == 'Canceled')
                                                        <span class="label label-danger">{{$order->status}}</span>
                                                    @elseif($order->status == 'Shipped')
                                                        <span class="label label-danger">{{$order->status}}</span>
                                                    @elseif($order->status == 'Delivered')
                                                        <span class="label label-danger">{{$order->status}}</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.order.show', $order) }}"
                                                            class="btn-white btn btn-xs">View</a>
                                                        {{-- <a href="{{ route('admin.order.edit', $order) }}"
                                                            class="btn-white btn btn-xs">Edit</a> --}}
                                                        <button onclick="deleteRecord({{ $order->id }})"
                                                            class="btn-white btn btn-xs">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            {{-- <th>No.</th> --}}
                                            <th>Code/ID</th>
                                            <th>Date</th>
                                            <th>Product</th>
                                            <th>QTY</th>
                                            <th>Customer</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Dimesnsion</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('adminpanel.partials.footer')

    </div>
@endsection


@section('custom-script')
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function(sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function(value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });

        function deleteRecord(id) {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this record !",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function() {
                $.ajax({
                    method: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    url: "{{ route('admin.order.destroy', '') }}/" + id,
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            swal("Deleted!", "Your record has been deleted.", "success");
                            $("#row-" + id).remove();
                        } else if (response.error) {
                            swal("Coudnt Found!", "Record not Found", "error");
                        } else {
                            swal("Error!", "Not Authorize | Logical Error", "error");
                        }
                    },
                    error: function(response) {
                        swal("Error!", "Cannot delete !", "error");
                    }
                });

            });

        }
    </script>
@endsection
