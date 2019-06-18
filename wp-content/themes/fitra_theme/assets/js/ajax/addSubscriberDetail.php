<?php
get_header();
$data = $_POST;
$input = array(
    "post_title" => $data['name'],
    "meta_input" => array(
        'email' => $data['email'],
        'weight' => $data['weight'],
        'height' => $data['height'],
    ),
    'post_type' => 'subscriber_details'
);
$result = wp_insert_post($input);
if ($result){
    return json_encode($result);
}else{
    return json_encode($result);
}
get_footer();
?>
