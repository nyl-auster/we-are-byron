<?php
/**
 * Redirect to our dropbox book.
 */
?>
<script type='text/javascript'>
document.location.href = 'https://www.dropbox.com/sh/uc99u8eldwr4wpj/AABkeRnsy1C9su34i0i5c4UBa?dl=0';
</script>

<?php
// redirect we-are-byron.com to byron-inc.fr permanently
// DO NOT REMOVE ! we-are-byron.com pointe toujours vers ce fichier
if (strpos($_SERVER['HTTP_HOST'], 'we-are-byron.com') !== FALSE) {
 header("Status: 301 Moved Permanently", false, 301);
 header("Location: http://www.byron-inc.fr");
}
?>
