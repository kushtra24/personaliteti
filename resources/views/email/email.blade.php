
<body style="background-color: #f5f8fa; font-family: 'Raleway', sans-serif; padding: 50px 0">
    
<div class="email-wrapper" style="font-family: sans-serif; text-align: center;">
    <img src="http://p.kushtrim.net/images/logo.png" height="30px" alt="personaliteti.com">
    <h3>Përshendetje, jeni Regjistruar me sukses</h3>
    <h3>Kliko buttonin për të verifikuar E-Mailin</h3>
    <a href="{{url('/verifyemail/'.$email_token)}}" style="background-color: #00b1b3; border-width: 2px; text-decoration: none; text-transform: uppercase;font-weight: 700; padding: 11px 24px; margin: 10px; font-family: 'Raleway', sans-serif; color: #fff;">Verifiko tani</a>
    <br>
    <br>
    <small>Nëse për çfardo arsye nuk mund ta klikoni butonin, kopjojeni linkun e më poshtëm në shfletuesin e juaj</small>
    <br>
    {{url('/verifyemail/'.$email_token)}}
</div>

</body>