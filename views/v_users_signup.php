<section id='signup'>
	<form name='register' id='register' method='POST' action='/users/p_signup'>
		<fieldset>
		<h3> Sign Up for tellAtale!</h3>
    		First Name:<br />
    		<input type='text' name='first_name' value='' required><br /><br />

    		Last Name:<br />
    		<input type='text' name='last_name' value='' required><br /><br />
    		
    		Select Your Time Zone:<br />
    		<select name='timezone' >
    			<option value='AST'>Atlantic Standard Time</option>
    			<option value='CST'>Central Standard Time</option>
    			<option value='EST'>Estern Standard Time</option>
    			<option value='MST'>Mountain Standard Time</option>
    			<option value='PST'>Pacific Standard Time</option>
    		</select>
    		<br /><br />
    		
    		Email:<br />
    		<input type='email' name='email' value='' required><br /><br />

    		Password:<br />
    		<input type='password' name='password' value='' required><br /><br />

    		<input type='submit' value='Sign up' class='submit'>
		</fieldset>
	</form>
</section>
