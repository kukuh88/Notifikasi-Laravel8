@extends('layouts.master')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Employee</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="card-title">Notifikasi</h5>
                                    @if (Session::has('sukses'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('sukses') }}
                                    @endif
                                </div>
                                <div class="col-6">
                                    <div class="right float-end">

                                    </div>
                                    <!-- Basic Modal -->
                                </div>
                            </div>
                            <!-- Table with hoverable rows -->
                            <table class="table table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Message</th>
                                        <th>User Name</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($notifications as $notification)
                                        <tr>
                                            <td>{{ $notification->data['message'] }}</td>
                                            <td>{{ $notification->user->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($notification->created_at)->format('d M Y') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
