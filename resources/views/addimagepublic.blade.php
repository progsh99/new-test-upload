<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="css4/bootstrap.min.css" rel="stylesheet">
<style>


@import url("https://fonts.googleapis.com/css?family=Dosis");
:root {
  /* generic */
  --gutterSm: 0.4rem;
  --gutterMd: 0.8rem;
  --gutterLg: 1.6rem;
  --gutterXl: 2.4rem;
  --gutterXx: 7.2rem;
  --colorPrimary400: #7e57c2;
  --colorPrimary600: #5e35b1;
  --colorPrimary800: #4527a0;
  --fontFamily: "Dosis", sans-serif;
  --fontSizeSm: 1.2rem;
  --fontSizeMd: 1.6rem;
  --fontSizeLg: 2.1rem;
  --fontSizeXl: 2.8rem;
  --fontSizeXx: 3.6rem;
  --lineHeightSm: 1.1;
  --lineHeightMd: 1.8;
  --transitionDuration: 300ms;
  --transitionTF: cubic-bezier(0.645, 0.045, 0.355, 1);
  /* floated labels */
  --inputPaddingV: var(--gutterMd);
  --inputPaddingH: var(--gutterLg);
  --inputFontSize: var(--fontSizeLg);
  --inputLineHeight: var(--lineHeightMd);
  --labelScaleFactor: 0.8;
  --labelDefaultPosY: 50%;
  --labelTransformedPosY: calc(
    (var(--labelDefaultPosY)) -
    (var(--inputPaddingV) * var(--labelScaleFactor)) -
    (var(--inputFontSize) * var(--inputLineHeight))
  );
  --inputTransitionDuration: var(--transitionDuration);
  --inputTransitionTF: var(--transitionTF);
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-size: 10px;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  width: 100vw;
  height: 100vh;
  color: #455A64;
  background-color: rgb(5, 67, 99);
  font-family: var(--fontFamily);
  font-size: var(--fontSizeMd);
  line-height: var(--lineHeightMd);
}

.Wrapper {
  flex: 0 0 80%;
  max-width: 80%;
}

.Title {
  margin: 0 0 var(--gutterXx) 0;
  padding: 0;
  color: #fff;
  font-size: var(--fontSizeXx);
  font-weight: 400;
  line-height: var(--lineHeightSm);
  text-align: center;
  text-shadow: -0.1rem 0.1rem 0.2rem var(--colorPrimary800);
}

.Input {
  position: relative;
}

.Input-text {
  display: block;
  margin: 0;
  padding: var(--inputPaddingV) var(--inputPaddingH);
  color: inherit;
  width: 100%;
  font-family: inherit;
  font-size: var(--inputFontSize);
  font-weight: inherit;
  line-height: var(--inputLineHeight);
  border: none;
  border-radius: 0.4rem;
  transition: box-shadow var(--transitionDuration);
}

.Input-text::-moz-placeholder {
  color: #B0BEC5;
}

.Input-text:-ms-input-placeholder {
  color: #B0BEC5;
}

.Input-text::placeholder {
  color: #B0BEC5;
}

.Input-text:focus {
  outline: none;
  box-shadow: 0.2rem 0.8rem 1.6rem var(--colorPrimary600);
}

.Input-label {
  display: block;
  position: absolute;
  bottom: 50%;
  left: 1rem;
  color: #fff;
  font-family: inherit;
  font-size: var(--inputFontSize);
  font-weight: inherit;
  line-height: var(--inputLineHeight);
  opacity: 0;
  transform: translate3d(0, var(--labelDefaultPosY), 0) scale(1);
  transform-origin: 0 0;
  transition: opacity var(--inputTransitionDuration) var(--inputTransitionTF), transform var(--inputTransitionDuration) var(--inputTransitionTF), visibility 0ms var(--inputTransitionDuration) var(--inputTransitionTF), z-index 0ms var(--inputTransitionDuration) var(--inputTransitionTF);
}

.Input-text:-moz-placeholder-shown + .Input-label {
  visibility: hidden;
  z-index: -1;
}

.Input-text:-ms-input-placeholder + .Input-label {
  visibility: hidden;
  z-index: -1;
}

.Input-text:placeholder-shown + .Input-label {
  visibility: hidden;
  z-index: -1;
}

.Input-text:not(:-moz-placeholder-shown) + .Input-label, .Input-text:focus:not(:-moz-placeholder-shown) + .Input-label {
  visibility: visible;
  z-index: 1;
  opacity: 1;
  transform: translate3d(0, var(--labelTransformedPosY), 0) scale(var(--labelScaleFactor));
  -moz-transition: transform var(--inputTransitionDuration), visibility 0ms, z-index 0ms;
  transition: transform var(--inputTransitionDuration), visibility 0ms, z-index 0ms;
}

.Input-text:not(:-ms-input-placeholder) + .Input-label, .Input-text:focus:not(:-ms-input-placeholder) + .Input-label {
  visibility: visible;
  z-index: 1;
  opacity: 1;
  transform: translate3d(0, var(--labelTransformedPosY), 0) scale(var(--labelScaleFactor));
  -ms-transition: transform var(--inputTransitionDuration), visibility 0ms, z-index 0ms;
  transition: transform var(--inputTransitionDuration), visibility 0ms, z-index 0ms;
}

.Input-text:not(:placeholder-shown) + .Input-label,
.Input-text:focus:not(:placeholder-shown) + .Input-label {
  visibility: visible;
  z-index: 1;
  opacity: 1;
  transform: translate3d(0, var(--labelTransformedPosY), 0) scale(var(--labelScaleFactor));
  transition: transform var(--inputTransitionDuration), visibility 0ms, z-index 0ms;
}

</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="Wrapper">
  <h1 class="Title">اضافة الاقتباس</h1>
  <div class="Input">
      <form  action="{{url('addimagepublic')}}"  method="post" >
      {{csrf_field()}} 
    <input type="text" id="input" name="quetext" class="Input-text" placeholder="">
    <label for="input" class="Input-label">First name</label>
    <input  class="btn btn-lg btn-primary btn-block" style ="margin-top : 3% ;margin-left : 45% ; width : 100px ; font-size : 16px ; "  type="submit" value="اضافة "> 
</form>
  </div>
</div>
<!-- partial -->


</body>
</html>
