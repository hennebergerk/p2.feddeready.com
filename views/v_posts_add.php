<form method='POST' action='/posts/p_add'>

    <h4>New Post: (20 characters minimum):</h4>
    <p>
    Describe your goal in detail. Be sure to clarify your plan of action to complete your goal.
    </p>
    <textarea name='content' id='content' data-validation="length" data-validation-length="min20"></textarea>
    <br><br>
    <input type='submit' value='New post'>

</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.27/jquery.form-validator.min.js"></script>
<script> $.validate(); </script>