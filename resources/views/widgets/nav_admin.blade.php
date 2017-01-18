<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script> 
<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li>
  <a href="#" class="nav-top-item" id="loaisp">Danh mục tin tức</a>
    <ul>
      <li><a href="loaisanpham.php" title="loaisp">Danh sách</a></li>
      <li><a href="themloaisanpham.php" title="loaisp">Thêm mới </a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="sanpham">Tin tức</a>
    <ul>
      <li><a href="sanpham.php" title="sanpham">Danh sách Tin tức</a></li>
      <li><a href="themsanpham.php" title="sanpham">Thêm mới Tin tức</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="nhacungcap">Thông tin</a>
    <ul>
      <li><a href="slogan.php" title="nhacungcap">Slogan</a></li>
      <li><a href="reason.php" title="nhacungcap">Lý do chọn Dr.Vương</a></li>
	  <li><a href="themnhacungcap.php" title="nhacungcap2">Liên hệ</a></li>
    </ul>
  </li>   
  <li> <a href="#" class="nav-top-item" id="banner"> Hình ảnh </a>
    <ul>
	   <li><a href="banner.php" title="banner">Header</a></li>
	   <li><a href="banner.php" title="banner">Logo</a></li>
      <li><a href="banner.php" title="banner">Danh sách Banner chính</a></li>
	  <li><a href="banner.php" title="banner">Danh sách Banner phụ</a></li>
	  <li><a href="banner.php" title="banner">Danh sách Album Ảnh</a></li>	  
      <li><a href="them_banner.php" title="banner">Thêm hình</a></li>
    </ul>
  </li>
   <li> <a href="#" class="nav-top-item" id="banner"> Video </a>
    <ul>
      <li><a href="banner.php" title="banner">Video trang chủ</a></li>	  
      <li><a href="them_banner.php" title="banner">Thêm mới Video</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user">Khách hàng</a>
    <ul>
      <li><a href="sukien.php" title="user">Danh sách Khách hàng</a></li>
      <li><a href="themsukien.php" title="user">Thêm Khách hàng</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user"> User </a>
    <ul>
      <li><a href="user.php" title="user">Danh sách user</a></li>
      <li><a href="them_user.php" title="user">Thêm user</a></li>
    </ul>
  </li>
   
</ul>
<!-- End #main-nav -->