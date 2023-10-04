<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 form Example Tutorial</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Registration form
    </div>
    <div class="card-body">
      <form name="registration" id="registration" method="post" action="<?php echo e(url('store-form1')); ?>"  enctype="multipart/form-data">
       <?php echo csrf_field(); ?>
        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" class="form-control" required placeholder="Enter your name" >
        </div>

        <!-- Email Field -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required placeholder="Enter your email" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Introduction</label>
          <textarea name="introduction" class="form-control" required="" placeholder="enter a little introduction"></textarea>
        </div>
        <div class="form-group">
          <input type="file" name="profilepic" placeholder="Choose image" id="profilepic">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html><?php /**PATH C:\XXAMP\htdocs\facebookpost\resources\views/registration.blade.php ENDPATH**/ ?>