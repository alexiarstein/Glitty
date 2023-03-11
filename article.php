<?php
include('ge_conn.php');
// veo si es http o https
$protocolo = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$sitio = $_SERVER['HTTP_HOST'];
$dire = $protocolo . "://" . $sitio;
$fulldire = $dire . $url; // genero el permalink indistinto del host o protocolo.

// retrieve the postid parameter from the URL
$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);
$title = urldecode(end($parts));
$id_array = explode('-', $title);
$postid = (int)end($id_array);

// retrieve the post information from the database
$query = "SELECT * FROM blog WHERE postid = $postid";
$result = mysqli_query($conn, $query);
if (!$result || mysqli_num_rows($result) == 0) {
    echo "<h2>Post not found.</h2>";
} else {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $body = $row['body'];
    $tag = $row['tag'];
    $category = $row['category'];
    $post_date = $row['post_date'];
    $user_id = $row['user_id'];

    // retrieve the user information from the database
    $query = "SELECT * FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $realname = $row['realname'];
    $userinfo = $row['userinfo'];

    // format the post date in the desired format
    $formatted_post_date = date('d-m-Y \a\t H:i:s', strtotime($post_date));

    // display the post information on the page
    echo "
    <h2>$title</h2>
    <p>Posted by: $realname on $formatted_post_date</p>
    <p>$body</p>
    <p>Tags: $tag</p>
    <p>Category: $category</p>
    <p>Share link: " . getBaseUrl() . "/article.php?id=$postid</p>";
//echo urlencode(strtolower(str_replace(' ', '-', $title))) . "-" . $postId;
//echo $dire . $url;
echo "<input type='text' id='urlTextbox' style='width:350px;' value='" . $dire . $url . "'>";
echo "<button onclick='copyToClipboard()'>Share this link (copy)</button>";
echo "
    <h3>About the Author</h3>
    <p>$realname</p>
    <p>$userinfo</p>
    ";
}

// function to get the base URL of the website
function getBaseUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $base_url = $protocol . "://" . $host;
    return $base_url;
}
?>
<script>
function copyToClipboard() {
  /* Get the text field */
  var copyText = document.getElementById("urlTextbox");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Link Copiado al Portapapeles: " + copyText.value);
}
</script>
