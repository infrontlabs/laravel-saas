@extends('layouts.account')

@section('content')
    @component('components.card')
        @slot('title')
            Subscription Details
        @endslot

        <table class="table table-borderless">
        <tbody>
            <tr>
                <th scope="row">Plan</th>
                <td>{{$details['plan']->nickname}}</td>
            </tr>
            <tr>
                <th scope="row">Next bill date</th>
                <td>{{$details['nextBillDate']}}</td>
            </tr>
            <tr>
                <th scope="row">Plan price</th>
                <td>${{$details['plan']->amount/100}}</td>
            </tr>
            <tr>
                <th scope="row">Payment method</th>
                <td>{{$details['paymentMethod']}}</td>
            </tr>
        </tbody>
        </table>

    @endcomponent
@endsection