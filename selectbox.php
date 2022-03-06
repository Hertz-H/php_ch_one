

<?php
  echo'
  <form action="" method="get">
  <select name="subject[]" id="subject" multiple >
  <option value="html">html</option>
  <option value="css">css</option>
  <option value="js">js</option>
  </select>
  <button type="submit">submit </button>
  </form>
  ';
  if(isset($_GET["subject"]))
        {
            // Retrieving each selected option
            foreach ($_GET['subject'] as $subject)
                print "You selected $subject<br/>";
        }
    else
        echo "Select an option first !!";
    

  
?>