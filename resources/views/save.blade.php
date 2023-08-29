
@if(Session::has('createMessage'))
    <div class="alert alert-success">{{Session::get('createMessage')}}</div>
@endif
