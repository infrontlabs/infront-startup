@extends('layouts.account')

@section('content')

    @component('components.card')
        @slot('title')
            Subscription
        @endslot

        <form action="{{ route('account.subscribe.process') }}" method="post" id="payment-form">
            <input type="hidden" name="stripe_token" id="stripe_token" />
            {{ csrf_field() }}

            <div class="form-group">
                <label for="card-element">Select a Plan</label>
                <ul class="list-group">
                    @foreach($plans as $plan)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="plan" id="plan_{{$plan['stripe_id']}}" value="{{$plan['stripe_id']}}">
                                <label class="form-check-label" for="plan_{{$plan['stripe_id']}}">&nbsp;{{$plan['name']}}</label>
                                &nbsp;
                            </div>
                            <span>{{$plan['price']}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="form-group">
                <label for="">Billing name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Jane Doe" />
            </div>

            <div class="form-group">
                <label for="card-element">Enter Payment</label>
                <div id="card-element"></div>
            </div>

            <button class="btn btn-dark">Subscribe</button>

            <div id="card-errors" role="alert"></div>

        </form>

    @endcomponent

@endsection

@section('scripts')

@include('partials.stripe._script')

@endsection