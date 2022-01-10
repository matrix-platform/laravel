/*global $*/
/*jslint browser,long*/

(function () {

    "use strict";

    $(document).ajaxSend(function (ignore, request) {
        let tokens = document.cookie.match(/^(.+[; ])?XSRF-TOKEN=([^;]+).*$/);

        if (tokens) {
            request.setRequestHeader("X-XSRF-TOKEN", decodeURIComponent(tokens[2]));
        }
    });

}());
