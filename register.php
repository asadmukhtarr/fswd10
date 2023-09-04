<?php include('include/header.php'); // header .. ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-5">
     <?php include('error.php'); // error .. ?>
      <div class="card">
        <div class="card-header">
          Register Here
        </div>
        <div class="card-body">
          <form action="actions/register.php" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" />
            </div>
            <div class="form-group">
              <label for="">What's App</label>
              <input type="number" class="form-control" name="wp" />
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" name="password" />
            </div>
            <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="password" class="form-control" name="cpassword" />
            </div>
            <div class="form-group">
                <button class="btn btn-danger float-right" type="submit">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-7">
      <h2>Hello Friends!</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nam saepe minus laboriosam iusto omnis consequuntur magnam accusamus nulla atque reiciendis nobis, enim eaque aperiam rem repudiandae a ullam quasi?
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, illum tempore omnis consectetur ex qui, fuga assumenda ipsam nostrum neque architecto laboriosam ab minus non ratione autem rem quae hic?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel eum obcaecati, et blanditiis laboriosam distinctio consectetur temporibus facere quis voluptate ducimus, placeat qui, nihil iste ipsa voluptatem reprehenderit quam unde!
      </p>
    </div>
  </div>
</div>
<?php include('include/footer.php'); // footer .. ?>