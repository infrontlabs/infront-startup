<aside>


    <h3 class="nav-heading">Personal</h3>
    <ul class="nav flex-column nav-pills mb-4">
        <li class="nav-item">
            @component('components.routenav', ['route' => 'account.index'])
                Profile
            @endcomponent
        </li>
        <li class="nav-item">
            @component('components.routenav', ['route' => 'account.password'])
                Change password
            @endcomponent
        </li>
        <li class="nav-item">
            @component('components.routenav', ['route' => 'account.user.invites'])
                Invites
            @endcomponent
        </li>
    </ul>

    <h3 class="nav-heading">
        Team {{ $account->name }}</h3>
    <ul class="nav flex-column nav-pills mb-4">
        <li class="nav-item">
            @component('components.routenav', ['route' => 'account.settings'])
                Settings
            @endcomponent
        </li>
        <li class="nav-item">
            @component('components.routenav', ['route' => 'account.team'])
                Manage Users
            @endcomponent
        </li>
        <li class="nav-item">
            @component('components.routenav', ['route' => 'accounts'])
                Switch Teams
            @endcomponent
        </li>


    @subscribed


            <li class="nav-item">
                @component('components.routenav', ['route' => 'account.subscription.index'])
                    Subscription
                @endcomponent
            </li>
            {{--  <li class="nav-item">
                @component('components.routenav', ['route' => 'account.subscription.cancel'])
                    Cancel subscription
                @endcomponent
            </li>
            <li class="nav-item">
                @component('components.routenav', ['route' => 'account.subscription.swap'])
                    Change plan
                @endcomponent
            </li>
            @endsubscriptionnotcancelled

            @subscriptioncancelled
            <li class="nav-item">
                @component('components.routenav', ['route' => 'account.subscription.resume'])
                    Resume subscription
                @endcomponent
            </li>
            @endsubscriptioncancelled

            <li class="nav-item">
                @component('components.routenav', ['route' => 'account.subscription.card'])
                    Update card
                @endcomponent
            </li>

            <li class="nav-item">
                @component('components.routenav', ['route' => 'account.subscription.invoices'])
                    Invoices
                @endcomponent
            </li>  --}}

    @endsubscribed

    @subscriptioncancelled
        <li class="nav-item">
                @component('components.routenav', ['route' => 'account.subscription.resume'])
                    Resume subscription
                @endcomponent
            </li>
    @endsubscriptioncancelled

    @if($account->onGenericTrial())
            <li class="nav-item">
                @component('components.routenav', ['route' => 'plans.index'])
                    Upgrade to a paid plan
                @endcomponent
            </li>
    @endif

    @if($account->isNotOnGenericTrial() && $account->isNotSubscribed())
            <li class="nav-item">
                @component('components.routenav', ['route' => 'plans.index'])
                    Choose a plan
                @endcomponent
            </li>
    @endif

        </ul>

    @emailnotconfirmed
        <hr>
        <p><i data-toggle="tooltip" data-placement="left" title="Email address has not been confirmed." class="fas fa-exclamation-triangle text-danger"></i>
        Email unconfirmed. <a href="{{ route('auth.email.resend') }}">Resend</a></p>
    @endemailnotconfirmed


</aside>
