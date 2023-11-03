<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="description" content="Customer Portal">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{config("customer_portal.company_name")}}</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="/assets/fonts/feather/feather.min.css">
   <link rel="stylesheet" href="/assets/libs/flatpickr/dist/flatpickr.min.css">
   <link rel="stylesheet" href="/assets/css/theme.css">
   <link rel="stylesheet" href="/assets/css/select2.css">
   <link rel="stylesheet" href="/assets/css/bootstrap-colorpicker.min.css">
   <link rel="stylesheet" href="/assets/css/Chart.min.css">
   <!-- Google Tag Manager -->
   <script>
      (function(w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-WTWLF8D2');
   </script>
   <!-- End Google Tag Manager -->
   <script type="text/javascript">
      window.$crisp = [];
      window.CRISP_WEBSITE_ID = "e044823b-9247-4d4c-a53d-79721b8b91d3";
      (function() {
         d = document;
         s = d.createElement("script");
         s.src = "https://client.crisp.chat/l.js";
         s.async = 1;
         d.getElementsByTagName("head")[0].appendChild(s);
      })();
   </script>
</head>