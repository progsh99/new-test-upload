<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css/dist/aqua.min.css'>
  
  <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <style>

body {
  min-height: 100vh;
  margin: 0;
  font-size: 14px;
  color: var(--secondary-color-darkest);
}

:root {
  --secondary-color: hsl(240, 56%, 98%);
  --secondary-color-darker: hsl(240, 56%, 90%);
  --secondary-color-darkest: hsl(243, 24%, 43%);
  --info-color-darker: rgb(5, 67, 99);
  --info-color-lighter: rgb(92, 95, 178);
}

.dashboard {
  display: grid;
  grid-template-columns: repeat(3, auto);
  gap: 48px;
  margin: 12px;
}

.dashboard-sidenav {
  display: grid;
  grid-template-rows: repeat(3, auto);
  justify-items: center;
  color: white;
  background: var(--info-color-darker);
  border-radius: 30px;
}

.logo {
  padding: 36px 18px;
  font-size: 18px;
  font-weight: bold;
  color: white;
  text-decoration: none;
}

.nav-icon-list {
  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.nav-icon-list__item {
  padding: 36px 18px;

}
.nav-icon-list__item:first-child {
  padding-top: 0;
}

.logout {
  padding: 36px 18px;
}

.welcome-banner {
  padding: 18px 36px;
  color: white;
  background: var(--info-color-darker);
  border-radius: 20px;
}

.section-titles {
  display: flex;
  justify-content: space-between;

  text-align:center ;
  margin: 28px 0;
  direction :rtl;
}

.section-title {
  display: grid;
  grid-template-columns: repeat(2, auto);

  font-size: 30px;
}

.nav-btns {
  --btn-group-divider-length: 0;
  margin-left: 24px;
}
.nav-btns .btn {
  padding: 9px 0;
  line-height: 1;
}
.nav-btns .btn:first-child {
  padding-left: 15px;
  padding-right: 3px;
}
.nav-btns .btn:last-child {
  padding-left: 3px;
  padding-right: 15px;
}

.month {
  padding: 9px 18px;
  color: var(--secondary-color-darkest);
}

.time-list {
  display: grid;
  grid-template-columns: repeat(7, auto);
  column-gap: 21px;
  padding: 18px 0;
  border: 1px solid var(--secondary-color-lighter);
  border-left: none;
  border-right: none;
  list-style-type: none;
}
.time-list__item {
  display: grid;
  grid-template-rows: repeat(3, auto);
  justify-items: center;
  padding: 16px 12px;
  border-radius: 20px;
}
.time-list__item.active {
  color: white;
  background: var(--danger-color);
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.12), 0 0 6px rgba(0, 0, 0, 0.04);
}
.time-list__item.active .day-dot {
  color: white !important;
}
.time-list__item .day {
  font-weight: bold;
  margin-bottom: 18px;
}
.time-list__item .day-number {
  margin-bottom: 8px;
}
.time-list__item .day-dot {
  width: 6px;
  height: 6px;
  color: var(--dot-color);
  background: currentColor;
  border-radius: 50%;
}

.weeks-option {
  display: flex;
}
.weeks-option__item {
  color: var(--secondary-color-darkest);
  text-decoration: none;
}
.weeks-option__item:not(:last-child) {
  margin-right: 21px;
}
.weeks-option__item:not(.active) {
  opacity: 0.5;
}

.junk-list {
  display: grid;
  grid-template-columns: repeat(4, auto);
  gap: 30px;
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.junk-list__item {
  display: flex;
  flex-direction: column;
  align-items: center;
  box-sizing: border-box;
  padding: 18px 24px;
  border: 1px solid var(--secondary-color-lighter);
  border-radius: 20px;
}
.junk-list__item:not(.active) {
  max-height: 148px;
}
.junk-list__item .junk-icon {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border: 1px solid var(--info-color-darker);
  border-radius: 10px;
}
.junk-list__item .junk-name {
  margin-top: 18px;
  white-space: nowrap;
}
.junk-list__item .junk-size {
  margin-top: 9px;
  font-size: 18px;
  font-weight: bold;
  white-space: nowrap;
}
.junk-list__item.active {
  padding: 18px 3px 5px 3px;
  border: none;
  box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.1);
}
.junk-list__item.active .junk-icon {
  background: var(--info-color-darker);
}
.junk-list__item.active .junk-icon svg {
  fill: white;
}
.junk-list__item.active .junk-size {
  margin-top: 21px;
  padding: 18px 36px;
  color: white;
  background: var(--info-color-darker);
  border-radius: 15px;
}

