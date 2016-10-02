<div style="max-width:75%; min-width:50%; margin:0 auto; padding:1em; text-align:left; font-family:arial,sans-serif;">

    <h2 style=" font-weight:bolder; margin-bottom:0.25em;">{{ $name }} <span style="font-size:1em;"><</span><span style="font-size:1em; font-weight:bolder; color:#FBB03B; text-decoration:none !important;">{{ $email
    }}</span><span style="font-size:1em;">></span></h2>


    <h3  style="font-weight:normal;">Deixou a seguinte mensagem através do formulário de contacto em <strong>www.base.dev</strong>:</h3>


    <hr style="margin:1em auto; ">

    <p style="text-align:justify; text-justify:distribute; margin:0.50em auto;">
        @foreach ($messageLines as $messageLine)
            {{ $messageLine }}<br>
        @endforeach
    </p>

</div>