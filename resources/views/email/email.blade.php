<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway');

    body{
        background-color: #f5f8fa;
        font-family: 'Raleway', sans-serif;
    }
    .email-wrapper{
        font-family: sans-serif;
        text-align: center;
    }
    .btn-success {
        color: #fff;
    }
    h3, small{
        font-family: 'Raleway', sans-serif;
    }

    .btn {
        background-color: #00b1b3;
        border-width: 2px;
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 700;
        padding: 11px 24px;
        margin: 10px;
        font-family: 'Raleway', sans-serif;
    }
</style>

<div class="email-wrapper">
    <img src="{{asset('images/personaliteti-logo.png')}}" height="30px" alt="personaliteti.com">
    <h3>Përshendetje,</h3>
    <h3>Kliko buttonin për të verifikuar E-Mailin</h3>
    <a href="{{url('/verifyemail/'.$email_token)}}" class="btn btn-success">Verifiko tani</a>
    <br>
    <br>
    <small>Nëse për çfardo arsye nuk mund ta klikoni butonin, kopjojeni linkun e më poshtëm në shfletuesin e juaj</small>
    <br>
    {{url('/verifyemail/'.$email_token)}}
</div>