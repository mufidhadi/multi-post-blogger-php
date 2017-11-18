<pre>
  <?php

  include_once 'multi_post_blogger.php';

  // bikin object dari class multi_post_blogger
  // keterangan parameter bisa dibaca di file multi_post_blogger.php
  $multi_post = new multi_post_blogger("http://localhost:8080/multi-post/");

  // mengambil token google client OAUTH2
  $token = $multi_post->getToken();

  echo "<hr>";
  $blog_list = $multi_post->getBlogList();
  foreach ($blog_list as $blog) {
    var_dump($blog["url"]);
  }

  if (isset($_POST['kirim'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    echo "<hr>";
    $kirim = $multi_post->inputPostBanyak($blog_list,$title,$content);
    var_dump($kirim);
  }
  ?>
</pre>
<h1>Coba Posting blogger untuk akun <?php echo $user["displayName"] ?></h1>
<form class="" action="" method="post">
  Judul :
  <input type="text" name="title" value="">
  <br>
  Content :
  <textarea name="content" rows="8" cols="40"></textarea>
  <br>
  <button type="submit" name="kirim">Kirim</button>
</form>
