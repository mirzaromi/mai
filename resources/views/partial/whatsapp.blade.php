<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?11968';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = "/assets/js/whatsapp.js";
    // s.src = url;
    var options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#47c26c",
            "ctaText": "Hubungi Kami",
            "borderRadius": "25",
            "marginLeft": "0",
            "marginBottom": "50",
            "marginRight": "50",
            "position": "right"
        },
        "brandSetting": {
            "brandName": "Admin MAI",
            "brandSubTitle": "Dibalas secepatnya",
            "brandImg": "https://mai-au.sch.id/assets/assets/img/photos/mai/logoMAI.png",
            "welcomeText": "Assalaamu'alaikum\nButuh bantuan atau ada pertanyaan? Mari berdiskusi bersama kami.",
            "messageText": "Assalaamu'alaikum%0AMohon Informasi ppdb MAI Amanatul Ummah",
            "backgroundColor": "#0a5f54",
            "ctaText": "Start Chat",
            "borderRadius": "25",
            "autoShow": false,
            "phoneNumber": "6285157748815"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>