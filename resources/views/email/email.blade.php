<h1>Kliko buttonin me posht per te verifikuar emailin</h1>
<button class="btn btn-default">{{url('/verifyemail/'.$email_token)}}</button>

<p>Nese buttoni per cfardo arsye nuk mund ta klikoni, kopjojeni linkun e me postem ne shfletuesin e juaj</p>
{{url('/verifyemail/'.$email_token)}}