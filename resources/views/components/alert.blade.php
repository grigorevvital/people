@if($errors->any())
    <script>
        alertify.error('There were errors. Please check the message in the red area');
    </script>
 @elseif(Session::has('sucess'))
    <script>
        alertify.normal(1111)
    </script>        
@elseif(Session::has('info'))
    <script>
        alertify.normal({{ Session::get("info")}});
    </script>    
@elseif(Session::has('warning'))
    <script>
        alertify.warning({{ Session::get("warning")}} );
    </script>    
@endif
