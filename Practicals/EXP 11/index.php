<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/css/uikit.min.css" />

  <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit-icons.min.js"></script>

  
 </head>
 <body>
  <br />
  <div class="container">
   <div class="row">
    <div class="col-md-8" style="margin:0 auto; float:none;">
     <h3 align="center">Send an Email on Form Submission using PHP with mail()</h3>
     <br />
     <form action="tmp.php" method="post" enctype="multipart/form-data" >
      <div class="form-group">
       <label>To</label>
       <input type="text" name="email" placeholder="Enter Email" class="form-control" value="" />
      </div>
      <div class="form-group">
       <label>Subject</label>
       <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="" />
      </div>
      
      <div class="form-group">
       <label>Body </label>
       <textarea rows="4" name="body" class="form-control" placeholder="Enter Message"></textarea>
      </div>

      <div class="uk-margin" uk-margin>
        <div uk-form-custom="target: true">
            <input type="file" name="attachment">
            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
        </div>
        <button class="uk-button uk-button-default">CHOOSE</button>
      </div>

      <div class="form-group" align="center">
       <input type="submit" name="submit" value="Submit" class="btn btn-info" />
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>