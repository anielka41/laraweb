@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="d-flex justify-content-between">
                <h1 class="h3 mb-4"><strong>Użytkownicy</strong></h1>
                <div><p class="h3"><strong>Łącznie: {{ $userCount }}</strong></p></div>
            </div>

        </div>

        <div class="table-responsive">
            <div class="bootstrap-table">
                <div class="fixed-table-toolbar"></div>
                <div class="fixed-table-container" style="padding-bottom: 0;">
                    <div class="fixed-table-body">
                        <table class="table jw-table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="bs-checkbox" style="width: 3%;" data-field="0">
                                    <div class="th-inner">
                                        <label>
                                            <input name="btSelectAll" type="checkbox"><span></span>
                                        </label>
                                    </div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="text-align: left" data-field="name">
                                    <div class="th-inner sortable both">Nazwa użytkownika</div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="text-align: center; width: 18%;" data-field="email">
                                    <div class="th-inner sortable both">Akcje</div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="text-align: center; width: 15%;" data-field="email">
                                    <div class="th-inner sortable both">Email</div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="text-align: center; width: 15%;" data-field="created_at">
                                    <div class="th-inner sortable both">Utworzono</div>
                                    <div class="fht-cell"></div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr data-index="{{ $user->id }}">
                                    <td class="bs-checkbox">
                                        <label>
                                            <input data-index="{{ $user->id }}" name="btSelectItem" type="checkbox" value="{{ $user->id }}">
                                            <span></span>
                                        </label>
                                    </td>
                                    <td style="text-align: left">
                                        <div class="font-weight-bold">
                                            <a href="{{ route('users.show', $user->slug) }}"><strong>{{ $user->name }}</strong></a>
                                        </div>
                                    </td>
                                    <td style="text-align: center; width: 18%;">
                                        <ul class="list-inline mb-0 list-actions mt-1">
                                            <li class="list-inline-item">
                                                <a href="{{ route('users.show', $user->slug) }}" class="jw-table-row" data-id="{{ $user->id }}">
                                                    <button type="button" class="btn btn-info btn-sm">
                                                        <i class="bi bi-eye"></i> Zobacz
                                                    </button>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="{{ route('users.edit', $user->slug) }}" class="jw-table-row" data-id="{{ $user->id }}">
                                                    <button type="button" class="btn btn-warning btn-sm">
                                                        <i class="bi bi-pencil-square"></i> Edytuj
                                                    </button>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}">
                                                    <i class="bi bi-trash3"></i> Usuń
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="text-align: center; width: 15%;">{{ $user->email }}</td>
                                    <td style="text-align: center; width: 15%;" @if(is_null($user->email_verified_at)) class="bg-warning bg-gradient" @endif>{{ $user->created_at }}</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $users->onEachSide(2)->links() }}
            </div>
            <div class="clearfix"></div>

        </div>
    </main>
@endsection

@section('javascript')
    <script>
        let deleteUrl;
        deleteUrl = "{{ url('admin/users') }}/";
    </script>
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection