<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>M.3/1 | 2564</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="Music">
  <audio src="hbd.mp3" autoplay loop>
</audio>
 <section class="team">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h1>Hello <?php echo $_SESSION['name']; ?></h1>
        <h2>M3/1 FAMILY 2564</h2>
        <div class="credit"><a href="kru.php">คู่มือครู</a>
      </div>
    </div>
    <div class="row">
      <div class="team-item">
        <img src="https://shorturl.at/csGKZ" alt="team">
        <h3>กันตพงศ์ ทัตพรหม <span>No.1</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100032252505925"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://shorturl.at/ekpxT" alt="team">
        <h3>ชนาธิศ สุดเคราะห์ <span>No.2</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100026972150024"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/chnaathissudekhraaah"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://shorturl.at/qvBK7" alt="team">
        <h3>โชติวิทย์ สมวาส <span>No.3</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/por.somwas"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950764223363956746/1220773655596892180/1711125404725.jpg?ex=66102910&is=65fdb410&hm=85c6d75b81339118f6fd5fb10248fd0ccda868e1e37b0196b09a6e1c705bd74b&" alt="team">
        <h3>ณัฐพงศ์ จิตรีชาติ <span>No.4</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/natthaphong.jittreechat.1"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/nishita_koharu"><i class="fa fa-instagram"></i></a>
          <a href="https://discord.com/invite/Ybmen4NYyX"><i class="fa fa-flickr"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950764223363956746/950764462086950972/IMG_20220308_211145.jpg?ex=660c1868&is=65f9a368&hm=9a66531d5412ba7f3644fa5bcaf0200e5aa4ca74717cbbfbf1213dee3cd34f87&" alt="team">
        <h3>ตุลยวัต อารีย์ <span>No.5</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/toon.kung.5680"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/itsme.tulya"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739201639481344/6.jpg?ex=660c00e1&is=65f98be1&hm=6ca2048a6b27e1e61d27b0ac1bbe54569dda1d8d90ec99881dd62e192a74d034&" alt="team">
        <h3>ทินวุฒิ วิวาสุข <span>No.6</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/tinnawut.vivasuk.5"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739202000158780/7.jpg?ex=660c00e1&is=65f98be1&hm=1a3e754a0a1920e0c3327a71ffc6d435f674bc80f158e7d28ae5579353c4423c&" alt="team">
        <h3>ธนดล ภู่ทอง <span>No.7</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/thanadol.puthong"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/litlqhpll"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739202436374529/8.jpg?ex=660c00e1&is=65f98be1&hm=813154866a51c828bdf381fd0b1a5111cfc8ba17927387be15105d7ade1338af&" alt="team">
        <h3>ธนภัทร ปั้นแพง <span>No.8</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100011333620535"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739202637709342/9.jpg?ex=660c00e1&is=65f98be1&hm=5f6a2281afaff39e168f8e96deba7aea5d5015a8d449b84d4aa40855e20c0782&" alt="team">
        <h3>ธิติกรณ์ นาชาว <span>No.9</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/thitikorn.nachow.7"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/thitikorn_n0"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739202935521380/10.jpg?ex=660c00e1&is=65f98be1&hm=1e4244d5e9eec9b4c24ff01816a70664a4744e477c8f0ea93f1d3b6eaa503e55&" alt="team">
        <h3>ธีร์จุฑา บัวหลาด <span>No.10</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100031403647555"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/teejutha_9898"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739443902464030/11.jpeg?ex=660c011b&is=65f98c1b&hm=3d0fab392aaa9dde51db8805b00f4b72e5edf8785624f903f976187ea2cc4484&" alt="team">
        <h3>นนทวัช สีเข้ม <span>No.11</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100026011355064"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/buk_sdew"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739444087029800/12.jpg?ex=660c011b&is=65f98c1b&hm=909de12e749a0af5ec907253b0bcd9ed9eec847f4205ec2b4b9f07d44181811b&" alt="team">
        <h3>นิคม ใจถวิล <span>No.12</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/nikomjaitawil"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/newnk_j"><i class="fa fa-instagram"></i></a>
          <a href="https://discord.gg/YnTKWCC27C"><i class="fa fa-flickr"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739444279955536/13.jpg?ex=660c011b&is=65f98c1b&hm=4f9c915903177c19b6be91f99adc2f06914a983877de574bc7bc5c41f6d061fc&" alt="team">
        <h3>พัชรพล ศรีอ่อน <span>No.13</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/patcharapron.srion.9"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/ccxachip"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739444498063380/14.jpg?ex=660c011b&is=65f98c1b&hm=6d8f8048227d223164464ccf2622417e63cedccf3ab15c8ee4247226b05e5ba8&" alt="team">
        <h3>ภูพิพัฒน์ ทรงธรรม <span>No.14</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/phupipat.songtam.9"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/phupipat_tt"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739444741316619/15.jpg?ex=660c011b&is=65f98c1b&hm=6db991b355fd4c15213881a77975d00141a8ef033aff40ac9908b61f38600be6&" alt="team">
        <h3>วีรภัทร ฉัตรเงิน <span>No.15</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100028193822375"><i class="fa fa-facebook"></i></a>
          <a href="https://discord.gg/JbPkk3saTa"><i class="fa fa-flickr"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739444946845737/16.jpg?ex=660c011b&is=65f98c1b&hm=a2a8f4287b86ade9c1d4ec34f2d83c27b5f8d3a9c1c4282a2470058171ce0c05&" alt="team">
        <h3>อธิปไตย ทองเสาร์ <span>No.16</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100016611193959"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/athip_m49"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739445131411456/17.jpg?ex=660c011b&is=65f98c1b&hm=341d58a523a1130fb5b8580139702c52f2821c4c014de1ce0db64ab3df4b1559&" alt="team">
        <h3>อนุสรณ์ อุชชิน <span>No.17</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100075530418722"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/xhq_tatarlve"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739445324316672/18.jpg?ex=660c011b&is=65f98c1b&hm=d393b37befa0f8a8764f88ef6bb8e3984ec0271c0ac66321ce65d09df68b54a8&" alt="team">
        <h3>อัศวยุช บุญประดิษฐ์<span>No.18</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100014876653701"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/fxuswy_"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739445605343282/19.jpg?ex=660c011b&is=65f98c1b&hm=e08da0636dec8eecc4e74898360a67678f6d501cb7675d9fbe69af5a0c13b015&" alt="team">
        <h3>กรกนก รุ่งโรจน์ <span>No.19</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/kornkanok.rungroj.5"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/aomsiinsmyn"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739445802479616/20.jpg?ex=660c011b&is=65f98c1b&hm=51bb97a14ab90594af92877a59b01cee502819deca792c2aa2dc668dffd0dd19&" alt="team">
        <h3>กรรณิการ์ พันพิพัฒน์ <span>No.20</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100044439969721"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/tinkrkk_.p"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739741136015430/21.jpg?ex=660c0162&is=65f98c62&hm=f2b2bf0eef2d180258a5ab5f7cd90bfabd745eac0c0e9c39dcbf5f41e15b4acc&" alt="team">
        <h3>เขมจิรา คงเดช <span>No.21</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100027702849113"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/yuzurujinji"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950764223363956746/961844711805562910/IMG_20220407_193226.jpg?ex=660f7db1&is=65fd08b1&hm=27b435fd10cd5e920e1c1ddf573c65f5bf991faf7d3771efc47c3b8af98b1363&" alt="team">
        <h3>จารีรัตน์ คัสกุล <span>No.22</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/jareerut.kaussakul.98"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/jare2rutk"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950764223363956746/951113256402026566/FB_IMG_1646833352010.jpg?ex=660d5d3f&is=65fae83f&hm=7895157b8d9b961c5f46d934fa2d5fbde49977989718ca3ff3bbdedc87f34ff4&" alt="team">
        <h3>ชฎารัตน์ ปิ่นเกตุ <span>No.23</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100077916517875"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/06_m.mm"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739741756760144/24.jpg?ex=660c0162&is=65f98c62&hm=a0bc6fc777265f10e6a0183b29ba6ddec35b30a892296c493d8b1dc15ccacd77&" alt="team">
        <h3>ณัฐริกา บำรุงวงษ์ <span>No.24</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/nattharika.bamrungwong"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/sspoyerrx"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739741979050034/25.jpg?ex=660c0162&is=65f98c62&hm=a7b0dbebebf48660c0d904e811bb33993bbfbf091a40e4e6e96ed6766cc5ffaa&" alt="team">
        <h3>นาราภัทร ทองอินทร์ <span>No.25</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/poon.naraphat"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/poonpuniiii"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950764223363956746/950979466048438272/IMG_20220309_115118.jpg?ex=660ce0a5&is=65fa6ba5&hm=f7973ba570bf59f98b3ad234f2be59c4fe718412fea0399ef7371a2fcec862fa&" alt="team">
        <h3>ปัญฑิตา อินต๊ะ <span>No.26</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/panthita.inta"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/icevtxr"><i class="fa fa-instagram"></i></a>
          <a href="https://discord.gg/JrAbfCCS4x"><i class="fa fa-flickr"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739742385909790/27.jpg?ex=660c0162&is=65f98c62&hm=2763a1b3427ca890744a9d3f248ac104d174aad21c7a836f877d42d641606898&" alt="team">
        <h3>พัชรินทร์ แก้วตุมกา <span>No.27</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100027025335036"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/jayjo_v"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950764223363956746/978114989183361024/20220523_085936.jpg?ex=660a1511&is=65f7a011&hm=9122becc536e8cad1455a043e4594576ad68911973a79c4ac8fbfcfd8e4ad408&" alt="team">
        <h3>รัตนาพร วิชาชิต <span>No.28</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/rattanaporn.wichachit.7"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/gxem_qq"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739742838886400/29.jpg?ex=660c0162&is=65f98c62&hm=88497840543a28b6048c0ae2ed6f64feeaa23b16f1967f0a3c841fbd33f9bbf3&" alt="team">
        <h3>วรัชยา ปานทอง <span>No.29</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/yok.zaa.568"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/biy0kwrat"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950764223363956746/950781291664654376/IMG_20220308_224455.jpg?ex=660c2814&is=65f9b314&hm=08b0dcd33c365519ad7009a0d156dd2b65eb69c9a677b258bff690f3b4739598&" alt="team">
        <h3>ศรินทิพย์ คงเจริญถิ่น <span>No.30</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100023745772033"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/ffai_srt"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739743048622110/31.jpg?ex=660c0162&is=65f98c62&hm=183db1e0d25d9e7990f94291d713ba6127942e52d7b34e1e1049f3a678cfcc22&" alt="team">
        <h3>ศิริพิพัฒน์ บุญญานันท์ <span>No.31</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/siripipat.boonyanun.5"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/t_siripipat"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739922116051014/32.jpg?ex=660c018d&is=65f98c8d&hm=c33bada72113330d992710cdcf8516d8ae81a82c4c8ba09c2f04dd4526f2c848&" alt="team">
        <h3>โศภิตนภา ปานดวงแก้ว <span>No.32</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100008755870474"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/sopitnapa_aa"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739922459951124/33.jpg?ex=660c018d&is=65f98c8d&hm=3c0344aa7957a4f6857ede36fb721f3f0458015a3333c522695a6d31f13cea45&" alt="team">
        <h3>สายธาร เพิ่มพูลทรัพย์ <span>No.33</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/saithan.phoempoonsap.9"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/piano._.49"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739922720018512/34.jpg?ex=660c018d&is=65f98c8d&hm=f1276bbef448e432954b6eb6587aeb40b1bd0370d0d165fb894f00b0c0c7c2cb&" alt="team">
        <h3>สุพรรษา เองบัว <span>No.34</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100077678260342"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/suphansa_15y"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739922992644136/35.jpg?ex=660c018d&is=65f98c8d&hm=3c231fb17aee6415d0400e51612d78de05ec8d4c86d190d0110b008921427f97&" alt="team">
        <h3>อธิชา ช่างเพ็ชรผล <span>No.35</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100044593721888"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739923282042890/36.jpg?ex=660c018d&is=65f98c8d&hm=9dd975aad84be010c506e38f9cf60a3feab21720208c30611408e023d616eba7&" alt="team">
        <h3>อมิตา หานะกุล <span>No.36</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/amita.hanakul"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/amitahanakul"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950737776280748122/950739923537920002/37.jpg?ex=660c018d&is=65f98c8d&hm=17f4d624133259e0d6201ebcbfd4269137ae1299c2be5a4fdb73aba6b10c3492&" alt="team">
        <h3>อรณี ชุติมัน <span>No.37</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/oranee.chutiman"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/gif_ttttttk"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950764223363956746/1220778200007835719/1711126578995.jpg?ex=66102d4b&is=65fdb84b&hm=b0cd25d89b15fd6d0b6281c87603730912faa26aac70d7e1dcef52c1d19bef06&" alt="team">
        <h3>อรพินท์ ถุไกรวงศ์ <span>อาจารย์ที่ปรึกษา</span></h3>
        <div class="social-links">
          <a href="https://www.facebook.com/kungorapin.tukraiwong"><i class="fa fa-facebook"></i></a>
          <a href="https://instagram.com/lookkung213"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="team-item">
        <img src="https://cdn.discordapp.com/attachments/950764223363956746/1220778199596798073/1711126553037.jpg?ex=66102d4b&is=65fdb84b&hm=e71bb2f0d8c39c7f4fd6b22db048c1e3fd9588ae76f8faff5b4dea32db50d924&" alt="team">
        <h3>พรศักดิ์ กฤษเกล้า <span>อาจารย์ที่ปรึกษา</span></h3>
        <div class="social-links">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="Logout"> <a href="logout.php">Logout</a></div>
 </section>
<div class="credit">Made with <span style="color:rgb(7, 7, 7);font-size:20px;">❤</span> by <a  href="https://discord.com/invite/Ybmen4NYyX">M5/7 FAMILY</a></div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
