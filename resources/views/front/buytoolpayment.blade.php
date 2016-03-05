<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
    $(document).ready(function(){
        document.getElementById("paypalForm").submit();
    });
</script>

@foreach($toolres as $toolrows)
<!-- <form name="paypalForm" id="paypalForm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST"> -->
<form name="paypalForm" id="paypalForm" action="https://www.paypal.com/cgi-bin/webscr" method="POST">
    {{csrf_field()}}

    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="{{$toolrows->id}}">
  {{-- <input type="hidden" name="business" value="subratasah@gmail.com"> --}}
    <input type="hidden" name="business" value="britttman@aol.com">
    <input type="hidden" name="amount" value="{{$toolrows->toolprice}}">
    <input type="hidden" name="currency_code" value="GBP">
    <input type="hidden" name="return" value="{{route('toolbuysuccess')}}">
    <input type="hidden" name="cancel_return" value="{{route('toolbuycancel')}}">
    <input type="hidden" name="address_override" value="0">
    <input type="hidden" name="item_number" value="">
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="invoice" value="{{rand(9,999)}}">
    <input type="hidden" name="cbt" value="Please click here to confirm your payment">
    <input type="hidden" name="country" value="UK">
</form>
@endforeach
