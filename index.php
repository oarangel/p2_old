
 <!DOCTYPE html>
 <html>
 <head>
     <title>Insurance_Calculator</title>
     <meta charset='utf-8'>
     <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
     <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
     <link href='../styles.css' rel='stylesheet'>
 </head>
 <body>

     <h1>Life insurance Premiun Calculator</h1>

     <h2>TO calculate premiun answer the following questions:</h2>

     <form method='POST' action='dropdown.php'>
         <label for='gender'>Select Gender</label>
         <select name='gender' id='gender'>
             <option value='choose'>Choose one...</option>
             <option value='fem' <?php if ($gender == 'fem') echo 'SELECTED'?>>Female</option>
             <option value='male' <?php if ($gender == 'male') echo 'SELECTED'?>>Male</option>
         </select>

         <input type='submit' class='btn btn-primary btn-sm'>

         <?php if ($_POST) : ?>
             <div class="alert <?=$alertType?>" role="alert">
                 <?=$results?>
             </div>
         <?php endif; ?>

     </form>

 </body>
 </html>
