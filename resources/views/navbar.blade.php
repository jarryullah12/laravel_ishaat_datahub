 @if(Session::has('user'))

<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
  padding: 0;
}

h2, p {
  margin: 10px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);

}

ul li {
  float: right;
}

ul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 18px 18px;
  text-decoration: none;
}

ul li a:hover {
  background-color: #fff;
  list-style: none;

}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color: #04AA6D;} /* Green */
.button2 {background-color: red;} /* Blue */
</style>
</head>
<body>
  
<ul style="padding:18px 18px; ">
    @if(Session::has('user'))
  <li><a href="/ishaat-datahub">ڈیش بورڈ</a></li>
  <li><a href="add_amad">ڈاک آمد اندراج</a></li>
  <li><a href="view_amad">ڈاک آمد فہرست</a></li>
  <li><a href="add_rawangi">روانگی ڈاک اندراج</a></li>
  <li><a href="view_rawangi">روانگی ڈاک فہرست</a></li>
  <li><a href="add_file">دفتر فائل اندراج</a></li>
  <li><a href="view_file">دفتر فائل فہرست</a></li>
  <li><a href="view_settings">پروفائل سیٹنگ</a></li>

  <!-- <li style="float:left;"><a href="#about" > نام</a></li> -->
  <li style="float:left;">
    
  <!-- <a href="#home"  >لاگ اوٹ</a> -->

<form action="logout" method="GET" style="display:inline;">
                    @csrf
                    <button class="button button1">لاگ اوٹ</button>
                </form>
</li>

@if(Session::has('user'))

@else
<li style="float:left;color:white; padding: 18px 80px;">
                    <button class="button button2">لاگ اوٹ</button>


   @endif
</li> 




</ul>
<div style="text-align:left; padding: 0px 18px; color:black;">نام:
   
  {{Session::get('user')['name']}}
                       @else {{''}}
                       @endif

</div>
 @else {{''}}
 @endif