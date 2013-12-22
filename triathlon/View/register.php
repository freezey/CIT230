<h1>Registration</h1>
<p>The cost to participate in the triathlon is $45. Please do not actually send any money in, since this is a fictional triathlon.</p>
<p>The registration deadline is the 5th of March, 2021.</p>
<form action="/triathlon/FormToEmail.php" method="POST" onsubmit="alert('This is a fictional Triathlon! There will NOT be a race on the 21st of June 2021.">
    <input type="hidden" name="recipient_email" id="RecipientEmail" value="freezey@gmail.com">
    <div class="input"><label for="Name">Your Name</label><input name="name" id="Name"></div>
    <div class="input"><label for="Email">What is your email?</label><input name="Email" id="Email"></div>
    <div class="input"><label for="AgeGroup">What is your age?</label>
        <select name="AgeGroup" id="AgeGroup">
            <option value="10-15">10 to 15</option>
            <option value="16-18">15 to 18</option>
            <option value="19-30">19 to 30</option>
            <option value="30-40">30 to 40</option>
            <option value="41+">Still Young</option>
        </select>
    </div>
    <div class="input"><label for="Comments">Comments / Special Needs</label><textarea name="comments" id="Comments"></textarea></div>
    <div class="input"><input type="submit" value="Submit"></div>
</form>