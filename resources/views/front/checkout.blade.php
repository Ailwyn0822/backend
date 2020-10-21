@extends('layouts/nav_footer')

@section('css')
<link rel="stylesheet" href="./css/news_info.css">
<style>
    .Cart {
  max-width: 800px;
  margin: 50px auto;
}

.Cart__header {
  display: grid;
  grid-template-columns: 3fr 1fr 1fr 1fr 1fr;
  grid-gap: 2px;
  margin-bottom: 2px;
}

.Cart__headerGrid {
  text-align: center;
  background: #f3f3f3;
}

.Cart__product {
  display: grid;
  grid-template-columns: 2fr 7fr 3fr 3fr 3fr 3fr;
  grid-gap: 2px;
  margin-bottom: 2px;
  height: 70px;
}

.Cart__productGrid {
  padding: 5px;
}

.Cart__productImg {
  background-image: url(https://fakeimg.pl/640x480/c0cfe8/?text=Img);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.Cart__productTitle {
  overflow: hidden;
  line-height: 25px;
}

.Cart__productPrice,
.Cart__productQuantity,
.Cart__productTotal,
.Cart__productDel {
  text-align: center;
  line-height: 60px;
}

@media screen and (max-width: 820px) {
  .Cart__header {
    display: none;
  }

  .Cart__product {
    box-shadow: 2px 2px 3px 0 rgba(0, 0, 0, 0.5);
    margin-bottom: 10px;
    grid-template-rows: 1fr 1fr;
    grid-template-columns: 2fr 2fr 2fr 2fr 2fr 2fr 1fr;
    grid-template-areas:
      "img title title title title title del"
      "img price price quantity total total del";
  }

  .Cart__productImg {
    grid-area: img;
  }

  .Cart__productTitle {
    grid-area: title;
  }

  .Cart__productPrice,
  .Cart__productQuantity,
  .Cart__productTotal,
  .Cart__productDel {
    line-height: initial;
  }

  .Cart__productPrice {
    grid-area: price;
    text-align: right;
  }

  .Cart__productQuantity {
    grid-area: quantity;
    text-align: left;
  }

  .Cart__productQuantity::before {
    content: "x";
  }

  .Cart__productTotal {
    grid-area: total;
    text-align: right;
    color: red;
  }

  .Cart__productDel {
    grid-area: del;
    line-height: 60px;
    background: #ffc0cb26;
  }
}
</style>
@endsection

@section('content')
<section class="news_info">
    <div class="container" style="margin-top: 100px">
        <div class="Cart">
            <div class="Cart__header">
              <div class="Cart__headerGrid">商品</div>
              <div class="Cart__headerGrid">單價</div>
              <div class="Cart__headerGrid">數量</div>
              <div class="Cart__headerGrid">小計</div>
            </div>

            @foreach ($cart_items as $cart_item)

            <div class="Cart__product">
              <div class="Cart__productGrid Cart__productImg"></div>
              <div class="Cart__productGrid Cart__productTitle">
                {{$cart_item->name}}
              </div>
              <div class="Cart__productGrid Cart__productPrice">${{$cart_item->price}}</div>
              <div class="Cart__productGrid Cart__productQuantity">{{$cart_item->quantity}}</div>
              <div class="Cart__productGrid Cart__productTotal">${{$cart_item->price*$cart_item->quantity}}</div>
            </div>

            @endforeach

          </div>
          <p>總金額 $ : {{$total_price}}</p>
          <hr>

          <h1>收件人資訊</h1>
          <form action="" method="">
              @csrf
            <div class="form-group">
              <label for="receive_name">收件人名稱<small class="text-danger">(*必填)</small></label>
              <input type="text" class="form-control" id="receive_name"  name="receive_name" required>
            </div>
            <div class="form-group">
              <label for="receive_phone">連絡電話 <small class="text-danger">(*必填)</small></label>
              <input type="tel" class="form-control" id="receive_phone" name="receive_phone" required>
            </div>
            <div class="form-group">
                <label for="receive_mobile">連絡手機 <small class="text-danger">(*必填)</small></label>
                <input type="tel" class="form-control" id="receive_mobile" name="receive_mobile" required>
              </div>
            <div class="form-group">
                <label for="receive_address">地址 <small class="text-danger">(*必填)</small></label>
                <input type="text" class="form-control" id="receive_address" name="receive_address" required>
              </div>
              <div class="form-group">
                <label for="receive_email">E-MAIL <small class="text-danger">(*必填)</small></label>
                <input type="text" class="form-control" id="receive_email" name="receive_email" required>
              </div>
              <div class="form-group">
                <label for="receipt">發票方式 <small class="text-danger">(*必填)</small></label>
                <select name="receipt" id="receipt">
                    <option value="二聯式發票" selected>二聯式發票</option>
                    <option value="三聯式發票">三聯式發票</option>
                </select>
              </div>
              <div class="form-group">
                <label for="time_to_send">收貨時間 <small class="text-danger">(*必填)</small></label>
                <select name="time_to_send" id="time_to_send">
                    <option value="早上" selected>早上</option>
                    <option value="中午">中午</option>
                    <option value="晚上" >晚上</option>

                </select>              </div>
              <div class="form-group">
                <label for="remark">備註</label>
                <textarea class="form-control is-invalid" id="remark"  required name="remark"></textarea>
            </div>

        <button class="btn btn-success">送出</button>
          </form>

    </div>
</section>
@endsection



