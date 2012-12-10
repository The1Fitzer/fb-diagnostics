<?php
/*
Copyright 2012 Colm Doyle

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

$fb_ref = $_REQUEST['fb_source'];

?>

<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# video: http://ogp.me/ns/video#">
  <meta property="fb:app_id"                     content="120999667956026" /> 
  <meta property="og:type"                       content="diagnostics-app:testing_object" /> 
  <meta property="og:url"                        content="http://colmd.fbdublin.com/fb-diagnostics/objects/testing_object.html" /> 
  <meta property="og:title"                      content="Sample Testing Object" /> 
  <meta property="og:image"                      content="https://s-static.ak.fbcdn.net/images/devsite/attachment_blank.png" /> 
</head>
<body>
<p>Hello intrepid visitor.</p>
<p> You appear to have come from <?php echo $fb_ref;?>
</body>

</html>
