
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>BURCUMU-BUL</title>
    <style >
      .bg-mor{
        background: #E3BA80!important;
      }
    </style>
  </head>
  <body>
     <nav class="navbar navbar-dark bg-dark navbar-expand-lg text-white">
  <div class="container">
    

 <img  width="50" src="burclarr.png">
 <h5>
  <b>
BURÇBUL 
</b>
</h5>
  <img  width="50" src="burclarr.png">




 <div class="container">
   
      <div class="carousel-inner text-center" style="height: 80px">

        <div class="carousel-item active"height="100">
          <h4 class="display-5">
             
           DOĞUM TARİHİNİ  VE BURCUNU BİLMİYOR MUSUN?
          </h4>
          
           <a href=" #" class="btn btn-success">HEMEN ÖĞRENEBİLİRSİN</a>
        </div>
        
       
        
      </div>
       
    </div></div>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-burc" aria-controls="navbar-burc">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbar-burc">
  
</div>
  </div>

   </nav>
   <section class="bg-mor py-5">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
          <?php 
 
if($_POST){
 $adiki=$_POST['ad'];





}


           ?>

         <h4 class="display-5" px=5>
        
    Hoşgeldin <?php echo $adiki ?></h4> <br> 
        <div class="row">
<?php

if($_POST){
 $tarih=$_POST['tarih'];
 $ad=$_POST['ad'];
 $cinsiyet=$_POST['cinsiyet'];
 $kan=$_POST['kan'];
 $renk=$_POST['renk'];
 $tatlı=$_POST['tatlı'];
 $cicek=$_POST['cicek'];
 $mevsim=$_POST['mevsim'];
 $yas=2020-$tarih;

 if(is_numeric($tarih)){
  if ($renk=="Kırmızı Ve Açık Tonları" && $tatlı=="Tel kadayıf" && $cicek=="Sümbül" && $mevsim=="İlkbahar") {
    $burc ="koc";
  echo  "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının (21 Mart- 20 Nisan) günleri aralığında doğmuşsun ve KOÇ (ARİES) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";

  }
  elseif ($renk=="Yeşil" && $tatlı=="Kaymaklı ekmek kadayıfı" && $cicek=="Lale" && $mevsim=="İlkbahar") {
    $burc ="boga";
  echo "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının  (21 Nisan- 21 Mayıs) günleri aralığında doğmuşsun ve BOĞA (TAURUS) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";
  }
   elseif ($renk=="Gümüş,Mavi,Sarı,Gri" && $tatlı=="Revani" && $cicek=="Gül" && $mevsim=="İlkbahar") {
    $burc ="ikizler";
  echo "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının (22 Mayıs- 22 Haziran) günleri aralığında doğmuşsun ve  İKİZLER (GEMİNİ) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";
  }
   elseif ($renk=="Beyaz,Krem,Açık Renkler" && $tatlı=="Kalburabastı" && $cicek=="Akdeniz Lalesi" && $mevsim=="Yaz") {
    $burc ="yengec";
  echo "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının (23 Haziran- 22 Temmuz) günleri aralığında doğmuşsun ve YENGEÇ (CANCER) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";
  }
   elseif ($renk=="Sarı,Turuncu,Kırmızı,Parlak Renkler" && $tatlı=="Baklava" && $cicek=="Orkide" && $mevsim=="Yaz") {
    $burc ="aslan";
  echo  "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının  (23 Temmuz- 22 Ağustos) günleri aralığında doğmuşsun ve  ASLAN (LEO) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas.";
  }
   elseif ($renk=="Yeşil,Mavi,Kahverengi,Gri" && $tatlı=="Kemalpaşa" && $cicek=="Margit" && $mevsim=="Yaz") {
    $burc ="basak";
  echo  "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının  (23 Ağustos- 22 Eylül) günleri aralığında doğmuşsun ve BAŞAK (VİRGO) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";
  }
   elseif ($renk=="Pembe,Gül Rengi,Gök Mavisi" && $tatlı=="Güllaç" && $cicek=="Dalya" && $mevsim=="Sonbahar") {
    $burc ="terazi";
  echo "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının (23 Eylül- 22 Ekim) günleri aralığında doğmuşsun ve TERAZİ(LİBRA) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";
  }
   elseif ($renk=="Siyah,Lacivert,Bordo,Koyu Kırmızı" && $tatlı=="Kazandibi" && $cicek=="Eşek Dikeni" && $mevsim=="Sonbahar") {
    $burc ="akrep";
  echo  "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsunVerdiğin bilgilere göre $tarih yılının (23 Ekim- 21 Kasım)) günleri aralığında doğmuşsun ve  AKREP (SCORPİUS) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";
  }
   elseif ($renk=="Lila,Leylak,Mor" && $tatlı=="Keşkül" && $cicek=="Zambak" && $mevsim=="Sonbahar") {
    $burc ="yay";
  echo  "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının (22 Kasım- 21 Aralık) günleri aralığında doğmuşsun ve YAY (ZODYAK) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";
  }
   elseif ($renk=="Siyah,Koyu Kahverengi,Koyu Mavi,Menekşe" && $tatlı=="Un helvası" && $cicek=="Amaril" && $mevsim=="Kış") {
    $burc ="oglak";
  echo  "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının  (22 Aralık- 21 Ocak) günleri aralığında doğmuşsun ve OĞLAK(CAPRİCORNUS) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak edyorum butonuna bas. ";
  }
   elseif ($renk=="Elektrik MavisiTurkuaz" && $tatlı=="İrmik helvası" && $cicek=="Kardelen" && $mevsim=="Kış") {
    $burc ="kova";
  echo "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsunVerdiğin bilgilere göre $tarih yılının (22 Ocak- 19 Şubat) günleri aralığında doğmuşsun ve  KOVA (AQUARİUS) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";
  }
   elseif ($renk=="Buğulu Mavi,Uzak Deniz Yeşili" && $tatlı=="Şekerpare" && $cicek=="Nergis" && $mevsim=="Kış") {
    $burc ="balik";
  echo  "Merhaba $ad Doğum tarihi net bilmeyen birçok kişi gibi sen de $yas yaşında yaklaşık Doğumgününü,burcunu  merak ediyorsun.Verdiğin bilgilere göre $tarih yılının (20 Şubat- 20 Mart) günleri aralığında doğmuşsun ve BALIK (PİSCES) burcusun.Burcun,kendin ve geleceğin hakkında bilgi için, merak ediyorum butonuna bas. ";
  }
  else{
   echo "LÜTFEN BİRAZ DAHA NET CEVAPLAR VERİN";
  header("refresh:2;url=http://localhost/burcumubul.php");
 
 }}
else{
   echo "Lütfen Geçerli bir Tarih Girin";
  header("refresh:2;url=http://localhost/burcumubul.php");
 

}}
else {

  echo "POST YOK <hr>";
}




