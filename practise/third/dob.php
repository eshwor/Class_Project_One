Date of Birth
<select name="year">
<option class="">Choose Year</option>
<?php $year  = range(1900,2010);
foreach($year as $key=>$val)
{
?>
<option value="<?php echo $val; ?>"><?php echo $val; ?></option>
<?php 
}?>
</select>

<select name="month">
<option class="">Choose Month</option>
<?php $month  = array("1"=>"jan",
					                  "2"=>"feb",
									  "3"=>"mar");
foreach($month as $key=>$val)
{
?>
<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
<?php 
}?>
</select>

<select name="day">
<option class="">Choose Day</option>
<?php $day  = range(1,31);
foreach($day as $key=>$val)
{
echo "<option value='$val'>$val</option>"; 
}?>
</select>