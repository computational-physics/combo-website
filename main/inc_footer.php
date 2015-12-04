<?php 
define("ROOTPATH", "/main");
?>
    <div class="footer container">
        <div class="row">
            <div class="col-xs-12">
                <img src="//template.cityu.edu.hk/template/img/logos/cityu_deptpage.png">
                <a href="//www.ap.cityu.edu.hk/cityu/privacy/index.htm">Privacy Policy</a>
                | <a href="//www.ap.cityu.edu.hk/cityu/copyright/index.htm#copyright">Copyright</a>
                | <a href="//www.ap.cityu.edu.hk/cityu/disclaimer/index.htm#disclaimer">Disclaimer</a>
                | <a href="//www.ap.cityu.edu.hk/cityu/accessibility/">Accessibility</a>
                | <a href="//wikisites.cityu.edu.hk/sites/upolicies/corpid/Wiki%20Pages/University%20Policy%20and%20Guidelines%20for%20the%20Use%20of%20the%20University's%20Name%20and%20Visual%20Identity.aspx">University Logo/Name Policy</a>
                | <a href="//www.ap.cityu.edu.hk/cityu/geninfo/siteinfo.htm#webmaster">Contact Us</a>
                | <a href="//www.adobe.com/" target="_blank">Download Acrobat Reader</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(function(argument) {
        // set target=_blank for all external links
        // credit: http://stackoverflow.com/questions/2910946/test-if-links-are-external-with-jquery-javascript
        var nodes = document.getElementsByTagName("a"), i = nodes.length;
        var regExp = new RegExp("//" + location.host + "($|/)");
        while (i--) {
            var href = nodes[i].href;
            var isLocal = (href.substring(0,4) === "http") ? regExp.test(href) : true;
            if (!isLocal)
                nodes[i].target = "_blank";
        }
    });
    </script>