?> 
 
  <a href="yönlendir.php?BURC=<?php echo $burc ?>"><button class="btn btn-primary mt-5">Merak Ediyorum</button></a>
      </div> 
     
      </div> 
         <div class="col-md-6">
           <div id="burc-slider" class="carousel slide" data-ride="carousel">
         <br>
            <br>     
      <div class="carousel-inner text-center" style="height: 350px">

        <div class="carousel-item active"height="500">

          <h3 class="display-5">
             
              
            SEN HANGİSİSİN?
          </h3>
          <img width="400" src="burclar.png" >
           <br>
            <br> 
             <a href="http://localhost/burcumubul.php" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ANASAYFA</b></h5></a>
        </div>
         <div class="carousel-item">
          <h5 class="display-5">
           
             KOÇ (ARİES)</h5>
        
              <h5 class="display-5">
           
              (21 Mart- 20 Nisan)</h5>

            <img width="350" src="koc.png" >
             <br>
            <br> 
             <a href="http://localhost/koc.php" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
        </div>
          <div class="carousel-item">
          <h5 class="display-5">
           
          BOĞA (TAURUS)</h5>
           <h5 class="display-5">
           
               (21 Nisan- 21 Mayıs)</h5>
            <img width="350" src="boga.png" >
          <br>
            <br> 
             <a href="http://localhost/boga.php" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
        </div>
        <div class="carousel-item">
           <h5 class="display-5">
           
          İKİZLER (GEMİNİ) </h5>
           <h5 class="display-5">
           
               (22 Mayıs- 22 Haziran)</h5>
            <img width="350" src="ikizler.png" >
            <br>
            <br> 
            <a href="http://localhost/ikizler.php" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
        </div>
        <div class="carousel-item">
          <h5 class="display-5">
         YENGEÇ (CANCER) </h5>
          <h5 class="display-5">

            (23 Haziran- 22 Temmuz)</h5>
          <img width="350" src="yengec.png" >
          <br>
            <br> 
             <a href="http://localhost/yengec.php" class="btn btn-success" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
         </div>
         <div class="carousel-item">
          <h5 class="display-5">
         ASLAN (LEO) </h5>
           <h5 class="display-5">
           
               (23 Temmuz- 22 Ağustos)</h5>
          <img width="350" src="aslan.png" >
          <br>
            <br> 
             <a href="http://localhost/aslan.php" class="btn btn-success" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
         </div>
          <div class="carousel-item">
           <h5 class="display-5">
       BAŞAK (VİRGO) </h5>
        <h5 class="display-5">
           
               (23 Ağustos- 22 Eylül)</h5>
          <img width="350" src="basak.png" >
          <br>
            <br> 
            <a href="http://localhost/basak.php" class="btn btn-success" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
         </div>
        
           <div class="carousel-item">
           <h5 class="display-5">
           
          TERAZİ(LİBRA) </h5>
           <h5 class="display-5">
           
              (23 Eylül- 22 Ekim)</h5>
            <img width="350" src="terazi.png" >
            <br>
            <br> 
             <a href="http://localhost/terazi.php" class="btn btn-success" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
        </div>
          <div class="carousel-item">
           <h5 class="display-5">
      AKREP (SCORPİUS)</h5>
       <h5 class="display-5">
           
               (23 Ekim- 21 Kasım)</h5>
          <img width="350" src="akrep.png" >
          <br>
            <br> 
             <a href="http://localhost/akrep.php" class="btn btn-success" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
         </div>

           <div class="carousel-item">
          <h5 class="display-5">
      YAY (ZODYAK)</h5>
       <h5 class="display-5">
           
              (22 Kasım- 21 Aralık)</h5>
          <img width="350" src="yayy.png" >h
          <br>
            <br> 
             <a href="http://localhost/yay.php" class="btn btn-success" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
         </div>
             <div class="carousel-item">
           <h5 class="display-5">
       OĞLAK(CAPRİCORNUS) </h5>
        <h5 class="display-5">
           
             (22 Aralık- 21 Ocak)</h5>
          <img width="350" src="aslan.png" >
          <br>
            <br> 
          <a href="http://localhost/oglak.php" class="btn btn-success" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
         </div>
         
          <div class="carousel-item">
           <h5 class="display-5">
       KOVA (AQUARİUS) </h5>
        <h5 class="display-5">
           
               (22 Ocak- 19 Şubat)</h5>
          <img width="350" src="kova.png" >
          <br>
            <br> 
             <a href="http://localhost/kova.php" class="btn btn-success" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
         </div> <div class="carousel-item">
          <h5 class="display-5">
       BALIK (PİSCES) </h5>
         <h5 class="display-5">
           
               (20 Şubat- 20 Mart)</h5>
          <img width="350" src="balik.png" >
          <br>
            <br> 
            <a href="http://localhost/balik.php" class="btn btn-success" class="btn btn-success">
              <h5 class="display-5"> 
                <b>ÖZELLİKLERİM</b></h5></a>
         </div> 

      </div>
        <a href="#burc-slider" class="carousel-control-prev"data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#burc-slider" class="carousel-control-next"data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
    </div>
   
        </div>
     </div> 
    </div>
    </div>
  </div>
   </section>

   <footer class="bg-dark py-5">
  <div class="container text-white">
  <div class="row">
    <div class="col-md-2"><h5><b>BURÇBUL </b></h5>
    </div>

   <div class="col-md-2">
 <ul class="list-unstryled">
   <li class="text-muted"><small><b>ŞİRKETİMİZ</b></small></li>
   <li>Hakkında</li>
   <li>İşler</li>
   <li>Basın</li>
  
 </ul></div>
  <div class="col-md-2"> <ul class="list-unstryled">
     <li class="text-muted"><small><b>TOPLULUKLAR</b></small></li>
  
   <li>Geliştiriciler</li>
   <li>Markalar</li>
   <li>Yatırımcılar</li>
 </ul></div>
 
   <div class="col-md-2"> <ul class="list-unstryled">
     <li class="text-muted"><small><b>YARARLI İŞLER</b></small></li>
   <li>Yardım</li>
   <li>Hediye</li>
    <li>Haberler</li>
  
 </ul></div>
   <div class="col-md-2">
    <a href="https://twitter.com/Mehmety40661234"><img src="t.png" width="30"></a>
   
    <a href="https://www.instagram.com/mehmet.ygt6795/">
      <img src="ins.png" width="30px"></a>
     
     <a href="https://www.facebook.com/profile.php?id=100026941662321"><img src="f.png" width="30"></a>
   </div>
     <div class="col-md-2"><h5><b>BURÇBUL </b></h5> <p class="mt-5 ml-auto"><small>12 : 09 : 2020 BURÇBUL <br>-MEHMET YİĞİT</small></p></div>
   <div class="clearfix">
   <ul class="list-inline mt-5 float-left">
     <li class="list-inline-item"><a href="#" class="text-white"><small>Yasal</small></a></li>
     <li class="list-inline-item"><a href="#" class="text-white"><small>Gizlilik</small></a></li>
     
     <li class="list-inline-item"><a href="#" class="text-white"><small>Reklamlar Hakkında<small></a></li>

   </ul>
  
   
  </div></div></div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>