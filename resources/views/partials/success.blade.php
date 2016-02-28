@if(Session::has('alert'))
    <p class="alert alert-success">
                <script> UIkit.notify({ message : '{{ Session::get('alert') }}', status : 'danger', timeout : 5000, pos : 'top-center' });</script>
        
    </p>
@endif

