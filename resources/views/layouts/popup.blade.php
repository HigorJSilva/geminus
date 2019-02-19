@if (Auth::guest())
    <script type="text/javascript">
    window.location = "/login";
    alert("Acesso negao. Por favor faça o login");
        
        
    </script>
    
@endif