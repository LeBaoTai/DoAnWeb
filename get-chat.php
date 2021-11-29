<?php
  session_start();
  if (isset($_SESSION['user'])) {
    include "config.php";
    $outgoing = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming = mysqli_real_escape_string($conn, $_POST['incoming_id']);

    $output = "";
    $sql = "SELECT * FROM messages WHERE (outgoing_msg_id = '$outgoing' AND incoming_msg_id = '$incoming')
            OR (outgoing_msg_id = '$incoming' AND incoming_msg_id = '$outgoing')";
    
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0 ) {
      while($row = mysqli_fetch_assoc($query)) {
        if ($row['outgoing_msg_id'] === $outgoing) {
          $output .= '<div class="chat out">
                        <div class="text">
                          <p>'. $row['msg'] .'</p>
                        </div>
                      </div>';
        }
        else {
          $output .= '<div class="chat in">
                        <div class="text">
                          <p>'.$row['msg'].'</p>
                        </div>
                      </div>';
        }

      }
      echo $output;
    }
  } 
  else {
    header("login.php");
  }
?>