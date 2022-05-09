@extends('layouts.app')

@section('content')
    @include('helpers.flash-massages')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <h1 class="h3 mb-3"><strong>Panel</strong> LaraWeb</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 mt-3">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card border-0 bg-success text-white">
                        <div class="card-body py-0">
                            <div class="d-flex flex-wrap align-items-center">
                                <i class="bi display-3 bi-people-fill me-3"></i>
                                <div>
                                    <div class="fs-3 fw-bold">Użytkownicy</div>
                                    <div class="fs-5">Łącznie: {{ $userCount }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h4>Nowi użytkownicy</h4></div>
                        <div class="card-body">
                            <div class="bootstrap-table">
                                <div class="fixed-table-toolbar"></div>

                                <div class="fixed-table-container" style="padding-bottom: 0">
                                    <div class="fixed-table-header" style="display: none;">
                                        <table></table>
                                    </div>
                                    <div class="fixed-table-body">
                                        <table class="table table-bordered table-hover" id="users-table">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;" data-field="0">
                                                    <div class="th-inner ">#</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="" data-field="name">
                                                    <div class="th-inner ">Nazwa użytkownika</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="text-align: center; width: 30%; " data-field="created">
                                                    <div class="th-inner ">Data rejestracji</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr data-index="{{ $user->id }}">
                                                    <td style="width: 5%; ">{{ $user->id }}</td>
                                                    <td style="">
                                                        <a href="{{ route('users.show', $user->slug) }}">{{ $user->name }}</a>
                                                    </td>
                                                    <td style="text-align: center; width: 30%; ">{{ $user->created_at }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
