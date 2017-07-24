<div class="grid-x">
  <div class="small-1 cell">
  </div>
  <div class="text-right small-11 cell">
    @if(auth()->user())
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    @endif
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
  </div>
</div>
