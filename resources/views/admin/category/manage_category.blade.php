@extends('dashboard.app')
@section('admin_content')
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="row">
            <!--HORIZONTAL-->
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                @include('includes.message')
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4>Category Add Form</h4>
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
                                                <th>Name</th>
                                                <th>description</th>
                                                <th>image</th>
                                                <th>status</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($getData as $item)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $item->category_name }}</td>
                                                    <td>{{ $item->cat_des }}</td>
                                                    <td><img style="height: 60px; width:60px;"
                                                            src="{{ asset('/images/' . $item->cat_image) }}" alt=""></td>
                                                    <td>
                                                        <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                            data-off="Inactive" id="categoryStatus"
                                                            data-id="{{ $item->category_id }}"
                                                            {{ $item->status == 0 ? 'checked' : '' }}>
                                                    </td>
                                                    <td>
                                                        @if ($item->status == 0)
                                                            <a href="{{ route('inactive-category', $item->category_id) }}"
                                                                class="btn btn-primary btn-xs"><i
                                                                    class="fa fa-thumbs-up"></i></a>
                                                        @else
                                                            <a href="{{ route('active-category', $item->category_id) }}"
                                                                class="btn btn-warning btn-xs"><i
                                                                    class="fa fa-thumbs-down"></i></a>
                                                        @endif
                                                        <a href="{{ route('edit-category', $item->category_id) }}"
                                                            class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
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
