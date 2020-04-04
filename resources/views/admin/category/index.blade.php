@extends('layouts.admin')

@section('contents')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Product categories</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"> <i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Product categories</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-12 text-right">

        </div>
    </div>
</div>
<div class="col-12">
    <div class="list-display-box">
                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">No:

                                    </th>
                                    <th class="th-sm">Category

                                    </th>
                                    <th class="th-sm">Status

                                    </th>
                                    <th class="th-sm">Action

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>Visible</td>
                                        <td>
                                            <ul>
                                                <li>

                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
    </div>
</div>
@endsection
