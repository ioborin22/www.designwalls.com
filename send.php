<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/images/design-walls-com.png" type="image/x-icon">
    <link rel="image_src" href="/images/design-walls-com.png">
    <link href="/images/design-walls-com.png" rel="apple-touch-icon">
    <link href="/images/design-walls-com.png" rel="apple-touch-icon" sizes="76x76">
    <link href="/images/design-walls-com.png" rel="apple-touch-icon" sizes="120x120">
    <link href="/images/design-walls-com.png" rel="apple-touch-icon" sizes="152x152">
    <link rel="canonical" href="https://www.designwalls.com/contact.php"/>
    <title>Contact Us - DesignWalls.com</title>
    <meta name="description"
          content="Our contact page includes all the standard information — email for get in touch. Contact us for better relations - DesignWalls.com">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.designwalls.com/contact.php"/>
    <meta property="og:site_name" content="DesignWalls.com - Home Interior Design and Decorating"/>
    <meta property="og:image" itemprop="image primaryImageOfPage"
          content="/images/design-walls-com.png"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:domain" content="www.designwalls.com"/>
    <meta name="twitter:title" property="og:title" itemprop="name"
          content="Contact Us - DesignWalls.com"/>
    <meta name="twitter:description" property="og:description" itemprop="description"
          content="Our contact page includes all the standard information — email for get in touch. Contact us for better relations - DesignWalls.com">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7891682323351640"
            crossorigin="anonymous"></script>
</head>
<body>
<header class="header">
    <nav class="navbar">
        <div class="navbar-links">
            <div itemscope itemtype="http://schema.org/SiteNavigationElement">
                <a itemprop="url" href="/"><img style="max-width: 200px" width="100%"
                                                src="/images/design-walls-com-logo.png" alt="design-walls-com-logo"></a>
            </div>
        </div>
        <div class="navbar-auth">
            <div itemscope itemtype="http://schema.org/SiteNavigationElement">
                <label>
                    <select class="form-control"
                            onchange="window.location.href = this.options[this.selectedIndex].value">
                        <option value="/">MENU</option>
                        <option itemprop="url" value="/bathroom.html">Bathroom</option>
                        <option itemprop="url" value="/bedroom.html">Bedroom</option>
                        <option itemprop="url" value="/birthday.html">Birthday</option>
                        <option itemprop="url" value="/decor.html">Decor</option>
                        <option itemprop="url" value="/design.html">Design</option>
                        <option itemprop="url" value="/dining-room.html">Dining room</option>
                        <option itemprop="url" value="/garage.html">Garage</option>
                        <option itemprop="url" value="/garden-designs.html">Garden designs</option>
                        <option itemprop="url" value="/interior.html">Interior</option>
                        <option itemprop="url" value="/kids-room.html">Kids room</option>
                        <option itemprop="url" value="/kitchen.html">Kitchen</option>
                        <option itemprop="url" value="/lights.html">Lights</option>
                        <option itemprop="url" value="/living-room.html">Living room</option>
                        <option itemprop="url" value="/sofas.html">Sofas</option>
                        <option itemprop="url" value="/office.html">Office</option>
                    </select>
                </label>
            </div>
        </div>
    </nav>
</header>
<main>
    <section class="center" style="width: 100%">
        <div class="product-card">
            <?php
            if ($_POST['send_an_message']==TRUE){

                // Send message
                $email = "shoppincode@gmail.com";
                $subject = "Message from DesignWalls.com";
                $message =
                    "Name: " . $_POST['name'] . ", "
                    . "E-mail: " . $_POST['email'] . ", "
                    . "Text: ". $_POST['text'];

                $headers = "From: DesignWalls.com <no-reply@designwalls.com>\r\nContent-type: text/plain; charset=UTF-8 \r\n";
                mail($email, $subject, $message, $headers);

                echo "<p style='color: #3d9301'><b>Thank you for getting in touch!</b><br> We appreciate you contacting us www.designwalls.com. One of our colleagues will get back in touch with you soon! Have a great day!</p>";
            }
            else {
                echo "<p style='color: #e61919'>Error: Message not sent.</p>";
                header('Refresh: 5; url=/');
                exit( );
            }
            ?>

        </div>
    </section>
</main>
<footer>
    <p><a href="/privacy-policy.html">privacy policy</a> | <a href="/sitemap.html">sitemap</a> | <a href="/contact.php">contact us</a></p>
    <div id="footer-line">DesignWalls.com - Home Interior Design and Decorating 2015-2022.</div>
</footer>
</body>
</html>
<script type="text/javascript">
    function addLink() {
        var body_element = document.getElementsByTagName('body')[0];
        var selection;
        selection = window.getSelection();
        var pagelink = "<br /><br /> Source: <a href='"+document.location.href+"'>https://www.designwalls.com/</a><br />";
        var copytext = selection + pagelink;
        var newdiv = document.createElement('div');
        newdiv.style.position='absolute';
        newdiv.style.left='-99999px';
        body_element.appendChild(newdiv);
        newdiv.innerHTML = copytext;
        selection.selectAllChildren(newdiv);
        window.setTimeout(function() {
            body_element.removeChild(newdiv);
        },0);
    }
    document.oncopy = addLink;
</script>