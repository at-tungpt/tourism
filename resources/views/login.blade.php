@extends('layouts.app')
 @section('title', 'Login')
 
 @section('bodyContent')
  <div class="loginDisplay" align="center">
                <span class="style1">Email address:
                </span>
                <input name="ctl00$TextBox1" type="text" id="TextBox1" class="style1" style="height:18px;width:90px;" />
                <span class="style1">&nbsp;&nbsp; Password:&nbsp;</span><input name="ctl00$TextBox2" type="password" id="TextBox2" class="style1" style="height:18px;width:70px;" />
                <span class="style1">&nbsp;
                </span>
                <input type="submit" name="login" value="Login" id="BT_DNhap"  style="font-weight:bold;height:22px;width:90px;margin-left: 0px" />
            </div>

<div>
<div class="jumbotron text-center">
	<h1>THE MIDDLE OF VIET NAM TOURISM!</h1>
	<p>Middle of Vietnam Vietnam including North Central, South Central and Central Highlands, the total 19 provinces. Middle of Vietnamis the intersection of charming mountain rivers, majestic nature, unique culture, blending the influence of Hindu and Chinese. An ideal destination</p>
	<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
<!-- Table -->
<table class="table width="100" border="1">
	<thead>
		<h4 class="relicsPlace text-center">RELICS PLACE</h4>
		<tr>
			<th>Relics name</th>
			<th>Address</th>
			<th>Cost</th>
			<th>Time</th>
			<th>Capacity</th>
			<th>Note</th>
			<th>Register</th>
			
			
		</tr>
	</thead>
	@foreach($relics as $a)
	<tr>
		<td><p>{{$a->relicsname}}</p></td>
		<td><p>{{$a->address}}</p></td>
		<td><p>{{$a->cost}}</p></td>
		<td><p>{{$a->time}}</p></td>
		<td><p>{{$a->capacity}}</p></td>
		<td><p>{{$a->note}}</p></td>
		<td><span class="glyphicon glyphicon-pencil"></span></td>
		
		@endforeach
	</tr>
</table>

@endsection'
</div>