.monitor-list {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 32px;
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.monitor-list__item {
  display: grid;
  grid-template-columns: repeat(2, auto);
  align-items: center;
  padding: 15px 30px;
  box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.1);
  border-radius: 20px;
}
.monitor-list__item .monitor-data {
  padding: 18px 0;
}
.monitor-list__item .monitor-data .monitor-type {
  font-weight: bold;
  white-space: nowrap;
  margin: 0 40px 18px 0;
}
.monitor-list__item .monitor-gauge {
  padding: 0 0 0 40px;
  border-left: 1px solid var(--secondary-color-lighter);
}
.monitor-list__item .monitor-gauge .gauge {
  --gauge-circle-color-lighter: var(--secondary-color);
  --gauge-color: var(--secondary-color-darkest);
  width: 70px;
  height: 70px;
}
.monitor-list__item .monitor-gauge .gauge::before {
  width: 87%;
  height: 87%;
  content: counter(value) "%";
}
.monitor-list__item.active {
  color: white;
  background: var(--info-color-darker);
}
.monitor-list__item.active .monitor-gauge {
  border-left-color: var(--info-color-lighter);
}
.monitor-list__item.active .gauge {
  --gauge-bg: var(--info-color-darker);
  --gauge-color-lighter: var(--info-color-lighter);
  color: white;
}

.dashboard-others {
  padding: 18px 48px;
  background: var(--secondary-color);
  border-radius: 30px;
}

