
<style>
	
</style>
<div class="enl-100" onclick="enl_hide();">

<div class="enl-img">


</div>
</div>
<?php

/* Template Name: home */ 




get_header();?>

<div class="container">
     <div class="pagewrapper">
       
     	<?php
global $wpdb;
$result = $wpdb->get_results("SELECT ID FROM wp_posts WHERE post_type='post' AND post_status='publish'");
//print_r($result[1]->post_type);
//echo count($result);
?>

<div class="port-head1">
	<h1>D'SIGN IS THE NEW SOUL</h1>
	<hr>

</div>




<?php
echo '<div class="class123">';
for($i = 0;$i<count($result);$i++){
    $post_ID[$i] = $result[$i]->ID;
    $img[$i] = wp_get_attachment_image_src(get_post_thumbnail_id($post_ID[$i]),'full');
    echo "<img src='".$img[$i][0]."' id='img-enl' onclick='doit(this.src);'>";
}
echo '</div>';

//print_r($img[0]);
?>

<script>

document.querySelector('.class123').className = "home-port";

var img_cont = document.querySelector('.enl-img');
var img_100 = document.querySelector('.enl-100');
function doit(num){


img_cont.innerHTML = "<img src="+num+">";
img_100.style.visibility = "visible";
}

function enl_hide(){
	img_100.style.visibility = 'hidden';
}
</script>


    </div><!-- site-aligner -->
</div><!-- container -->
	
<?php get_footer(); ?>