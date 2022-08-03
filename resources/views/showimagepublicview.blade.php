<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Codepen Challenge: Article Details</title>
 <style>


@import url("https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;

  --black: #1a1a1a;
  --white: #f3fdfd;
  --dark-blue: #025c85;

  --size-h1: 5rem;
  --size-h2: 1.2rem;
  --size-p: 1rem;
  --size-quote: 1.4rem;

  --serif-font: "DM Serif Display", serif;
}

html {
  scroll-behavior: smooth;
  scroll-padding-top: 2em;
}

body {
  min-height: 100vh;
  display: grid;
  place-items: center;
  background-color: var(--white);
 direction : rtl ;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  color: var(--black);
  counter-reset: num;
}

img {
  width: 100%;
  height: auto;
}

h1 {
  font-family: var(--serif-font);
  font-size: var(--size-h1);
  color: var(--dark-blue);
}
h2 {
  height: min-content;
  font-size: var(--size-h2);
  font-weight: normal;
}
p {
  font-size: var(--size-p);
  line-height: 1.5rem;
  opacity: 0.8;
}
ul {
  list-style: none;
}
a {
  text-decoration: none;
}

article {
  margin: 4em 0;
  width: 100%;
  max-width: 1080px;
  padding: 1em;
  position: relative;
}

blockquote {
  padding: 1em 0 1em 1em;
  font-size: var(--size-quote);
  font-family: var(--serif-font);
  position: relative;
}
blockquote span {
  display: block;
  font-family: "Poppins", sans-serif !important;
  font-size: 1rem;
  font-family: inherit;
  text-transform: uppercase;
  margin-top: 0.5em;
}
blockquote::before {
  position: absolute;
  top: -50px;
  left: 0;
  content: "\201C";
  font-size: 8em;
  color: var(--dark-blue);
  opacity: 0.2;
}

.nav {
  position: sticky;
  width: min-content;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: repeat(4, 40px);
  padding: 3px;
  justify-items: center;
  align-items: center;
  z-index: 10;
  background-color: var(--dark-blue);
  opacity: 0;
  transition: opacity 0.3s;
}
.nav.show {
  opacity: 1;
}

.item a {
  display: block;
  font-weight: bold;
  color: var(--white);
  opacity: 0.3;
}

.active a {
  opacity: 1;
}

.intro,
.middle,
.epilogue,
.final {
  margin-top: 6em;
}

.section {
  display: grid;
  grid-template-columns: 40% 1fr;
  column-gap: 1em;
  position: relative;
  counter-increment: num;
}
.section h2 {
  text-transform: uppercase;
  font-weight: 600;
  color: var(--dark-blue);
}
.section:not(div.blank)::before {
  position: absolute;
  content: "0" counter(num);
  left: 0;
  top: 2%;
  font-size: 4rem;
  color: var(--dark-blue);
  opacity: 0.2;
}

.blank {
  counter-reset: num;
}
.blank img {
  grid-column: 2/3;
  margin: 1em 0;
}

.hero {
  display: grid;
  grid-template-columns: 40% 1fr;
  column-gap: 1em;
  align-items: center;
  position: relative;
}
.hero div {
  height: min-content;
  padding: 1em 2em 1em 0;
}
.hero h1 {
  font-size: var(--size-h1);
  line-height: calc(var(--size-h1) + 0.5rem);
}
.hero h2 {
  margin: 2em 0 0.3em 0;
  font-size: calc(var(--size-p) + 0.2rem);
}

.intro p {
  margin: 2em 0;
  column-count: 2;
  column-gap: 2em;
}
.middle p,
.epilogue p,
.final p {
  margin-bottom: 2em;
}

.middle img {
  width: 50%;
  float: left;
  padding-right: 2em;
}

.final p:last-of-type {
  column-count: 2;
  column-gap: 2em;
}

@media (max-width: 700px) {
  article {
    margin: 1em 0;
  }
  .hero {
    grid-template-columns: 1fr;
  }
  .hero div {
    margin-bottom: 2em;
  }
  .hero h1 {
    font-size: calc(var(--size-h1) - 1rem);
  }

  .section:not(div.blank)::before {
    top: 3%;
    font-size: 4rem;
  }

  .intro p {
    margin: 1em 0;
    column-count: 1;
  }
  .final p:last-of-type {
    column-count: 1;
    column-gap: 1em;
  }
}

@media (max-width: 600px) {
  .hero h1 {
    font-size: calc(var(--size-h1) - 2rem);
  }
  .section {
    grid-template-columns: 1fr;
  }
  blockquote::before {
    top: -30px;
    font-size: 6em;
  }
  .section h2 {
    margin-bottom: 1em;
  }
  .section:not(div.blank)::before {
    top: -1.5em;
    font-size: 2rem;
  }

  html {
    scroll-padding-top: 5em;
  }
}
</style>

</head>
<body>
<?php 
$myvar = 0 ;

?>
    <a href ="/addimagepublic"  style = "font-size : 20px ; margin-top : 5% ;" >  اضافة صورة واقتباس </a>




<article>

@foreach ($pr2->where('act', '=', 'true') as $pr2) 

<?php 
$myvar = $pr2->id  ;

?>

  <div class="hero" style = "margin-bottom : 5% ; ">
    <div> 
      <p> {{$pr2->que}}    </p>
      <a href="/deletepubimg1/{{$pr2->id}} "  style = "font-size : 20px ;" > حذف  </a>
    </div>
    <img src='{{$pr2->image}}' alt='a red cardinal perched on a bare tree branch.'>
  </div>

  @endforeach



  @foreach ($pr->where('act', '=', 'false') as $pr) 
<div class="hero" style = "margin-bottom : 5% ; ">
    <div> 
      <p> {{$pr->que}}    </p>
      <a href="/deletepubimg/{{$pr->id}} "  style = "font-size : 20px ;" > حذف  </a>
</br>
      <a href="/editpubimagepr/<?php echo $myvar  ;?>/{{$pr->id}} "  style = "font-size : 20px ;" > وضع كصورة اولى  </a>
    </div>
    <img src='{{$pr->image}}' alt='a red cardinal perched on a bare tree branch.'>
  </div>

  @endforeach
</article>

<!-- partial -->
  <script>

const hero = document.querySelector(".hero");
const nav = document.querySelector(".nav");
const items = [...document.querySelectorAll(".item")];
const sections = document.querySelectorAll(".section");
const firstSection = document.querySelector(".intro a");

const scrollOptions = {
  rootMargin: "50% 0px 0px 0px"
};

const listOptions = {
  rootMargin: "0px 0px -90% 0px"
};

const sectionObserver = new IntersectionObserver(function (
  entries,
  sectionObserver
) {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      nav.classList.add("show");
    } else {
      nav.classList.remove("show");
    }
  });
},
scrollOptions);

const listObserver = new IntersectionObserver(function (entries, listObserver) {
  entries.forEach((e) => {
    if (e.isIntersecting) {
      if (e.target.id === "") return;

      items.forEach((link) => {
        if (e.target.id === link.dataset.nav) {
          link.classList.add("active");
        } else {
          link.classList.remove("active");
        }
      });
    }
  });
}, listOptions);

sectionObserver.observe(hero);

sections.forEach((item) => {
  listObserver.observe(item);
});


  </script>

</body>
</html>
