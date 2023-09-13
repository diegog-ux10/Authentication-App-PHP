<?php foreach ($model as $key => $value) {
    $$key = $value;
} ?>
<div class="form-container">
    <div class="form_text-container">
      <img class="" src="../assets/images/devchallenges1.png" alt="Your Company">
      <h2 class="">Join thousands of learners from around the world</h2>
      <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
    </div>
    <form class="needs-validation row" novalidate action="" method="post">
        <div class="mb-3 col-12">
            <input id="email" name="email" type="email" value="<?php echo $email ?>" class="form-control" required>
            <div class="invalid invalid-feedback">
                Looks good!
            </div>
        </div>
        <div class="mb-3">
            <input id="password" name="password" value="<?php echo $password ?>" type="password" class="form-control">
        </div>
        <div class="mb-3">
            <input id="passwordConfirm" name="passwordConfirm" value="<?php echo $passwordConfirm ?>" type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <p class="">
        or continue with these social profile
    </p>
    <div class="social-icons_container">
        <img src="../assets/images/Gihub.png" alt="">
        <img src="../assets/images/Facebook.png" alt="">
        <img src="../assets/images/Google.png" alt="">
        <img src="../assets/images/Twitter.png" alt="">
    </div>
    <p class="">
        Adready a member?
        <a href="/login" class="">Login</a>
    </p>
</div>