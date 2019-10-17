<div class="sign col-lg-5 col-md-7 col-sm-9 col-11">
    <h5 class="text-center"><?php echo lang('sign_up') ?></h5>
    <form method="post" id="signUp_form" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
        <div class="row">
            <div class="col-md-8 col-11">
                <label for="name">Enter Your Name</label>
                <input id="name" type="text" name="name">
            </div>

            <div class="col-md-8 col-11">
                <label for="no">Enter Your E-mail</label>
                <input id="no"  type="text" name="no">
            </div>

            <div class="col-md-8 col-11">
                <label for="pass">Enter Password</label>
                <input id="pass" type="password" name="pass">
            </div>

            <div class="col-md-8 col-11">
                <label for="re-pass">Confirm Password</label>
                <input id="re-pass" type="password" name="re-pass">
            </div>

            <div class="col-md-8 col-11">
                <label for="nat_id">Enter National ID</label>
                <input id="nat_id" type="text" name="nat_id">
            </div>

            <div class="col-md-8 col-11">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <input type="date">
                    </div>

                    <div class="col-md-6 col-12">
                        <label for="place_of_birth">Place of Birth</label>
                        <input id="place_of_birth" type="password" name="b_of_birth">
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-11">
                <label for="phone">Enter Your Phone Number</label>
                <input id="phone" type="text" name="phone">
            </div>


            <div class="col-md-5 col-11">
            </div>

            <div class="text-center col-12" >
                <button type="submit" href="#" class="btn btn-danger btn-lg center-block">Done</button>
            </div>
        </div>
    </form>
    <div  class="foot center-block">
        <span>If You Sign Up</span>
        <a href="home/signin">Log In</a>
    </div>
</div>
