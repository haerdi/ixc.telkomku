<?php
  include "koneksi_db.php";
  
  if(isset($_POST['search'])){
      $query="SELECT * FROM upload_dtp WHERE $_POST[searchby] LIKE '%$_POST[keyword]%'"; //query string, hasilnya array
    } else {
      $query="SELECT * FROM upload_dtp";
    }
      $result=mysql_query($query); //perintah menjalankan query, result bentuknya array
  
?>


<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Dec 19 2017 09:47:38 GMT+0000 (UTC)  -->
<html data-wf-page="5a376fa257775c0001b20ba3" data-wf-site="59fd0c1ae534be0001f52c86">
<head>
  <meta charset="utf-8">
  <title>Halaman View</title>
  <meta content="Halaman Upload" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/digitaltouchpoint.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Changa One:400,400italic","Oswald:200,300,400,500,600,700","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Droid Serif:400,400italic,700,700italic","Bitter:400,700,400italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Droid Sans:400,700","Inconsolata:400,700","PT Sans:400,400italic,700,700italic","Righteous:regular:latin-ext,latin","Berkshire Swash:regular:latin-ext,latin","Bilbo Swash Caps:regular","Damion:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/coba-logo.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/logo-telkom_1.png" rel="apple-touch-icon">
  <script type="text/javascript">(function(d, t, e, m){
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
        RW.init({
            huid: "380741",
            uid: "b343a723c0cff0c7a5e2735df7c0fde9",
            source: "website",
            options: {
                "advanced": {
                    "layout": {
                        "lineHeight": "24px"
                    },
                    "font": {
                        "size": "12px",
                        "type": "\"Comic Sans MS\""
                    }
                },
                "size": "large",
                "style": "oxygen1",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
</head>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div id="Home" class="section-12"><a href="index.html" class="brand w-nav-brand"><img src="images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="nav-menu w-nav-menu"><a id="home" href="index.html" class="navlink w-nav-link">Home</a><a href="#Kajian" id="home" class="navlink w-nav-link">UPLOAD KAJIAN &amp; DOC. STDR</a><a href="#End-Section" class="navlink w-nav-link">Customer Contact</a></nav>
    </div>
  </div>
  <div id="Kajian" class="section-14">
    <div class="container-13 w-container">
      <h2 class="heading-2 mobile upload"> View Kajian &amp; Dokumen Standard</h2>
	  
	  </br>
      
	  <h3 class="heading-19"><a href="halaman-upload.html" style="color:white">upload kajian &amp; dokument standard Lab</a></h3>
	  
	  </br>
	  
      <div class="div-block-12">
	  
        <div class="form-block w-form">
          
			<form method="post" action=""> &nbsp; &nbsp; &nbsp;
	   <select style="color:black" name="searchby">
		 <option value="">-- Search By --</option>
		 <option value="tgl_upload">Tgl. Upload</option>
	     <option value="jenis_file">Jenis Dokumen</option>
		 <option value="jenis_lab">Lab</option>
	   </select>
	   <input type="text" name="keyword"/>
	   <input style="color:black" type="submit" name="search" value="Search"/>
	</form>
	
	</br>

 <table border="2" align="center" style="color:white"></div>
   <tr>
      <td style="color:white" align="middle">ID UPLOAD</td>
	  <td style="color:white" align="middle">JUDUL  FILE</td>
	  <td style="color:white" align="middle">TGL. UPLOAD</td>
	  <td style="color:white" align="middle">JENIS DOKUMEN</td>
	  <td style="color:white" align="middle">PIC EMAIL ADDRESS</td>
	  <td style="color:white" align="middle">JENIS LAB</td>
	  <td style="color:white" align="middle">DESKRIPSI DOKUMEN</td>
	  <td style="color:white" align="middle">FILE</td>
   </tr>
   
   <?php while($data=mysql_fetch_array($result)) { //data di extract menggunakan "fetch array", kemudian ditampung di result menjadi data, setelah itu ditampilkan di tabel// ?>
   
   <tr>
      <td align="middle"><?php echo $data['id_upload'];?></td>
	  <td align="middle"><?php echo $data['judul'];?></td>
	  <td align="middle"><?php echo $data['tgl_upload'];?></td>
	  <td align="middle"><?php echo $data['jenis_file'];?></td>
	  <td align="middle"><?php echo $data['email'];?></td>
	  <td align="middle"><?php echo $data['jenis_lab'];?></td>
	  <td align="middle"><?php echo $data['deskripsi'];?></td>
	  <td align="middle"><?php echo $data['nama_file'];?><a href="uploads/<?php echo $data['nama_file'];?>"></td>
   </tr>
   
   <?php } ?>
 
 </table>
			
			
         
        </div>
		
      </div>
    </div>
  </div>
  <div id="End-Section" class="end-section all tes">
    <h3 class="experience">Rate your Experience to Us :</h3>
    <div class="html-embed w-embed">
      <div class="rw-ui-container"></div>
    </div>
    <div class="row-16 w-row">
      <div class="column-16 w-col w-col-6"><img src="images/telkom-indonesia-logo-reverse.png" width="137">
        <h4 class="heading-14">Infrastructure Experience Creation - IXC<br>Divisi Digital Service<br>Jl. Gegerkalong Hilir No. 47<br>Bandung 40152</h4>
      </div>
      <div class="column-7 w-col w-col-6"><a href="https://www.facebook.com/TelkomIndonesia/?fref=ts" class="w-inline-block"><img src="images/find-us-on-facebook.png" width="120" srcset="images/find-us-on-facebook-p-500.png 500w, images/find-us-on-facebook.png 720w" sizes="120px" class="image-9"></a><a href="https://twitter.com/TelkomIndonesia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="w-inline-block"><img src="images/twitterlogo.png" width="120" srcset="images/twitterlogo-p-500.png 500w, images/twitterlogo-p-800.png 800w, images/twitterlogo.png 1000w" sizes="120px" class="image-10"></a><a href="https://www.youtube.com/telkomindonesiaofficial" target="_blank" class="w-inline-block"><img src="images/logo-youtube.png" width="100" class="image-11"></a></div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>