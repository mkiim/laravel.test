<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/css/reset.css')}}" rel="stylesheet">
</head>
<body>
  <h1>お問い合わせ</h1>
  @section('content')
  @if (count($errors) > 0)
  <p>入力し直してください</p>
  @endif
  <table>
  <form>
    <a href="{{route('contact.confirm')}}" mthod="post"></a>
      {{ csrf_field() }}
      @if ($errors->has('name'))
      <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
      @endif
        <tr>
          <td class="name">
            お名前<span class="star">※</span>
            </td>
            <td class="area">
            <input type="text" name="family-name" autocomplete="family-name">
            <input type="text" name="given-name" autocomplete="given-name">
          </td>
        </tr>
        <tr>
          <td></td>
        <td>例）山田 例）太郎</td>
        </tr>
        <tr>
          <td class="name">
          性別<span class="star">※</span>
          </td>
          <td class="area">
          <input type="radio" class="radio_btn"  name="gender" value="male" checked>男性
          <input type="radio" name="gender" value="male" class="radio_btn" >女性
          </td>
        </tr>
        @if ($errors->has('email'))
        <tr>
          <th>ERROR</th>
          <td>{{$errors->first('email')}}</td>
        </tr>
        @endif
        <tr>
          <td class="name">
          メールアドレス<span class="star">※</span>
          </td>
          <td class="area">
          <input type="email" name="email" autocomplete="email">
          </td>
          </tr>
          <tr>
          <td></td>
        <td>例）test@example.com</td>
        </tr>
        @if ($errors->has('postal_code'))
        <tr>
          <th>ERROR</th>
          <td>{{$errors->first('postal_code')}}</td>
        </tr>
        @endif
    <tr>
      <td class="name">
      郵便番号<span class="star">※</span>
      </td>
      <td class="area">
      &#12306;<input type="text" name="postal_code" autocomplete="postal-code">
      </td>
      </tr>
      <tr>
        <td></td>
        <td>例）123-4567</td>
        </tr>
        @if ($errors->has('adress'))
        <tr>
          <th>ERROR</th>
          <td>{{$errors->first('adress')}}</td>
        </tr>
        @endif
        <tr>
          <td class="name">
      住所<span class="star">※</span>
      </td>
      <td class="area">
      <input type="text" name="adress">
      </td>
      </tr>
      <tr>
        <td></td>
        <td>
          例）東京都渋谷区千駄ヶ谷1-2-3
        </td>
          </tr>
          <tr>
            <td class="name">
              建物名</td>
              <td class="area">
              <input type="text" name="adress2">
            </td>
            </tr>
            <tr>
              <td></td>
            <td>例）千駄ヶ谷マンション101</td>
            </tr>
            @if ($errors->has('opinion'))
            <tr>
              <th>ERROR</th>
              <td>{{$errors->first('opinion')}}</td>
            </tr>
            @endif
            <tr>
            <td class="name">
            ご意見<span class="star">※</span>
            </td>
            <td>
            <textarea name="opinion" cols="70" rows="5"></textarea>
            </td>
          </tr>
          </form>
</table>

<a href="{{route('contact.confirm')}}" class="btn">確認</a>
</body>
</html>