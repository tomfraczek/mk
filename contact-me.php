<?php include 'header.php';?>

<div class="page-breadcrumb">
    <div class="container">
        <h1>home / contact me</h1>
    </div>
</div>

    <div class="page-content--header contact-header">
        <h1>contact me</h1>
        <p>Feel free to contact me if you need help with PPC campaigns or need a bit of guidance regarding your digital strategy.
        </p>
    </div>

    <div class="free-consultation--hdiw-background">
        <div class="contact-me--wrapper">
            <img src="./assets/section_img.png" class="contact-me-img" alt="">
            <div class="contact-me--form-wrapper">
                <form name="contactform" method="post" action="send_form_email.php" class="free-consultation--hdiw-right__form">
                    <div class="free-consultation--hdiw-right__form-name">
                        <input  type="text" name="first_name" maxlength="50" size="30" placeholder="First name">
                        <input  type="text" name="last_name" maxlength="50" size="30" placeholder="Last Name">
                    </div>
                    <div class="free-consultation--hdiw-right__form-email">
                        <input  type="text" name="email" maxlength="80" size="30" placeholder="Email">
                    </div>
                    <div class="free-consultation--hdiw-right__form-phone">
                        <input  type="text" name="telephone" maxlength="30" size="30" placeholder="Phone number (optional)">
                    </div>
                    <div class="free-consultation--hdiw-right__form-message">
                        <textarea  name="comments" maxlength="1000" cols="25" rows="6" placeholder="tell me a bit about yourself & your business"></textarea>
                    </div>
                    <button class="btn btn-orange" name="submit" type="submit">submit now</button>
                </form>
            </div>
        </div>
    </div>



<?php include 'footer.php';?>