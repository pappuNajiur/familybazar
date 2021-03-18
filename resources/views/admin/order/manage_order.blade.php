@extends('dashboard.app')
@section('admin_content')
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="row">
            <!--HORIZONTAL-->
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                @include('includes.message')
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4>Manage Order</h4>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="basic-table" class="data-table table table-striped nowrap table-hover"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="row">ID</th>
                                                <th>Custromer Name</th>
                                                <th>Phone Number</th>
                                                <th>status</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($customer as $item)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $item->customerName }}</td>
                                                    <td>{{ $item->CustomerPhoneNumber }}</td>
                                                    <td>
                                                        <button
                                                            class="btn btn-secondery">{{ $item->status == 0 ? 'pandding' : 'not pandding' }}</button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('view-order', $item->customer_id) }}"
                                                            class="btn btn-primary btn-xs">view</a>
                                                        <a href="{{ route('delete-order', $item->customer_id) }}"
                                                            id="delete-alert" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--STRIPE-->
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->


@endsection
