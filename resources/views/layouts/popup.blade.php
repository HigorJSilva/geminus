@if (Auth::guest())
    <script type="text/javascript">
    
    window.stop();
    window.location = "/login";
    alert("Acesso negado. Por favor faça o Login.");
        
        
    </script>
    
@endif