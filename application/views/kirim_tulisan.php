<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
  <!-- <link href="http://192.168.100.12/biokimia/ext/froala-2.6.4/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /> -->
  <!-- <link href="http://192.168.100.12/biokimia/ext/froala-2.6.4/css/froala_style.min.css" rel="stylesheet" type="text/css" /> -->
  <link href="<?php echo base_url(); ?>ext/froala-2.6.4/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>ext/froala-2.6.4/css/froala_style.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <h1>BioChemistry's project</h1>
  <?php
  echo form_open_multipart('post/article');
    echo 'Title : ' . form_input(array('type'=>'text' , 'name'=>'title'));
    echo '<br>';echo '<br>';
    echo form_textarea(array('id'=>'froala-editor', 'name'=>'textbody'));
    echo form_submit(array('id'=>'submit' , 'value'=>'Save'));
  echo form_close();

  ?>
 <!-- <div id="froala-editor"></div> -->
   
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
  <!-- <script type="text/javascript" src="http://192.168.100.12/biokimia/ext/froala-2.6.4/js/froala_editor.pkgd.min.js"></script> -->
  <!-- <script type="text/javascript" src="http://192.168.100.12/biokimia/ext/froala-2.6.4/js/plugins/image.min.js"></script> -->
  <script type="text/javascript" src="<?php echo base_url(); ?>ext/froala-2.6.4/js/froala_editor.pkgd.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>ext/froala-2.6.4/js/plugins/image.min.js"></script>

</body>
</html>


<script type="text/javascript">
    $(function() {
    $('textarea#froala-editor').froalaEditor({
      fullPage: true,
      toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'fontSize', '|', 'color', 'emoticons', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'quote', '-', 'undo', 'redo', 'insertLink', 'insertImage', 'insertVideo', 'insertTable', 'clearFormatting', 'html'],
      // buttons: ['undo', 'redo'],
      imageUploadURL: '<?php echo site_url('post/edit_img'); ?>',
      // imageUploadURL: 'http://192.168.43.81/biokimia/index.php/post/edit_img',
      imageUploadParam: 'up_img',
      inlineMode: false,
      height: 400,
      imageErrorCallback: function (data) { 
              if (data.errorCode == 1) {
                console.log ('bad link')
              }

              else if (data.errorCode == 2) {
                console.log ('bad response')
              }

              else if (data.errorCode == 3) {
                console.log ('upload error')
              }
          }
    });
  }); 
</script>
