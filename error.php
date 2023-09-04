  <!-- ! (Nahi) Empty (Khali) -->
  <?php if(!empty($_GET['msg'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfully!</strong> <?php echo $_GET['msg']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>
  <?php if(!empty($_GET['error'])){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Try Again!</strong> <?php echo $_GET['error']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>