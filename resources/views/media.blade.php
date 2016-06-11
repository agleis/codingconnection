<!doctype html>
<html lang=''>
@include('includes/head')
<body>
<div class="page-wrap">
  @include('includes/frontnav')

  
  <div id="body">
        @include('includes/frontsidebar')
  <div id="slidestuff">
    <div id="video-header">
      <h1>Why do they code?</h1>
    </div>
    <div id="videos">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/dr6b4nwo-5k" frameborder="0" allowfullscreen></iframe>
      <br /> CoverGirl #GIRLSCAN campaign for Girls Who Code
      <br /><br />
      <iframe width="560" height="315" src="https://www.youtube.com/embed/DYBPotROKC8" frameborder="0" allowfullscreen></iframe>
      <br /> Google's "Girls in a Tech World: Endless Possibilities of Computer Science"
      <br /><br />
    </div>
  </div>
  </div>
  <div id="news">
    <ul>
      <li>
        <h1>In the News</h1>
      </li>
      <li>
        <b>Accenture News</b>
        <br /><br />
        <a href="https://newsroom.accenture.com/industries/corporate-citizenship-diversity/accenture-teams-with-girls-who-code-to-support-technology-careers-for-young-women.htm">
          <img src="img/news_accenture_gwc.png"></a>
      </li>
      <li>
        <b>The Cornell Daily Sun</b>
        <br /><br />
        <a href="http://cornellsun.com/2015/10/08/girls-who-code-founder-speaks-at-cornell/">
          <img src="img/news_gwc_cornell.png"></a>
      </li>
      <li>
        <b>CBS News</b>
        <br /><br />
        <a href="http://www.cbsnews.com/news/girls-who-code-leading-charge-for-women-in-computer-science/">
          <img src="img/news_gwc_cbs.png"></a>
      </li>
    </ul>
  </div>
</div>
  @include('includes/footer')
</body>
</html>
