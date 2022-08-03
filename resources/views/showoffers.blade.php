<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<style>

/**/
@import 'https://fonts.googleapis.com/css?family=Roboto:300,400,500';
/**/
/**/
/**/
* {
  box-sizing: border-box;
}

html,
body {
  width: 100%;
  height: 100%;
  font-family: "Roboto";
  font-size: 16px;
  line-height: 1.4em;
  color: #767676;
  background-color: #FFF;
}

/**/
a,
a:visited,
a:active {
  color: #4078c0;
  text-decoration: none;
}
a:hover,
a:visited:hover,
a:active:hover {
  text-decoration: underline;
}

.hidden-but-relevant, .pricing__title {
  position: absolute;
  top: auto;
  left: -99999px;
  width: 1px;
  height: 1px;
  overflow: hidden;
}

.currency.currency--dollar:before {
  content: "$";
}

.button,
.button:visited,
.button:active {
  display: block;
  padding: 1em;
  font-size: 0.875em;
  text-align: center;
  color: #FFF;
  background-color: rgb(5, 67, 99);
  border-radius: 0.3em;
}
.button:hover,
.button:visited:hover,
.button:active:hover {
  background-color: rgb(5, 67, 99);
  text-decoration: none;
}

/**/
.packages-overview {
  margin: 0 auto;
  max-width: 100%;
  
  display: inline;
  overflow: hidden;
  padding: 1em;
}

.pricing {
  float: left;
  clear: none;
  border: 1px solid #E0E0E0;
  border-radius: 0.5em;
  width: 300px;
    margin: 0 2%;
    display: inline;
    flex-direction: column;
    margin-bottom : 2% ;
    margin-left : 5% ;
}
.pricing ~ .pricing {
  margin-top: 1em;
}

.pricing__data--package {
  padding: 0.7272727273em 1.0909090909em;
  font-size: 1.375em;
  border-bottom: 1px solid #e5e5e5;
}

.pricing__data--price {
  padding: 0.4210526316em 0.6315789474em 0;
  font-size: 2.375em;
  font-weight: 300;
}

.pricing__data--overview {
  padding: 0.7142857143em 1.7142857143em 0;
}

.pricing__data--offer {
  padding: 1.1428571429em 1.7142857143em;
  margin: 1.1428571429em 0 0;
  background-color: #F5F5F5;
}

.pricing__data--action {
  padding: 1.5em;
  border-top: 1px solid #e5e5e5;
}

.pricing__data--overview,
.pricing__data--offer {
  font-size: 0.875em;
}

.pricing__data--package,
.pricing__data--price,
.pricing__data--overview,
.pricing__data--offer,
.pricing__data--action {
  line-height: 1.4em;
}

/**/
@media screen and (min-width: 916px) {
  .packages-overview {
    max-width: 100%;
  
  display: inline;
    flex-direction: row;
  }

  .pricing {
    width: 300px;
    margin: 0 2%;
    display: flex;
    flex-direction: column;
    margin-bottom : 2% ;
    margin-left : 5% ;
  }
  .pricing ~ .pricing {
    margin-top: 0;
  }

  .pricing__data--offer {
    flex-grow: 1;
  }
}


</style>

</head>
<body>
<dd class="pricing__data pricing__data--action"><a href="/addoffer" class="button"> اضافة عرض  </a></dd>

@foreach ($pr as $pr) 
<div class="packages-overview">
    <dl class="pricing pricing--personal">
        <dt class="pricing__title">Package Type</dt>
        <dd class="pricing__data pricing__data--package">{{$pr->title}}</dd>
        <dt class="pricing__title">Price per month</dt>
        <dd class="pricing__data pricing__data--price"><span class="currency currency--dollar">{{$pr->price}}</span> <span class="hidden-but-relevant">dollars</span></dd>
        <dt class="pricing__title">Package Overview</dt>
        <dd class="pricing__data pricing__data--overview">{{$pr->offer}}</dd>
        <dt class="pricing__title">Package Offers</dt>
        <dt class="pricing__title">Package Action</dt>
        <dd class="pricing__data pricing__data--action"><a href="/deleteoffer/{{$pr->id}}" class="button"> حذف هذا العرض</a></dd>
    </dl>
    
  @endforeach
</div>
<!-- partial -->
  
</body>
</html>
