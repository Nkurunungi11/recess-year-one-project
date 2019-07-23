@extends('header')
@section('content') 

 <center> <h2 id="headline"><b>Register new agent</b></h2> </center>
 
 <a href="/agents"><div id="add-more-container">
 	<center>
 	<div id="add-more-button"><<</div>
 	</center>
 	<p>See all agents</p>
 </div></a>
 
  <center>
  <form action="/register_agent" >
 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
	<thead>
        <tr colspan="2">   <th> Enter new agent's details </th>   </tr> 

    <tbody> 
    	<tr>  <td><label for="agentname"> Name </label></td> <td> <input type="text" name="agentname"> </td>  </tr>
    	<tr>  <td><label for="agentUsername"> Username </label></td> <td> <input type="text" name="agentUsername"> </td>  </tr> 
    	<tr>  <td><label for="signature"> signatre </label></td> <td> <input type="text" name="signature"> </td>  </tr>
    	<tr>  <td>   </td> <td> <input type="submit" value="Register"> </td>  </tr>
	</tbody>
</table>
</form>
</center>
 
@endsection
