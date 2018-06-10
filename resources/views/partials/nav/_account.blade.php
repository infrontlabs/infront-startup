<aside>


    <h3 class="nav-heading">User</h3>
    <ul class="nav flex-column nav-pills mb-4">
        <li class="nav-item">
        <a class="nav-link {{ link_is_active('account') }}" href="{{ route('account.profile') }}">
            Profile
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ link_is_active('account/password') }}" href="{{ route('account.password') }}">
            Change Password
        </a>
        </li>
    </ul>

    <h3 class="nav-heading">Account</h3>
    <ul class="nav flex-column nav-pills mb-4">
        <li class="nav-item">
        <a class="nav-link {{ link_is_active('account/settings') }}" href="{{ route('account.settings') }}">
            Settings
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ link_is_active('account/billing') }}" href="{{ route('account.billing') }}">
            Billing
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ link_is_active('account/invite') }}" href="{{ route('account.invite') }}">
            Invite
        </a>
        </li>
    </ul>

    @subscribed
        <h3 class="nav-heading">Subscription</h3>
        <ul class="nav flex-column nav-pills mb-4">
            <li class="nav-item">
                <a class="nav-link {{ link_is_active('account/subscription') }}" href="{{ route('account.subscription.details') }}">
                    Details
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ link_is_active('account/subscription/change-plan') }}" href="{{ route('account.subscription.details') }}">
                    Change plan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ link_is_active('account/subscription/cancel') }}" href="{{ route('account.subscription.details') }}">
                    Cancel subscription
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ link_is_active('account/subscription/resume') }}" href="{{ route('account.subscription.details') }}">
                    Resume subscription
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.subscription.details') }}">
                    Update card
                </a>
            </li>
        </ul>
    @endsubscribed


    @if (!Auth::user()->validated)
        <i data-toggle="tooltip" data-placement="left" title="Email address has not been validated." class="fas fa-exclamation-triangle text-danger"></i>
        Email unconfirmed. <a href="{{ route('account.email.resend') }}">Resend</a>
    @endif


</aside>