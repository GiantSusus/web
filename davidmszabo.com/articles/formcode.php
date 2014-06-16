
<form method="post">
    <div><input type='text' name='name' id='name'> Name *</div>
    <div><input type='email' name='email' id='email'> Email *</div>
    <div><input type='text' name='website' id='website'> Website</div>
    Comment <br /> <textarea rows='10' name='comment' id='comment'></textarea>
    <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />
    <input type='submit' value='Submit'>
</form>
