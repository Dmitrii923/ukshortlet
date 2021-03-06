@include('front.include.header')


<div class="midArea innerArea">
	<div class="container">
	
		
		
		<h1 class="mb-4">AD COST</h1>
		<div class="text-center mb-5">
			<p>Please note that costs below are for One Ad listing.</p>
			<p>Agents will need to tick the relevant box upon payment and upload their company banner so it can be displayed alongside your listing as an added form of advertising.</p>
		</div>
		
		
		<div class="table-responsive mb-4">
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th rowspan="2">PERIOD</th>
						<th colspan="2">PRIVATE OWNER</th>
						<th colspan="2">AGENCY</th>
					</tr>
					<tr>
						<th>STANDARD LISTING</th>
						<th>FEATURED LISTING</th>
						<th>STANDARD LISTING</th>
						<th>FEATURED LISTING</th>
					</tr>
				</thead>
				<tbody>

					@foreach($res as $row)
					<tr>
						<td>{{$row->period}}k</td>
						<td>£ {{$row->private_std_list_price}}</td>
						<td>£ {{$row->private_feature_list_price}}</td>
						<td>£ {{$row->agency_std_list_price}}</td>
						<td>£ {{$row->agency_feature_list_price}}</td>
					</tr>
					@endforeach
					
					
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<td colspan="2">NB. Maximum 15 Private Owner Ads per City.</td>
						<td colspan="2">NB. Maximum 45 Agency Ads per City.</td>
					</tr>
				</tfoot>
			</table>
		</div>
		
		
		<div class="text-center">
			<p>Featured Listings are also listed as standard in the Property Drop down box pages and are given priority over Standard Listings and will appear at the top of relevant City and Property listings in order of date and time.<br>Featured Listings also appear in rotation on our Homepage sliders.</p>
			<p>All adverts are payable via  [ what is <a href="https://en.wikipedia.org/wiki/PayPal" target="_blank"><strong>PayPal</strong></a>? ]</p>
			<p>PayPals' secure facility allows you to use Debit or Credit Card if you do not already have an account with them.</p>
		</div>
	
	</div>
</div>

@include('front.include.footer')





