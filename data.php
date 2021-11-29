<?php
  while($row = mysqli_fetch_assoc($sql)) {
    $output .= '<a href="chat.php?user='.$row['email'].'"
                  <div class="user-block">
                    <i class="ti-user"></i>
                    <div class="profile">
                      <span>'.$row['ten_nguoi_dung'].'</span>
                      <p>2M2</p>
                    </div>
                  </div>
                </a>';  
  }
?>
