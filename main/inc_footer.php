<?php 
define("ROOTPATH", "/main");
?>
    <div class="footer container">
        <div class="row">
            <div class="col-xs-12 vertical-center">
                <a href="//www6.cityu.edu.hk/mse">Department of Materials Science and Engineering</a>
                | <a href="//www.cityu.edu.hk/">City University of Hong Kong</a>
                | <a>Kowloon, Hong Kong SAR</a>
                | <a href="mailto:junfan@cityu.edu.hk">junfan@cityu.edu.hk</a>
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