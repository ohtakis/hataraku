@extends('layouts.test')

@section('style')
<!-- CSS個別読み込みを書くスペース -->
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div>
<!--     <form action="/welcome" method="POST">
        {!! csrf_field() !!}
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_OylzmhJTBUANpxWlN0zlTcFE"
        data-amount="999"
        data-name="Demo Site"
        data-description="Widget"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="jpy">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      </script>
    </form> -->
    <input id="amount" type="number" name="money" placeholder="50円からm(_ _)m" step="50" min="50">
    <button id="customButton">差し入れする</button>
    </div>
@endsection

@section('script')
<!-- スクリプト個別読み込みを書くスペース -->
<script src="https://checkout.stripe.com/checkout.js"></script>
<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    var handler = StripeCheckout.configure({
      key: 'pk_test_OylzmhJTBUANpxWlN0zlTcFE',
      image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
      locale: 'auto',
      token: function(token) {
        // You can access the token ID with `token.id`.
        // Get the token ID to your server-side code for use.
        var stripeToken = token.id;
        var stripeEmail = token.email;
        var amount = $('#amount').val();
        $.post(
            "/welcome", /* your route here */
            { stripeToken: stripeToken, stripeEmail: stripeEmail , amount: amount},
            function(data) {
              console.log("succcess!");
            }
        );
      }
    });

    document.getElementById('customButton').addEventListener('click', function(e) {
      // Open Checkout with further options:
      handler.open({
        name: 'TEST',
        description: 'TESTTEST',
        currency: 'jpy',
        amount: $('#amount').val()
      });
      e.preventDefault();
    });

    // Close Checkout on page navigation:
    window.addEventListener('popstate', function() {
      handler.close();
    });
</script>
@endsection