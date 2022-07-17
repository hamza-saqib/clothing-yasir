@component('mail::message')
# New Order/Qoute

your have recieved new order/qoute. <br>

<br> Qoute Form : {{$qoute_form}}
<br> Page_url : {{$page_url}}
<br> Product : {{$product}}
<br> Industry : {{$industry}}
<br> Dimensions : {{$dimensions}}
<br> Unit : {{$unit}}
<br> Material : {{$material}}
<br> Color : {{$color}}
<br> Qty1 : {{$qty_1}}
<br> Qty2 : {{$qty_2}}
<br> Addons : {{$addons}}
<br> Customer Name : {{$customer_name}}
<br> Customer Email : {{$customer_email}}
<br> Customer Phone : {{$customer_phone}}
<br> Customer Note : {{$customer_note}}
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}
<br><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
