
@if (count($errors) > 0)
  
            @foreach ($errors->all() as $error)
                <script> UIkit.notify({ message : '{{ $error }}', status : 'danger', timeout : 5000, pos : 'top-center' });</script>
            @endforeach
        

@endif