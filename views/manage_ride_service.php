<h1>Manage Ride Service</h1>
<form action="">
    Customer Name:<input type="name" name="customer-name" value="Morshed" ><br>
		
	Pick-up Location:<input type="text" name="pickup-location" value="Jamuna Future Park" ><br>
	
	Drop-off Location:<input type="text" name="dropoff-location" value="Dhanmondi 32" ><br>
		
	Ride Date:<input type="date" name="ride-date" value="2023-03-15" ><br>
		
	Ride Time:<input type="time" name="ride-time" value="10:00" ><br>
		
	Ride Status:
	<select name="ride-status" >
		<option value="pending" >Pending</option>
		<option value="confirmed">Confirmed</option>
		<option value="cancelled">Cancelled</option>
	</select><br>
    <input type="submit" name="submit" value="confirm" />
</form>