.function-list {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(2, 1fr);
  gap: 20px;
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.function-list__item {
  padding: 4px;
  background: white;
  border-radius: 15px;
  transition: 0.3s;
}
.function-list__item:hover {
  box-shadow: 0 0 0 1px var(--function-color);
}
.function-list__item .function {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 4px;
  color: white;
  background: var(--function-color);
  border-radius: 15px;
}
.function-list__item .function-icon {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 10px;
}
.function-list__item .function-data {
  display: flex;
  justify-content: space-between;
  padding: 30px 16px 21px 16px;
}
.function-list__item .function-name {
  margin-right: 22px;
  white-space: nowrap;
}
.function-list__item .function-switch {
  --switch-ball-bg: var(--function-color);
  --switch-checked-bg: var(--function-color);
  --switch-border-color: var(--function-color);
  --switch-hover-border-color: transparent;
  --switch-disabled-checked-bg: transparent;
}
.function-list__item .function-switch:checked {
  --switch-border-color: var(--function-color);
}
.function-list__item.update-function:hover {
  box-shadow: 0 0 0 1px var(--secondary-color-darker);
}
.function-list__item.update-function .function-icon {
  color: var(--secondary-color-darker);
  background: white;
}
.function-list__item.update-function .function-menu {
  color: var(--secondary-color-darker);
}
.function-list__item.update-function .function-switch {
  --switch-ball-bg: var(--secondary-color-darker);
  --switch-checked-bg: var(--secondary-color-darker);
  --switch-border-color: var(--secondary-color-darker);
  --switch-hover-border-color: transparent;
  --switch-disabled-checked-bg: transparent;
}
.function-list__item.update-function .function-switch:checked {
  --switch-border-color: var(--secondary-color-darker);
}

.statistics {
  display: flex;
  flex-direction: column;
  padding: 30px;
  background: white;
  border-radius: 15px;
  box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.05);
}
.statistics .progress-data {
  display: flex;
  justify-content: space-between;
}
.statistics .progress-text {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.statistics .progress-weekday {
  margin-bottom: 14px;
}
.statistics .progress-rate {
  font-size: 18px;
  font-weight: bold;
}

.progress-list {
  display: grid;
  gap: 40px;
  padding: 30px 0 0 0;
  margin: 0;
  list-style-type: none;
}
.progress-list__item {
  display: flex;
  align-items: center;
}
.progress-list__item .weekday-abbr {
  box-sizing: border-box;
  padding-right: 36px;
  max-width: 32px;
}
.progress-list__item .progress-bar {
  --progress-bar-color: var(--secondary-color);
  width: 300px;
}
.progress-list__item.active .weekday-abbr {
  color: var(--warning-color);
}
.progress-list__item.active .progress-bar {
  --progress-color: var(--warning-color);
}


</style>

</head>
<body>
<!-- partial:index.partial.html -->
<main class="dashboard">
    <nav class="dashboard-sidenav">
        <a href="#" class="logo">روابط الصفحات </a>
        <ul class="nav-icon-list">
            <li class="nav-icon-list__item">
                <a href="/lifecare" class="logo">
                  الصفحة العامة
                   </a>
            </li>
            <li class="nav-icon-list__item">
                <a href="/" class="logo">
                  صفحة ادارة النظام 
                   </a>
            </li>
            
        </ul>
        
    </nav>
    <article class="dashboard-content">
        <header class="welcome-banner" style="direction:rtl;">
            <h2>مرحبا بك !</h2>
            <p> لوحة التحكم بما يظهر للمستخدمين </p>
        </header>
        
                   
            
                  
        <section class="section">
</br>
</br>
            <ul class="junk-list">
               


        


                <li class="junk-list__item active" style="--junk-color: var(--warning-color-darker);">
                    <div class="junk-icon">
                        <svg t="1585662864272" class="icon" fill="var(--junk-color)" viewBox="0 0 1024 1024"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="9396" width="18" height="18">
                            <path
                                d="M949 173.6c0-40.5-32.9-73.4-73.4-73.4H148.4c-40.5 0-73.4 32.9-73.4 73.4v168.1c0 16.9 5.7 32.4 15.4 44.8-9.7 12.5-15.4 28-15.4 44.9v168.1c0 15.4 4.7 29.6 12.8 41.4-8.1 11.8-12.8 26-12.8 41.4v168.1c0 40.5 32.9 73.4 73.4 73.4h727.2c40.5 0 73.4-32.9 73.4-73.4V682.3c0-15.4-4.7-29.6-12.8-41.4 8.1-11.8 12.8-26.1 12.8-41.4V431.4c0-16.9-5.7-32.4-15.4-44.8 9.6-12.4 15.4-28 15.4-44.8V173.6z m-810 0c0-5.1 4.3-9.4 9.4-9.4h727.2c5.1 0 9.4 4.3 9.4 9.4v168.1c0 5.1-4.3 9.4-9.4 9.4H148.4c-5.1 0-9.4-4.3-9.4-9.4V173.6z m746 425.9c0 5.1-4.3 9.4-9.4 9.4H148.4c-5.1 0-9.4-4.3-9.4-9.4V431.4c0-5.1 4.3-9.4 9.4-9.4h727.2c5.1 0 9.4 4.3 9.4 9.4v168.1z m0 250.9c0 5.1-4.3 9.4-9.4 9.4H148.4c-5.1 0-9.4-4.3-9.4-9.4V682.3c0-5.1 4.3-9.4 9.4-9.4h727.2c5.1 0 9.4 4.3 9.4 9.4v168.1z"
                                p-id="9397"></path>
                            <path
                                d="M229.2 289.7h122c17.7 0 32-14.3 32-32s-14.3-32-32-32h-122c-17.7 0-32 14.3-32 32s14.3 32 32 32zM351.1 483.4h-122c-17.7 0-32 14.3-32 32s14.3 32 32 32h122c17.7 0 32-14.3 32-32 0-17.6-14.3-32-32-32zM351.1 734.3h-122c-17.7 0-32 14.3-32 32s14.3 32 32 32h122c17.7 0 32-14.3 32-32s-14.3-32-32-32z"
                                p-id="9398"></path>
                        </svg>
                    </div>
                    <div class="junk-name"></div>
                    <div class="junk-size"><a href ="/country" style="color:white;text-decoration:none;"> تعديل الوجهات الدولية </a></div>
                </li> 

                <li class="junk-list__item active" style="--junk-color: var(--warning-color-darker);">
                    <div class="junk-icon">
                        <svg t="1585662864272" class="icon" fill="var(--junk-color)" viewBox="0 0 1024 1024"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="9396" width="18" height="18">
                            <path
                                d="M949 173.6c0-40.5-32.9-73.4-73.4-73.4H148.4c-40.5 0-73.4 32.9-73.4 73.4v168.1c0 16.9 5.7 32.4 15.4 44.8-9.7 12.5-15.4 28-15.4 44.9v168.1c0 15.4 4.7 29.6 12.8 41.4-8.1 11.8-12.8 26-12.8 41.4v168.1c0 40.5 32.9 73.4 73.4 73.4h727.2c40.5 0 73.4-32.9 73.4-73.4V682.3c0-15.4-4.7-29.6-12.8-41.4 8.1-11.8 12.8-26.1 12.8-41.4V431.4c0-16.9-5.7-32.4-15.4-44.8 9.6-12.4 15.4-28 15.4-44.8V173.6z m-810 0c0-5.1 4.3-9.4 9.4-9.4h727.2c5.1 0 9.4 4.3 9.4 9.4v168.1c0 5.1-4.3 9.4-9.4 9.4H148.4c-5.1 0-9.4-4.3-9.4-9.4V173.6z m746 425.9c0 5.1-4.3 9.4-9.4 9.4H148.4c-5.1 0-9.4-4.3-9.4-9.4V431.4c0-5.1 4.3-9.4 9.4-9.4h727.2c5.1 0 9.4 4.3 9.4 9.4v168.1z m0 250.9c0 5.1-4.3 9.4-9.4 9.4H148.4c-5.1 0-9.4-4.3-9.4-9.4V682.3c0-5.1 4.3-9.4 9.4-9.4h727.2c5.1 0 9.4 4.3 9.4 9.4v168.1z"
                                p-id="9397"></path>
                            <path
                                d="M229.2 289.7h122c17.7 0 32-14.3 32-32s-14.3-32-32-32h-122c-17.7 0-32 14.3-32 32s14.3 32 32 32zM351.1 483.4h-122c-17.7 0-32 14.3-32 32s14.3 32 32 32h122c17.7 0 32-14.3 32-32 0-17.6-14.3-32-32-32zM351.1 734.3h-122c-17.7 0-32 14.3-32 32s14.3 32 32 32h122c17.7 0 32-14.3 32-32s-14.3-32-32-32z"
                                p-id="9398"></path>
                        </svg>
                    </div>
                    <div class="junk-name"></div>
                    <div class="junk-size"><a href ="/showoffers" style="color:white;text-decoration:none;"> تعديل العروض   </a></div>
                </li> 
            </ul>
        </section>
        <section class="section">
            <div class="section-titles">
         
                <div class="section-title" style="direction : rtl ;">المؤشرات :</div>

            </div>
            <ul class="monitor-list">
                
                <li class="monitor-list__item active">
                <div class="monitor-gauge">
                        <p style="color:white;" id="visitcoun"></p>
                    </div>
                    <div class="monitor-data">
                        <div >عدد الزوار للصفحة العامة</div>
                    
                    </div>
                    
                </li>


                <li class="monitor-list__item active">
                <div class="monitor-gauge">
                        <p style="color:white;">{{$pr2}}</p>
                    </div>
                    <div class="monitor-data">
                        <div >عدد المكاتب  </div>
                    
                    </div>
                    
                </li>


                <li class="monitor-list__item active">
                <div class="monitor-gauge">
                        <p style="color:white;">{{$pr3}}</p>
                    </div>
                    <div class="monitor-data">
                        <div >عدد العروض  </div>
                    
                    </div>
                    
                </li>
                <li class="monitor-list__item active">
                <div class="monitor-gauge">
                        <p style="color:white;" >{{$pr}}</p>
                    </div>
                    <div class="monitor-data">
                        <div >عدد العمليات  </div>
                    
                    </div>
                    
                </li>


                <li class="monitor-list__item active">
                <div class="monitor-gauge">
                        <p style="color:white;" >{{$pr4}}</p>
                    </div>
                    <div class="monitor-data">
                        <div >عدد الخدمات  </div>
                    
                    </div>
                    
                </li>
            </ul>
        </section>
    </article>
   
     
      
       
</main>
<!-- partial -->
 

<script>

const firebaseConfig = {

apiKey: "AIzaSyBHIHhERzXQmQWWtHXHbyKUy3ZU25FmUIE",

authDomain: "kubaraa-59964.firebaseapp.com",

databaseURL: "https://kubaraa-59964-default-rtdb.firebaseio.com",

projectId: "kubaraa-59964",

storageBucket: "kubaraa-59964.appspot.com",

messagingSenderId: "72693922570",

appId: "1:72693922570:web:6a9ad466303b81f16c18f3"

};


firebase.initializeApp(firebaseConfig);


$( document ).ready(function() {
    console.log( "ready!" );

    var myvistcoun = firebase.database().ref('visitcounter');
    var myvistcoun1 = myvistcoun.child('counter');
    var myvistcoun2 = firebase.database().ref('visitcounter');
    myvistcoun1.once("value", function (blogsvi) {
   if (blogsvi.exists()) {
   // vc = blogsvi.val()  ;
   $("#visitcoun").html(blogsvi.val());
//visitcoun
  //myvistcoun2.update({counter :vc});

   }
  });

});



</script>


</body>
</html>
