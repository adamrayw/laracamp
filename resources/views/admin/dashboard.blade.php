@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        My Camps
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Date</th>
                                    <th>Paid Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                    <tr>
                                        <td>{{ $checkout->User->name }}</td>
                                        <td>{{ $checkout->Camp->title }}</td>
                                        <td>{{ number_format($checkout->Camp->price * 1000, 2, ',', '.') }}</td>
                                        <td>{{ $checkout->created_at->format('M d Y') }}</td>
                                        <td>
                                            @if ($checkout->payment_status == 'paid')
                                                <span class="badge bg-success">Paid</span>
                                            @else
                                                <span class="badge bg-warning">Waiting for payment</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr colspan="3">No camps registered</tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
