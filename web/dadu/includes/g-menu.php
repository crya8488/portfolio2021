
<header id="menu">

  <div class="menu-bg"></div>

  <div class="menu-box">
   <div id="menu-logo">
     <img src="img/menu/logo-bg.svg" alt="" class="logo-bg">
     <a href="index.php">
     <img src="img/menu/logo1.svg" alt="我來自大肚山">
     <img src="img/menu/logo2.svg" alt="大肚山地方知識平台">
     </a>
   </div>
  </div>

  <nav>
   <ul id="menu-main-list" class="menu-list main-menu">
    <li>
     <a href="featured.php">
     <i class="icon-search"></i>
     <p>每月精選</p>
     </a>
    </li>
    <li>
     <a href="history.php">
      <i class="icon-paper"></i>
      <p>地方簡史</p>
     </a>
     <ul class="drop-menu">
      <li><a href="history.php">地理小知識</a></li>
      <li><a href="history.php">先民開拓</a></li>
      <li><a href="history.php">經濟變遷</a></li>
      <li><a href="history.php">聚落發展</a></li>
      <li><a href="history.php">地方教育</a></li>
      <li><a href="history.php">住民變化</a></li>
      <li><a href="history.php">社區開發事件</a></li>
     </ul>
    </li>
    <li>
     <a href="memory.php">
      <i class="icon-house"></i>
      <p>生活記憶</p>
     </a>
     <ul class="drop-menu">
      <li><a href="memory.php">早年生活</a></li>
      <li><a href="memory.php">庶民信仰</a></li>
      <li><a href="memory.php">閒暇娛樂</a></li>
      <li><a href="memory.php">鄉賢小傳</a></li>
      <li><a href="memory.php">鄉野軼事</a></li>
      <li><a href="memory.php">消失的語言</a></li>
     </ul>
     
    </li>
    <li>
     <a href="share.php">
      <i class="icon-signboard"></i>
      <p>特約分享</p>
     </a>
     <ul class="drop-menu">
      <li><a href="share.php">特約教育家</a></li>
      <li><a href="share.php">特約藝術家</a></li>
      <li><a href="share.php">特約作家</a></li>
      <li><a href="share.php">特約青創家</a></li>
     </ul>
    </li>
    <li>
     <a href="guide.php">
      <i class="icon-map"></i>
      <p>在地嚮導</p>
     </a>
     <ul class="drop-menu">
      <li><a href="guide.php">在地實踐家</a></li>
      <li><a href="guide.php">東海實踐家</a></li>
      <li><a href="guide.php">在地職人</a></li>
     </ul>
    </li>
    <li>
     <a href="gallery.php">
      <i class="icon-photograph"></i>
      <p>影像藝廊</p>
      </a>
    </li>
   </ul>
     
     
  </nav>

  <ul id="menu-btn-list" class="menu-list">
      <li class="search">
       <a href="javascript:void(0)" data-color="orange">
        <i class="icon-search"></i>
        <p><span>全站</span>搜尋</p>
       </a>
       <div class="drop-menu search-box">
        <form action="">
         <input type="search" placeholder="輸入搜尋關鍵字" id="menu-search"><button type="submit"><span>開始搜尋</span><i class="icon-search"></i></button>
         <div class="tag-box hashtag white">
          <span class="orange">熱門：</span>
          <!-- 顯示隨機三個關鍵字，點擊直接搜尋字詞 -->
          <a href="search.php?瑞井">瑞井</a>
          <a href="search.php?古井">古井</a>
          <a href="search.php?地瓜">地瓜</a>
         </div>
        </form>
        <div class="close"><p>關閉搜尋 <i class="icon-clear"></i></p></div>
       </div>
      </li>


      <li class="member">
       <a href="javascript:void(0)" class="member" data-color="green">
        <i class="icon-member"></i>
        <p>會員<span>專區</span></p>
       </a>
       <ul class="drop-menu" data-color="green">
        <!-- 未登入會員顯示選項 -->
        <li><a href="login.php">會員登入</a></li>
        <li><a href="sign.php">註冊會員</a></li>

        <!-- 已登入會員顯示選項 -->
        <li><a href="member.php">我的主頁</a></li>
        <li><a href="member_myinfo.php">個人資料</a></li>
        <li><a href="member_myfav.php">收藏文章</a></li>
        <li><a href="member_mysubmit.php">投稿記錄</a></li>
        <li><a href="logout.php">登出<i class="icon-logout"></i></a></li>
       </ul>
      </li>
      <li>
       <a href="index.php" class="home" data-color="brown">
        <i class="icon-home"></i>
        <p><span>返回</span>首頁</p>
       </a>
      </li>      
      <li>
       <a href="javascript:void(0)" id="menu-btn">
         <ul>
            <li></li>
            <li></li>
            <li></li>
         </ul>
         <!-- <p>頁面選單</p> -->

       </a>
      </li>


  </ul>
  
  <img src="img/menu/cloud-menu.svg" class="no-drag no-point">
</header>
