<nav class="navbar" style="width: 100%; border-bottom: 1px solid grey;">
    <div class="p-6" style="width: min(100%, 1600px); margin-inline: auto; display: flex; align-items: center; gap: .5rem;">
        <div>
            {{ config("app.name") }}
        </div>

        <div style="margin-left: auto; width: fit-content;">
            <span>
                @if(isset($userFullName))
                    {{ $userFullName }}
                @else
                    Login
                @endif
            </span>
        </div>
    </div>
</nav>
