@extends('admin.layout')
@section('page_title', 'Product')
@section('product_active', 'active')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Product Attribute</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
                            <li class="breadcrumb-item">Product Attribute</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('admin.product.attribute.form',['id' => 0, 'product_id' => $id]) }}" class="btn btn-sm btn-success">Add Product Attribute</a>
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @forelse ($product_attr as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->product_id }}</td>
                                        <td>
                                            <a href="{{ route('admin.product.attribute.form', ['id' => $item->id, 'product_id' => $id]) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            @if ($item->status == 1)
                                                <a href="{{ route('admin.product.attribute.status', ['id' => $item->id]) }}"
                                                    class="btn btn-info btn-sm">Active</a>
                                            @else
                                                <a href="{{ route('admin.product.attribute.status', ['id' => $item->id]) }}"
                                                    class="btn btn-danger btn-sm">Deactive</a>
                                            @endif
                                            

                                            {{-- <a href="javascript:void(0)" class="btn btn-success btn-sm">Add Attribute</a> --}}

                                            {{-- <a href="javascript:void(0)" class="btn btn-warning btn-sm delete_item"
                                                data-id="{{ $item->id }}">Delete</a> --}}
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>


        <!-- end row -->
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();

            $(".delete_item").click(function(e) {
                e.preventDefault();
                let id = $(this).attr('data-id');

                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                type: "GET",
                                url: "{{ route('admin.product.attribute.delete') }}",
                                data: {
                                    id: id
                                },
                                success: function(response) {
                                    console.log(response);
                                    if (response.success == true) {
                                        swal(response.message, {
                                            icon: "success",
                                        });
                                        setTimeout(() => {
                                            location.reload();
                                        }, 2000);
                                    } else {
                                        alert(response.message);
                                    }
                                }
                            });

                        }
                    });
            });
        });
    </script>
@endsection
