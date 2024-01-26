<?php $settings=App\Settings::where('id',1)->first();?>
<!DOCTYPE html>
<html class="js" lang="en" style="--header-height: 52px; padding-bottom: 60px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="canonical" href="https://new-ella-demo.myshopify.com/">
    <link rel="canonical" href="https://new-ella-demo.myshopify.com/" canonical-shop-url="https://new-ella-demo.myshopify.com/">
    <link rel="shortcut icon" href="{{URL::to('/')}}/application/storage/app/slider/{{$settings->icon}}" type="image/png">
    <title>{{$settings->name}}</title>
    <meta name="description" content="">
    <meta property="og:site_name" content="{{$settings->name}}">
    <meta property="og:url" content="">
    <meta property="og:title" content="{{$settings->name}}">
    <meta property="og:type" content="website">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:width" content="590">
    <meta property="og:image:height" content="300"><meta name="twitter:site" content="@shopify"><meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{$settings->name}}">
    <meta name="twitter:description" content="">

    <script type="text/javascript" async="" src="{{URL::to('/')}}/public/template/loader.js"></script><script async="" src="{{URL::to('/')}}/public/template/analytics.js"></script><script type="text/javascript" async="" src="{{URL::to('/')}}/public/template/trekkie.storefront.e3446faf2feba5857aa32712db2bec9cd365a6df.min.js"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/8133050458/digital_wallets/dialog">

    <link rel="alternate" hreflang="x-default" href="https://new-ella-demo.myshopify.com/">
    <link rel="alternate" hreflang="en-US" href="https://new-ella-demo.myshopify.com/">
    <link rel="alternate" hreflang="de-US" href="https://new-ella-demo.myshopify.com/de">

    <script>
        (function() {
            var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.latest.en.8645d252f07ec25fdbc6.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~Information~NoAddressLocation~Payment~PostPurchase~Review~Shipping~ShopPay~Sho~cf13f96e.latest.en.04837ae4ff5a8e949953.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.84ff9c0024faf7f72c14.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.900911b3d82c82309ebf.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.86cd9328cdcd6cd3a58f.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.b4546f9bffad10b3673b.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~app.latest.en.f5154093d2604596d084.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.931851b1b02f1bcae42a.js"];
            var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.9f2a5e9ec696775e2217.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.e788719f193b49c039a3.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.6b4c79ead7042980b29d.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.da9f06164a980bf8e7ea.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.9a0274ab07be120c1902.css"];
    
            function prefetch(url, as, callback) {
                var link = document.createElement('link');
                if (link.relList.supports('prefetch')) {
                    link.rel = 'prefetch';
                    link.fetchPriority = 'low';
                    link.as = as;
                    link.href = url;
                    link.onload = link.onerror = callback;
                    document.head.appendChild(link);
                } else {
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', url, true);
                    xhr.onloadend = callback;
                    xhr.send();
                }
            }
    
            function prefetchAssets() {
                var resources = [].concat(
                    scripts.map(function(url) { return [url, 'script']; }),
                    styles.map(function(url) { return [url, 'style']; })
                );
                var index = 0;
                (function next() {
                    var res = resources[index++];
                    if (res) prefetch(res[0], res[1], next);
                })();
        }
        addEventListener('load', prefetchAssets);
       })();
    </script>

    <script id="shopify-features" type="application/json">{"accessToken":"b39fdb51fc99e345463e50d63c93a45e","betas":["rich-media-storefront-analytics"],"domain":"new-ella-demo.myshopify.com","predictiveSearch":true,"shopId":8133050458,"smart_payment_buttons_url":"https:\/\/new-ella-demo.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/new-ella-demo.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en","optimusEnabled":false,"betterDynamicCheckoutRecommendation":false}</script>
    
    <script>var Shopify = Shopify || {};
        Shopify.shop = "new-ella-demo.myshopify.com";
        Shopify.locale = "en";
        Shopify.currency = {"active":"USD","rate":"1.0"};
        Shopify.country = "US";
        Shopify.theme = {"name":"Home 06 - SuperMarket","id":123126808666,"theme_store_id":null,"role":"unpublished"};
        Shopify.theme.handle = "null";
        Shopify.theme.style = {"id":null,"handle":null};
        Shopify.cdnHost = "cdn.shopify.com";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "/";</script>
        <script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
        <script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
        <script>window.ShopifyPay = window.ShopifyPay || {};
        window.ShopifyPay.apiHost = "shop.app\/pay";</script>
        <script>(function() {
          function asyncLoad() {
            var urls = ["\/\/productreviews.shopifycdn.com\/embed\/loader.js?shop=new-ella-demo.myshopify.com"];
            for (var i = 0; i < urls.length; i++) {
              var s = document.createElement('script');
              s.type = 'text/javascript';
              s.async = true;
              s.src = urls[i];
              var x = document.getElementsByTagName('script')[0];
              x.parentNode.insertBefore(s, x);
            }
          };
          if(window.attachEvent) {
            window.attachEvent('onload', asyncLoad);
          } else {
            window.addEventListener('load', asyncLoad, false);
          }
        })();
    </script>

    <script id="__st">var __st={"a":8133050458,"offset":-14400,"reqid":"7658f147-886a-4726-81e1-80fac313547c","pageurl":"new-ella-demo.myshopify.com\/?fts=0","u":"070f14e1ceac","p":"home"};</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
    <script>document.addEventListener('DOMContentLoaded', function() {
          const previewBarInjector = new Shopify.PreviewBarInjector({
            targetNode: document.body,
            iframeRoot: 'https://new-ella-demo.myshopify.com',
            iframeSrc: 'https://new-ella-demo.myshopify.com/preview_bar',
            previewToken: 'wlznalysds9e1cbb',
            themeStoreId: '',
            permanentDomain: 'new-ella-demo.myshopify.com',
          });
          previewBarInjector.init();
        });
    </script>
    
    <script integrity="sha256-PxOtY43aY0IIRkJyboCWUgXVuC12GAXQ8LKFAxO8H98=" data-source-attribution="shopify.loadfeatures" defer="defer" src="{{URL::to('/')}}/public/template/load_feature-3f13ad638dda6342084642726e80965205d5b82d761805d0f0b2850313bc1fdf.js" crossorigin="anonymous"></script>
    <script crossorigin="anonymous" defer="defer" src="{{URL::to('/')}}/public/template/storefront-c31d2fa4962d2ef90b673e945ee33f4f87302b97d0882cd8e83a629b84b30dab.js"></script>
    <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="{{URL::to('/')}}/public/template/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
    <script integrity="sha256-V7lM7zdLAxLbwI5Iz1g1WLOqzMR1UKAIHMJLCMbKENY=" defer="defer" src="{{URL::to('/')}}/public/template/preview_bar_injector-57b94cef374b0312dbc08e48cf583558b3aaccc47550a0081cc24b08c6ca10d6.js" crossorigin="anonymous"></script>
    <script id="sections-script" data-sections="header-navigation-vertical-menu,header-mobile" defer="defer" src="{{URL::to('/')}}/public/template/scripts.js"></script>

    <style id="shopify-dynamic-checkout-cart">@media screen and (min-width: 750px) {
          #dynamic-checkout-cart {
            min-height: 50px;
          }
        }
    
        @media screen and (max-width: 750px) {
          #dynamic-checkout-cart {
            min-height: 60px;
          }
        }
    </style>

    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
    <style>@import url('https://fonts.googleapis.com/css?family=DM+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap');
                
@import url('https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap');
                    
:root {
        --font-family-1: DM Sans;
        --font-family-2: Rubik;

        /* Settings Body */--font-body-family: DM Sans;--font-body-size: 14px;--font-body-weight: 400;--body-line-height: 24px;--body-letter-spacing: 0;

        /* Settings Heading */--font-heading-family: Rubik;--font-heading-size: 20px;--font-heading-weight: 700;--font-heading-style: normal;--heading-line-height: 34px;--heading-letter-spacing: 0;--heading-text-transform: capitalize;--heading-border-height: 1px;

        /* Menu Lv1 */--font-menu-lv1-family: DM Sans;--font-menu-lv1-size: 16px;--font-menu-lv1-weight: 500;--menu-lv1-line-height: 24px;--menu-lv1-letter-spacing: 0;--menu-lv1-text-transform: capitalize;

        /* Menu Lv2 */--font-menu-lv2-family: DM Sans;--font-menu-lv2-size: 14px;--font-menu-lv2-weight: 400;--menu-lv2-line-height: 24px;--menu-lv2-letter-spacing: 0;--menu-lv2-text-transform: capitalize;

        /* Menu Lv3 */--font-menu-lv3-family: DM Sans;--font-menu-lv3-size: 14px;--font-menu-lv3-weight: 400;--menu-lv3-line-height: 24px;--menu-lv3-letter-spacing: 0;--menu-lv3-text-transform: capitalize;

        /* Mega Menu Lv2 */--font-mega-menu-lv2-family: DM Sans;--font-mega-menu-lv2-size: 16px;--font-mega-menu-lv2-weight: 700;--font-mega-menu-lv2-style: normal;--mega-menu-lv2-line-height: 22px;--mega-menu-lv2-letter-spacing: 0;--mega-menu-lv2-text-transform: capitalize;

        /* Mega Menu Lv3 */--font-mega-menu-lv3-family: DM Sans;--font-mega-menu-lv3-size: 14px;--font-mega-menu-lv3-weight: 400;--mega-menu-lv3-line-height: 24px;--mega-menu-lv3-letter-spacing: .02em;--mega-menu-lv3-text-transform: capitalize;

        /* Product Card Title */--product-title-font: DM Sans;--product-title-font-size : 16px;--product-title-font-weight : 400;--product-title-line-height: 24px;--product-title-letter-spacing: 0;--product-title-line-text : 2;--product-title-text-transform : capitalize;--product-title-margin-bottom: 12px;

        /* Product Card Vendor */--product-vendor-font: DM Sans;--product-vendor-font-size : 13px;--product-vendor-font-weight : 500;--product-vendor-font-style : normal;--product-vendor-line-height: 20px;--product-vendor-letter-spacing: 0;--product-vendor-text-transform : uppercase;--product-vendor-margin-bottom: 3px;

        /* Product Card Price */--product-price-font: Rubik;--product-price-font-size : 16px;--product-price-font-weight : 700;--product-price-line-height: 22px;--product-price-letter-spacing: 0;--product-price-margin-top: 6px;--product-price-margin-bottom: 13px;

        /* Product Card Badge */--badge-font: DM Sans;--badge-font-size : 14px;--badge-font-weight : 400;--badge-text-transform : capitalize;--badge-letter-spacing: 0;--badge-line-height: 20px;--badge-border-radius: 3px;--badge-padding-top: 5px;--badge-padding-bottom: 5px;--badge-padding-left-right: 14px;--badge-postion-top: 0px;--badge-postion-left-right: 0px;

        /* Product Quickview */
        --product-quickview-font-size : 14px; --product-quickview-line-height: 22px; --product-quickview-border-radius: 30px; --product-quickview-padding-top: 3px; --product-quickview-padding-bottom: 3px; --product-quickview-padding-left-right: 13px; --product-quickview-sold-out-product: #e95144;--product-quickview-box-shadow: 0 1px 3px #0003;/* Blog Card Tile */--blog-title-font: DM Sans;--blog-title-font-size : 18px; --blog-title-font-weight : 700; --blog-title-line-height: 36px; --blog-title-letter-spacing: 0; --blog-title-text-transform : capitalize;

        /* Blog Card Info (Date, Author) */--blog-info-font: DM Sans;--blog-info-font-size : 12px; --blog-info-font-weight : 400; --blog-info-line-height: 22px; --blog-info-letter-spacing: 0; --blog-info-text-transform : none;

        /* Button 1 */--btn-1-font-family: DM Sans;--btn-1-font-size: 16px; --btn-1-font-weight: 500; --btn-1-text-transform: capitalize; --btn-1-line-height: 24px; --btn-1-letter-spacing: 0; --btn-1-text-align: center; --btn-1-border-radius: 25px; --btn-1-border-width: 1px; --btn-1-border-style: solid; --btn-1-padding-top: 12px; --btn-1-padding-bottom: 12px; --btn-1-horizontal-length: 0px; --btn-1-vertical-length: 0px; --btn-1-blur-radius: 0px; --btn-1-spread: 0px;
        
--btn-1-inset: ;/* Button 2 */--btn-2-font-family: Rubik;--btn-2-font-size: 16px; --btn-2-font-weight: 700; --btn-2-text-transform: uppercase; --btn-2-line-height: 24px; --btn-2-letter-spacing: .05em; --btn-2-text-align: center; --btn-2-border-radius: 0px; --btn-2-border-width: 1px; --btn-2-border-style: solid; --btn-2-padding-top: 20px; --btn-2-padding-bottom: 20px; --btn-2-horizontal-length: 0px; --btn-2-vertical-length: 0px; --btn-2-blur-radius: 0px; --btn-2-spread: 0px;
        
--btn-2-inset: ;/* Button 3 */--btn-3-font-family: DM Sans;--btn-3-font-size: 14px; --btn-3-font-weight: 700; --btn-3-text-transform: capitalize; --btn-3-line-height: 24px; --btn-3-letter-spacing: 0; --btn-3-text-align: center; --btn-3-border-radius: 30px; --btn-3-border-width: 1px; --btn-3-border-style: solid; --btn-3-padding-top: 6px; --btn-3-padding-bottom: 8px; --btn-3-horizontal-length: 0px; --btn-3-vertical-length: 0px; --btn-3-blur-radius: 0px; --btn-3-spread: 0px;
        
--btn-3-inset: ;/* Footer Heading */--footer-heading-font-family: Rubik;--footer-heading-font-size : 16px; --footer-heading-font-weight : 700; --footer-heading-line-height : 26px; --footer-heading-letter-spacing : ; --footer-heading-text-transform : uppercase;

        /* Footer Link */--footer-link-font-family: DM Sans;--footer-link-font-size : 14px; --footer-link-font-weight : ; --footer-link-line-height : 34px; --footer-link-letter-spacing : 0; --footer-link-text-transform : capitalize;

        /* Page Title */--font-page-title-family: DM Sans;--font-page-title-size: 36px; --font-page-title-weight: 600; --font-page-title-style: normal; --page-title-line-height: 20px; --page-title-letter-spacing: .02em; --page-title-text-transform: capitalize;

        /* Font Product Tab Title */
        --font-tab-type-1: DM Sans; --font-tab-type-2: Rubik;

        /* Text Size */
        --text-size-font-size : 10px; --text-size-font-weight : 400; --text-size-line-height : 22px; --text-size-letter-spacing : 0; --text-size-text-transform : uppercase; --text-size-color : #787878;

        /* Font Weight */
        --font-weight-normal: 400; --font-weight-medium: 500; --font-weight-semibold: 600; --font-weight-bold: 700; --font-weight-bolder: 800; --font-weight-black: 900;

        /* Radio Button */
        --form-label-checkbox-before-bg: #fff; --form-label-checkbox-before-border: #cecece; --form-label-checkbox-before-bg-checked: #000;

        /* Conatiner */
        --body-custom-width-container: 1600px;

        /* Layout Boxed */
        --color-background-layout-boxed: rgba(0,0,0,0);/* Arrow */
        --position-horizontal-slick-arrow: 35px;

        /* General Color*/
        --color-text: #232323; --color-text2: #969696; --color-global: #232323; --color-white: #FFFFFF; --color-grey: #868686; --color-black: #202020; --color-base-text-rgb: 35, 35, 35; --color-base-text2-rgb: 150, 150, 150; --color-background: #ffffff; --color-background-rgb: 255, 255, 255; --color-background-overylay: rgba(255, 255, 255, 0.9); --color-base-accent-text: ; --color-base-accent-1: ; --color-base-accent-2: ; --color-link: #232323; --color-link-hover: #232323; --color-error: #D93333; --color-error-bg: #FCEEEE; --color-success: #5A5A5A; --color-success-bg: #DFF0D8; --color-info: #202020; --color-info-bg: #FFF2DD; --color-link-underline: rgba(35, 35, 35, 0.5); --color-breadcrumb: #999999; --colors-breadcrumb-hover: #232323;--colors-breadcrumb-active: #999999; --border-global: #e6e6e6; --bg-global: #fafafa; --bg-planceholder: #fafafa; --color-warning: #fff; --bg-warning: #e0b252; --color-background-10 : #e9e9e9; --color-background-20 : #d3d3d3; --color-background-30 : #bdbdbd; --color-background-50 : #919191; --color-background-global : #919191;

        /* Arrow Color */
        --arrow-color: #212121; --arrow-background-color: #ffffff; --arrow-border-color: #505050;--arrow-color-hover: #ffffff;--arrow-background-color-hover: #fd6506;--arrow-border-color-hover: #fd6506;--arrow-width: 36px;--arrow-height: 36px;--arrow-size: 55px;--arrow-size-icon: 17px;--arrow-border-radius: 50%;--arrow-border-width: 2px;

        /* Pagination Color */
        --pagination-item-color: #3c3c3c; --pagination-item-color-active: #3c3c3c; --pagination-item-bg-color: #fff;--pagination-item-bg-color-active: #fff;--pagination-item-border-color: #fff;--pagination-item-border-color-active: #3c3c3c;--pagination-arrow-color: #3c3c3c;--pagination-arrow-color-active: #3c3c3c;--pagination-arrow-bg-color: #fff;--pagination-arrow-bg-color-active: #fff;--pagination-arrow-border-color: #fff;--pagination-arrow-border-color-active: #fff;

        /* Dots Color */
        --dots-color: #cecece;--dots-border-color: #cecece;--dots-color-active: #fd6506;--dots-border-color-active: #fd6506;--dots-style2-background-opacity: #00000020;--dots-width: 10px;--dots-height: 10px;

        /* Button Color */
        --btn-1-color: #ffffff;--btn-1-bg: #0a6cdc;--btn-1-border: #0a6cdc;--btn-1-color-hover: #202020;--btn-1-bg-hover: #ffffff;--btn-1-border-hover: #cccccc;
        --btn-2-color: #202020;--btn-2-bg: #ffffff;--btn-2-border: #cccccc;--btn-2-color-hover: #ffffff;--btn-2-bg-hover: #0a6cdc;--btn-2-border-hover: #0a6cdc;
        --btn-3-color: #FFFFFF;--btn-3-bg: #e9514b;--btn-3-border: #e9514b;--btn-3-color-hover: #ffffff;--btn-3-bg-hover: #e9514b;--btn-3-border-hover: #e9514b;
        --anchor-transition: all ease .3s;--bg-white: #ffffff;--bg-black: #000000;--bg-grey: #808080;--icon: var(--color-text);--text-cart: #3c3c3c;--duration-short: 100ms;--duration-default: 350ms;--duration-long: 500ms;--form-input-bg: #ffffff;--form-input-border: #c7c7c7;--form-input-color: #232323;--form-input-placeholder: #868686;--form-label: #232323;

        --new-badge-color: #0a6cdc;--new-badge-bg: #d2e7ff;--sale-badge-color: #e10600;--sale-badge-bg: #ffd8d7;--sold-out-badge-color: #505050;--sold-out-badge-bg: #e7e7e7;--custom-badge-color: #fd9427;--custom-badge-bg: #feedbd;--bundle-badge-color: #43b200;--bundle-badge-bg: #d7ffd2;
        
        --product-title-color : #000000;--product-title-color-hover : #3385f6;--product-vendor-color : #787878;--product-price-color : #202020;--product-sale-price-color : #e10600;--product-compare-price-color : #505050;--product-review-full-color : #f8c646;--product-review-empty-color : #e4e4e4;

        --product-swatch-border : #cbcbcb;--product-swatch-border-active : #232323;--product-swatch-width : 40px;--product-swatch-height : 40px;--product-swatch-border-radius : 0px;--product-swatch-color-width : 40px;--product-swatch-color-height : 40px;--product-swatch-color-border-radius : 20px;

        --product-wishlist-color : #000000;--product-wishlist-bg : #f5f5f5;--product-wishlist-border : transparent;--product-wishlist-color-added : #000000;--product-wishlist-bg-added : #ffe5e5;--product-wishlist-border-added : transparent;--product-compare-color : #000000;--product-compare-bg : #FFFFFF;--product-compare-color-added : #D12442; --product-compare-bg-added : #FFFFFF; --product-hot-stock-text-color : #d62828; --product-quick-view-color : #0b0335; --product-cart-image-fit : contain; --product-title-variant-font-size: 16px;--product-quick-view-bg : #ffffff;--product-quick-view-bg-above-button: rgba(255, 255, 255, 0.7);--product-quick-view-color-hover : #0b0335;--product-quick-view-bg-hover : #ffffff;--product-action-color : #000000;--product-action-bg : #ffffff;--product-action-border : #000000;--product-action-color-hover : #ffffff;--product-action-bg-hover : #0a6cdc;--product-action-border-hover : #0a6cdc;

        /* Multilevel Category Filter */
        --color-label-multiLevel-categories: #232323;--bg-label-multiLevel-categories: #fff;--color-button-multiLevel-categories: #fff;--bg-button-multiLevel-categories: #ff8b21;--border-button-multiLevel-categories: #ff736b;--hover-color-button-multiLevel-categories: #fff;--hover-bg-button-multiLevel-categories: #ff8b21;--cart-item-bg : #ffffff;--cart-item-border : #e8e8e8;--cart-item-border-width : 1px;--cart-item-border-style : solid;--free-shipping-height : 10px;--free-shipping-border-radius : 20px;--free-shipping-color : #727272; --free-shipping-bg : #ededed;--free-shipping-bg-1: #f44336;--free-shipping-bg-2: #ffc206;--free-shipping-bg-3: #69c69c;--free-shipping-bg-4: #69c69c; --free-shipping-min-height : 20.0px;--w-product-swatch-custom: 24px;--h-product-swatch-custom: 24px;--w-product-swatch-custom-mb: 20px;--h-product-swatch-custom-mb: 20px;--font-size-product-swatch-more: 12px;--swatch-border : #cbcbcb;--swatch-border-active : #232323;

        --variant-size: #232323;--variant-size-border: #e7e7e7;--variant-size-bg: #ffffff;--variant-size-hover: #ffffff;--variant-size-border-hover: #232323;--variant-size-bg-hover: #232323;--variant-bg : #ffffff; --variant-color : #232323; --variant-bg-active : #ffffff; --variant-color-active : #232323;

        --fontsize-text-social: 12px;
        --page-content-distance: 64px;--sidebar-content-distance: 40px;--button-transition-ease: cubic-bezier(.25,.46,.45,.94);

        /* Loading Spinner Color */
        --spinner-top-color: #fc0; --spinner-right-color: #4dd4c6; --spinner-bottom-color: #f00; --spinner-left-color: #f6f6f6;

        /* Product Card Marquee */
        --product-marquee-background-color: ;--product-marquee-text-color: #FFFFFF;--product-marquee-text-size: 14px;--product-marquee-text-mobile-size: 14px;--product-marquee-text-weight: 400;--product-marquee-text-transform: none;--product-marquee-text-style: italic;--product-marquee-speed: ; --product-marquee-line-height: calc(var(--product-marquee-text-mobile-size) * 1.5);
    }
    div#slideshow-wrapper-template--14613100560474__16426738253c0b77ec {
    margin-top: 5px!important;
}
</style>
        <link href="{{URL::to('/')}}/public/template/base.css" rel="stylesheet" type="text/css" media="all">
<link href="{{URL::to('/')}}/public/template/animated.css" rel="stylesheet" type="text/css" media="all">
<link href="{{URL::to('/')}}/public/template/component-card.css" rel="stylesheet" type="text/css" media="all">
<link href="{{URL::to('/')}}/public/template/component-loading-overlay.css" rel="stylesheet" type="text/css" media="all">
<link href="{{URL::to('/')}}/public/template/component-loading-banner.css" rel="stylesheet" type="text/css" media="all">
<link href="{{URL::to('/')}}/public/template/component-quick-cart.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="{{URL::to('/')}}/public/template/vendor.css" media="all" onload="this.media=&#39;all&#39;">
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/vendor.css?v=164616260963476715651658317978" rel="stylesheet" type="text/css" media="all" /></noscript>


	<link href="{{URL::to('/')}}/public/template/component-card-02.css" rel="stylesheet" type="text/css" media="all">

<!--<link href="{{URL::to('/')}}/public/template/component-predictive-search.css" rel="stylesheet" type="text/css" media="all">-->
<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-product-form.css" media="all" onload="this.media=&#39;all&#39;">
	<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-review.css" media="all" onload="this.media=&#39;all&#39;">
	<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-price.css" media="all" onload="this.media=&#39;all&#39;">
	<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-badge.css" media="all" onload="this.media=&#39;all&#39;">
	<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-rte.css" media="all" onload="this.media=&#39;all&#39;">
	<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-share.css" media="all" onload="this.media=&#39;all&#39;"><link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-newsletter.css" media="all" onload="this.media=&#39;all&#39;">
<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-slider.css" media="all" onload="this.media=&#39;all&#39;">
<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-list-social.css" media="all" onload="this.media=&#39;all&#39;"><noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-product-form.css?v=140087122189431595481685699329" rel="stylesheet" type="text/css" media="all" /></noscript>
	<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-review.css?v=100129706126506303331658317978" rel="stylesheet" type="text/css" media="all" /></noscript>
	<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-price.css?v=139205013722916111901667970355" rel="stylesheet" type="text/css" media="all" /></noscript>
	<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-badge.css?v=20633729062276667811658317978" rel="stylesheet" type="text/css" media="all" /></noscript>
	<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-rte.css?v=74468535300400368301673427934" rel="stylesheet" type="text/css" media="all" /></noscript>
	<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-share.css?v=44588194783764334011685699259" rel="stylesheet" type="text/css" media="all" /></noscript><noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-newsletter.css?v=54058530822278129331667970481" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-slider.css?v=37888473738646685221673427459" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-list-social.css?v=102044711114163579551667970385" rel="stylesheet" type="text/css" media="all" /></noscript>

<style type="text/css">
	.nav-title-mobile {display: none;}.list-menu--disclosure{display: none;position: absolute;min-width: 100%;width: 22rem;background-color: var(--bg-white);box-shadow: 0 1px 4px 0 rgb(0 0 0 / 15%);padding: 5px 0 5px 20px;opacity: 0;visibility: visible;pointer-events: none;transition: opacity var(--duration-default) ease, transform var(--duration-default) ease;}.list-menu--disclosure-2{margin-left: calc(100% - 15px);z-index: 2;top: -5px;}.list-menu--disclosure:focus {outline: none;}.list-menu--disclosure.localization-selector {max-height: 18rem;overflow: auto;width: 10rem;padding: 0.5rem;}.js menu-drawer > details > summary::before, .js menu-drawer > details[open]:not(.menu-opening) > summary::before {content: '';position: absolute;cursor: default;width: 100%;height: calc(100vh - 100%);height: calc(var(--viewport-height, 100vh) - (var(--header-bottom-position, 100%)));top: 100%;left: 0;background: var(--color-foreground-50);opacity: 0;visibility: hidden;z-index: 2;transition: opacity var(--duration-default) ease,visibility var(--duration-default) ease;}menu-drawer > details[open] > summary::before {visibility: visible;opacity: 1;}.menu-drawer {position: absolute;transform: translateX(-100%);visibility: hidden;z-index: 3;left: 0;top: 100%;width: 100%;max-width: calc(100vw - 4rem);padding: 0;border: 0.1rem solid var(--color-background-10);border-left: 0;border-bottom: 0;background-color: var(--bg-white);overflow-x: hidden;}.js .menu-drawer {height: calc(100vh - 100%);height: calc(var(--viewport-height, 100vh) - (var(--header-bottom-position, 100%)));}.js details[open] > .menu-drawer, .js details[open] > .menu-drawer__submenu {transition: transform var(--duration-default) ease, visibility var(--duration-default) ease;}.no-js details[open] > .menu-drawer, .js details[open].menu-opening > .menu-drawer, details[open].menu-opening > .menu-drawer__submenu {transform: translateX(0);visibility: visible;}@media screen and (min-width: 750px) {.menu-drawer {width: 40rem;}.no-js .menu-drawer {height: auto;}}.menu-drawer__inner-container {position: relative;height: 100%;}.menu-drawer__navigation-container {display: grid;grid-template-rows: 1fr auto;align-content: space-between;overflow-y: auto;height: 100%;}.menu-drawer__navigation {padding: 0 0 5.6rem 0;}.menu-drawer__inner-submenu {height: 100%;overflow-x: hidden;overflow-y: auto;}.no-js .menu-drawer__navigation {padding: 0;}.js .menu-drawer__menu li {width: 100%;border-bottom: 1px solid #e6e6e6;overflow: hidden;}.menu-drawer__menu-item{line-height: var(--body-line-height);letter-spacing: var(--body-letter-spacing);padding: 10px 20px 10px 15px;cursor: pointer;display: flex;align-items: center;justify-content: space-between;}.menu-drawer__menu-item .label{display: inline-block;vertical-align: middle;font-size: calc(var(--font-body-size) - 4px);font-weight: var(--font-weight-normal);letter-spacing: var(--body-letter-spacing);height: 20px;line-height: 20px;margin: 0 0 0 10px;padding: 0 5px;text-transform: uppercase;text-align: center;position: relative;}.menu-drawer__menu-item .label:before{content: "";position: absolute;border: 5px solid transparent;top: 50%;left: -9px;transform: translateY(-50%);}.menu-drawer__menu-item > .icon{width: 24px;height: 24px;margin: 0 10px 0 0;}.menu-drawer__menu-item > .symbol {position: absolute;right: 20px;top: 50%;transform: translateY(-50%);display: flex;align-items: center;justify-content: center;font-size: 0;pointer-events: none;}.menu-drawer__menu-item > .symbol .icon{width: 14px;height: 14px;opacity: .6;}.menu-mobile-icon .menu-drawer__menu-item{justify-content: flex-start;}.no-js .menu-drawer .menu-drawer__menu-item > .symbol {display: none;}.js .menu-drawer__submenu {position: absolute;top: 0;width: 100%;bottom: 0;left: 0;background-color: var(--bg-white);z-index: 1;transform: translateX(100%);visibility: hidden;}.js .menu-drawer__submenu .menu-drawer__submenu {overflow-y: auto;}.menu-drawer__close-button {display: block;width: 100%;padding: 10px 15px;background-color: transparent;border: none;background: #f6f8f9;position: relative;}.menu-drawer__close-button .symbol{position: absolute;top: auto;left: 20px;width: auto;height: 22px;z-index: 10;display: flex;align-items: center;justify-content: center;font-size: 0;pointer-events: none;}.menu-drawer__close-button .icon {display: inline-block;vertical-align: middle;width: 18px;height: 18px;transform: rotate(180deg);}.menu-drawer__close-button .text{max-width: calc(100% - 50px);white-space: nowrap;overflow: hidden;text-overflow: ellipsis;display: inline-block;vertical-align: top;width: 100%;margin: 0 auto;}.no-js .menu-drawer__close-button {display: none;}.menu-drawer__utility-links {padding: 2rem;}.menu-drawer__account {display: inline-flex;align-items: center;text-decoration: none;padding: 1.2rem;margin-left: -1.2rem;font-size: 1.4rem;}.menu-drawer__account .icon-account {height: 2rem;width: 2rem;margin-right: 1rem;}.menu-drawer .list-social {justify-content: flex-start;margin-left: -1.25rem;margin-top: 2rem;}.menu-drawer .list-social:empty {display: none;}.menu-drawer .list-social__link {padding: 1.3rem 1.25rem;}

	/* Style General */
	.d-block{display: block}.d-inline-block{display: inline-block}.d-flex{display: flex}.d-none {display: none}.d-grid{display: grid}.ver-alg-mid {vertical-align: middle}.ver-alg-top{vertical-align: top}
	.flex-jc-start{justify-content:flex-start}.flex-jc-end{justify-content:flex-end}.flex-jc-center{justify-content:center}.flex-jc-between{justify-content:space-between}.flex-jc-stretch{justify-content:stretch}.flex-align-start{align-items: flex-start}.flex-align-center{align-items: center}.flex-align-end{align-items: flex-end}.flex-align-stretch{align-items:stretch}.flex-wrap{flex-wrap: wrap}.flex-nowrap{flex-wrap: nowrap}.fd-row{flex-direction:row}.fd-row-reverse{flex-direction:row-reverse}.fd-column{flex-direction:column}.fd-column-reverse{flex-direction:column-reverse}.fg-0{flex-grow:0}.fs-0{flex-shrink:0}.gap-15{gap:15px}.gap-30{gap:30px}
	.p-relative{position:relative}.p-absolute{position:absolute}.p-static{position:static}.p-fixed{position:fixed;}
	.zi-1{z-index:1}.zi-2{z-index:2}.zi-3{z-index:3}.zi-5{z-index:5}.zi-6{z-index:6}.zi-7{z-index:7}.zi-9{z-index:9}.zi-10{z-index:10}.zi-99{z-index:99} .zi-100{z-index:100} .zi-101{z-index:101}
	.top-0{top:0}.top-100{top:100%}.top-auto{top:auto}.left-0{left:0}.left-auto{left:auto}.right-0{right:0}.right-auto{right:auto}.bottom-0{bottom:0}
	.middle-y{top:50%;transform:translateY(-50%)}.middle-x{left:50%;transform:translateX(-50%)}
	.opacity-0{opacity:0}.opacity-1{opacity:1}
	.o-hidden{overflow:hidden}.o-visible{overflow:visible}.o-unset{overflow:unset}.o-x-hidden{overflow-x:hidden}.o-y-auto{overflow-y:auto;}
	.pt-0{padding-top:0}.pt-2{padding-top:2px}.pt-5{padding-top:5px}.pt-10{padding-top:10px}.pt-10-imp{padding-top:10px !important}.pt-12{padding-top:12px}.pt-16{padding-top:16px}.pt-20{padding-top:20px}.pt-24{padding-top:24px}.pt-30{padding-top:30px}.pt-32{padding-top:32px}.pt-36{padding-top:36px}.pt-48{padding-top:48px}.pb-0{padding-bottom:0}.pb-5{padding-bottom:5px}.pb-10{padding-bottom:10px}.pb-10-imp{padding-bottom:10px !important}.pb-12{padding-bottom:12px}.pb-15{padding-bottom:15px}.pb-16{padding-bottom:16px}.pb-18{padding-bottom:18px}.pb-20{padding-bottom:20px}.pb-24{padding-bottom:24px}.pb-32{padding-bottom:32px}.pb-40{padding-bottom:40px}.pb-48{padding-bottom:48px}.pb-50{padding-bottom:50px}.pb-80{padding-bottom:80px}.pb-84{padding-bottom:84px}.pr-0{padding-right:0}.pr-5{padding-right: 5px}.pr-10{padding-right:10px}.pr-20{padding-right:20px}.pr-24{padding-right:24px}.pr-30{padding-right:30px}.pr-36{padding-right:36px}.pr-80{padding-right:80px}.pl-0{padding-left:0}.pl-12{padding-left:12px}.pl-20{padding-left:20px}.pl-24{padding-left:24px}.pl-36{padding-left:36px}.pl-48{padding-left:48px}.pl-52{padding-left:52px}.pl-80{padding-left:80px}.p-zero{padding:0}
	.m-lr-auto{margin:0 auto}.m-zero{margin:0}.ml-auto{margin-left:auto}.ml-0{margin-left:0}.ml-5{margin-left:5px}.ml-15{margin-left:15px}.ml-20{margin-left:20px}.ml-30{margin-left:30px}.mr-auto{margin-right:auto}.mr-0{margin-right:0}.mr-5{margin-right:5px}.mr-20{margin-right:20px}.mr-30{margin-right:30px}.mt-0{margin-top: 0}.mt-10{margin-top: 10px}.mt-20{margin-top: 20px}.mt-30{margin-top: 30px}.mt-40{margin-top: 40px}.mb-18{margin-bottom: 18px}
	.h-0{height:0}.h-100{height:100%}.h-100v{height:100vh}.h-auto{height:auto}.mah-100{max-height:100%}.mih-15{min-height: 15px}.mih-none{min-height: unset}.lih-15{line-height: 15px}
	.w-100{width:100%}.w-100v{width:100vw}.maw-100{max-width:100%}.maw-300{max-width:300px}.w-auto{width:auto}.minw-auto{min-width: auto}
	.float-l{float:left}.float-r{float:right}
	.b-zero{border:none}.br-50p{border-radius:50%}.br-zero{border-radius:0}.br-2{border-radius:2px}.bg-none{background: none}
	.stroke-w-3{stroke-width: 3px}.stroke-w-5{stroke-width: 5px}.stroke-w-7 {stroke-width: 7px}.stroke-w-10 {stroke-width: 10px}.stroke-w-12 {stroke-width: 12px}.stroke-w-15 {stroke-width: 15px}.stroke-w-20 {stroke-width: 20px}
	.w-21{width: 21px}.w-23{width: 23px}.w-24{width: 24px}.h-22{height: 22px}.h-23{height: 23px}.h-24{height: 24px}.w-h-17{width: 17px;height: 17px}.w-h-18 {width: 18px;height: 18px}.w-h-20 {width: 20px;height: 20px}.w-h-22 {width: 22px;height: 22px}.w-h-24 {width: 24px;height: 24px}.w-h-25 {width: 25px;height: 25px}.w-h-26 {width: 26px;height: 26px}.w-h-28 {width: 28px;height: 28px}.w-h-30 {width: 30px;height: 30px}.w-h-32 {width: 32px;height: 32px}
	.txt-d-none{text-decoration:none}.txt-d-underline{text-decoration:underline}.txt-u-o-1{text-underline-offset: 1px}.txt-u-o-2{text-underline-offset: 2px}.txt-u-o-3{text-underline-offset: 3px}.txt-t-up{text-transform:uppercase}.txt-t-cap{text-transform:capitalize}
	.ft-0{font-size: 0}.ft-16{font-size: 16px}.ls-0{letter-spacing: 0}.ls-02{letter-spacing: 0.2em}.ls-05{letter-spacing: 0.5em}.ft-i{font-style: italic}
	.button-effect svg{transition: 0.3s}.button-effect:hover svg{transform: rotate(180deg)}
	.icon-effect:hover svg {transform: scale(1.15)}.icon-effect:hover .icon-search-1 {transform: rotate(-90deg) scale(1.15)}
	.link-effect > span:after {content: "";position: absolute;bottom: -2px;left: 0;height: 1px;width: 100%;transform: scaleX(0);transition: transform var(--duration-default) ease-out;transform-origin: right}
	.link-effect > span:hover:after{transform: scaleX(1);transform-origin: left}
	@media (min-width: 1025px){
		.pl-lg-80{padding-left:80px}.pr-lg-80{padding-right:80px}
	}
	.container-fluid{
	    padding: 0px 20px!important;
	}
</style>
        <script src="{{URL::to('/')}}/public/template/vendor.js" type="text/javascript"></script>
<script src="{{URL::to('/')}}/public/template/global.js" type="text/javascript"></script>
<script src="{{URL::to('/')}}/public/template/lazysizes.min.js" type="text/javascript"></script>
<!--<script src="{{URL::to('/')}}/public/template/predictive-search.js" defer="defer"></script>-->
<link href="{{URL::to('/')}}/public/template/shopify-boomerang-1.0.0.min.js" rel="preload" as="script">
<script id="boomr-scr-as" src="{{URL::to('/')}}/public/template/shopify-boomerang-1.0.0.min.js" async=""></script>
<link rel="prefetch" fetchpriority="low" as="script" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.latest.en.8645d252f07ec25fdbc6.js"><link rel="prefetch" fetchpriority="low" as="script" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~Information~NoAddressLocation~Payment~PostPurchase~Review~Shipping~ShopPay~Sho~cf13f96e.latest.en.04837ae4ff5a8e949953.js"><script type="text/javascript" src="{{URL::to('/')}}/public/template/spr-0e683603bfa450170bff33e7fbad64e7dfe9585e1caeb951bbe283e5a2306523.js"></script><link type="text/css" rel="stylesheet" media="screen" href="{{URL::to('/')}}/public/template/spr-07102fd76ff4bc22a3e0c32f0cca9ee51c77c34bbc4bdac79abb48f698de10dd.css"><link rel="prefetch" fetchpriority="low" as="script" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.84ff9c0024faf7f72c14.js"><link rel="prefetch" fetchpriority="low" as="script" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.900911b3d82c82309ebf.js">
<script type="text/javascript" src="{{URL::to('/')}}/public/template/jquery.min.js"></script>
<link rel="prefetch" fetchpriority="low" as="script" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.86cd9328cdcd6cd3a58f.js"><link rel="prefetch" fetchpriority="low" as="script" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.b4546f9bffad10b3673b.js"><link rel="prefetch" fetchpriority="low" as="script" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~app.latest.en.f5154093d2604596d084.js"><link rel="prefetch" fetchpriority="low" as="script" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.931851b1b02f1bcae42a.js"><link rel="prefetch" fetchpriority="low" as="style" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.9f2a5e9ec696775e2217.css"><link rel="prefetch" fetchpriority="low" as="style" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.e788719f193b49c039a3.css"><link rel="prefetch" fetchpriority="low" as="style" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.6b4c79ead7042980b29d.css"><link rel="prefetch" fetchpriority="low" as="style" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.da9f06164a980bf8e7ea.css"><link rel="prefetch" fetchpriority="low" as="style" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.9a0274ab07be120c1902.css"></head>
<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/template/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/template/slick/slick-theme.css"/>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
<style>
    a{
            text-decoration: none!important;
    }
    .template-index .wrapper-body{
        font-size:16px;
    }
    .form-control{
        font-size: 15px!important;
    }
</style>
    <body class="template-index body-custom-width product-card-layout-02 enable_text_color_title hide_compare_homepage show_image_loading sticky-toolbar-mobile chrome">
        
        <!--Facebook Feedback-->
        <div id="fb-root"></div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0&appId=640911871478975&autoLogAppEvents=1" nonce="hsVecG4G"></script>
        <!--Facebook Feedback-->
        
        
        
        
        
        <div class="body-content-wrapper">
            <a class="skip-to-content-link button visually-hidden" href="https://new-ella-demo.myshopify.com/?fts=0#MainContent">Skip to content</a>


<!--Announcement Start-->


<div id="shopify-section-sections--14862425161818__announcement-bar" class="shopify-section shopify-section-group-header-group">
<style type="text/css">
        @keyframes SlideLeft {0% {transform: translate3d(0,0,0)} 100% {transform: translate3d(-100%,0,0)}}
        #shopify-section-sections--14862425161818__announcement-bar .announcement-bar {padding-top: 7px;
        padding-bottom: 7px;
        /*background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/bg-top-bar-promotion-home-6_2048x.png?v=1668151491);*/
        /*background-repeat: no-repeat;*/
        /*background-position: center;*/
        /*background-size: cover;*/
            background-color:#219ebc!important;
        }
        .banner-animation-1 .announcement-bar {transition: opacity 250ms ease-in}
        .announcement-bar .layout--scroll {max-width: 100%;padding-left: 0; padding-right: 0;overflow: hidden;text-align: right;}
        .header-full-width #shopify-section-announcement-bar .announcement-bar .layout--scroll {padding-left: 0;padding-right: 0}
        .announcement-bar .layout--scroll .row {display: inline-block;text-align: left; white-space: nowrap}
        .announcement-bar__item-scroll {display: inline-block;animation: SlideLeft 30s infinite linear}
        .announcement-bar .layout--scroll:hover .announcement-bar__item-scroll,
        .announcement-bar .layout--scroll:focus .announcement-bar__item-scroll {animation-play-state: paused}
        .announcement-bar .layout--scroll .announcement-bar__message {width: auto;vertical-align: middle}
        .announcement-bar .layout--scroll .announcement-bar__message .message, 
        .announcement-bar .layout--scroll .announcement-bar__message p {padding: 5px 12.5px}
        .announcement-bar .announcement-bar__message svg {display: inline-block;vertical-align: middle;width: 16px;height: 16px}
        .announcement-bar .layout--scroll .announcement-bar__message .underline {text-decoration: underline;text-decoration-thickness: 1px;text-underline-offset: 4px}
        #shopify-section-sections--14862425161818__announcement-bar .announcement-bar__message, #shopify-section-sections--14862425161818__announcement-bar .announcement-bar__message .message, #shopify-section-sections--14862425161818__announcement-bar .announcement-bar__message a, #shopify-section-sections--14862425161818__announcement-bar .announcement-bar__message p, #shopify-section-sections--14862425161818__announcement-bar .top-mesage-countdown {
            color: #ffffff;font-size: 13px;font-style: normal;font-weight: 700;letter-spacing: 0 }
        .announcement-bar .announcement-close.hasCountDown {width: 21px;height: 21px}
        #shopify-section-sections--14862425161818__announcement-bar .announcement-bar .announcement-close svg {fill: #ffffff}
        #shopify-section-sections--14862425161818__announcement-bar .announcement-bar .announcement-countdown .clock-item{color: var(--countdown-text-color);border: 1px solid var(--countdown-text-border);background-color: var(--countdown-text-background)}
        #shopify-section-sections--14862425161818__announcement-bar .announcement-bar .announcement-countdown .clock-item:before{color: #ffffff}.announcement-bar .layout--slider .announcement-bar__message{display: none}
        .announcement-bar .layout--slider .announcement-bar__message:first-child{display: inline-block}
        .announcement-bar .slick-slider .announcement-bar__message{display: inline-block}
        @media (max-width: 1400px){}
        @media (max-width: 1199px){}
        @media (max-width: 1024px){
            .announcement-bar .announcement-countdown+.announcement-close{top: 20%}
            #shopify-section-sections--14862425161818__announcement-bar .announcement-bar__message .message.font-size-mb {font-size: calc(13px - 2px)}
        }
        @media (max-width: 551px){.announcement-bar{background-position: inherit}
            .announcement-bar .announcement-countdown+.announcement-close{top: 18%}
            #shopify-section-sections--14862425161818__announcement-bar .announcement-bar__message .message.font-size-mb {font-size: calc(13px - 4px)}
        }
    </style>
    @if($settings->scroll)
    <?php $scrolls=preg_split('/\r\n|\r|\n/',$settings->scroll);?>
    <announcement-bar-component class="announcement-bar" role="region" aria-label="Announcement" style="opacity: 1; visibility: visible; display: block;">
        <script>
            if (window.announcementClosed) {
                document.querySelector('.announcement-bar').remove();
            }
        </script>
        <div class="container layout--scroll">
            <div class="row">
                <div class="announcement-bar__item-scroll">
                    @foreach($scrolls as $scroll)
                    <div class="announcement-bar__message text-center" id="9da20430-b562-46f1-9f28-e5592eeec567" style="--button-color-style: #202020;--button-border-style: #5f5f5f;--button-background-style: #f5f5f5">
                    <p style="line-height: 1">
                    <svg style="fill: #ffff00; width: 18px; height: 18px; margin: 0 15px 0 95px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.53 510.69"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M500.7,27.62q-36.6,35-73.12,70.12-51.12,49.06-102.29,98.1a55.94,55.94,0,0,1-5.33,4c3.14,2.3,5.08,3.77,7.06,5.18,29.3,21,58.69,42,87.82,63.22a21,21,0,0,1,7.21,10.15c2.13,7-1.16,12.82-8.35,16.79Q383.18,312,352.54,328.66L59.88,488.36a297,297,0,0,1-35,20A23.59,23.59,0,0,1,20,510.11h0a19.7,19.7,0,0,1-4.67.58,15.23,15.23,0,0,1-9.59-3.19c-.18-.13-.34-.28-.51-.43a1.49,1.49,0,0,1-.14-.12l-.58-.55L4.19,506a16.25,16.25,0,0,1-4.08-9.31,16.08,16.08,0,0,1-.11-1.8A13.51,13.51,0,0,1,.57,491a18.36,18.36,0,0,1,5.26-7.94q33.48-32,66.89-64.15,67.46-65.28,135-130.49a49.09,49.09,0,0,1,5.42-3.89c-8.41-6.07-15.5-11.2-22.62-16.3l-79.41-57c-12.42-8.92-11.34-21.75,2.4-28.48L481.61,2.37C493.53-3.47,505,1.88,506.42,14,507.08,19.56,504.66,23.84,500.7,27.62Z"></path></g></g></svg>
                    <a href="https://1.envato.market/dokaB2" target="_blank" style="letter-spacing: 0.1em">
                        <span style="color:black!important;">{{$scroll}}</span>
                        <!--<span style="color: #ffff00">50% OFF</span>-->
                    </a>
                    </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </announcement-bar-component>
    @endif
    
    <script>
        class AnnouncementBar extends HTMLElement {
            constructor() {
                super();
            }
            
            connectedCallback() {
                this.closeAnnouncementButton = this.querySelector('[data-close-announcement]');
                this.announcementBarSlider = this.querySelector('[data-announcement-bar]');
                this.announcementHasSlides = this.announcementBarSlider?.querySelectorAll('.announcement-bar__message').length > 1;

                if (AnnouncementBar.getCookie('announcement') == 'closed') {
                    this.remove();
                } else {
                    this.style.opacity = 1;
                    this.style.visibility = 'visible';
                };
                
                this.initAnnouncementBarSlider();
                this.closeAnnouncementButton?.addEventListener('click', this.closeAnnouncementBar.bind(this));
            }
    
            closeAnnouncementBar(e) {
                e.preventDefault();
                e.stopPropagation();
    
                this.remove();
                AnnouncementBar.setCookie('announcement', 'closed', 1);
            }

            initAnnouncementBarSlider() {
                if (this.announcementHasSlides && !this.announcementBarSlider.classList.contains('slick-initialized')) {
                    let showArrows;
                    this.announcementBarSlider.dataset.arrows == 'true' || this.announcementBarSlider.dataset.arrows == true ? showArrows = true : showArrows = false;
                    $(this.announcementBarSlider).slick({
                        infinite: true,
                        vertical: false,
                        adaptiveHeight: true,
                        slidesToShow: 1,
                        slidesToScroll:1,
                        dots: false,
                        arrows: showArrows,
                        autoplay: true,
                        autoplaySpeed: 20,
                        nextArrow: '<button type="button" class="slick-next" aria-label="Next"><svg viewBox="0 0 478.448 478.448" class="icon icon-chevron-right" id="icon-chevron-right"><g><g><polygon points="131.659,0 100.494,32.035 313.804,239.232 100.494,446.373 131.65,478.448 377.954,239.232"></polygon></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
                        prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><svg viewBox="0 0 370.814 370.814" class="icon icon-chevron-left" id="icon-chevron-left"><g><g><polygon points="292.92,24.848 268.781,0 77.895,185.401 268.781,370.814 292.92,345.961 127.638,185.401"></polygon></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
                    });
                }
            }

            static setCookie(cname, cvalue, exdays) {
                const d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                const expires = 'expires=' + d.toUTCString();
                document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
            }

            static getCookie(cname) {
                const name = cname + '=';
                const ca = document.cookie.split(';');
        
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) === ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) === 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                
                return '';
            }
        }
    
        customElements.define('announcement-bar-component', AnnouncementBar);
    </script></div>
    
    
    <!--Announcement End-->
<div id="shopify-section-sections--14862425161818__ad1ee42c-6988-4f92-aad4-5651f1a42345" class="shopify-section shopify-section-group-header-group section-header-single-line" data-index="23" style="z-index: 23;"><link href="{{URL::to('/')}}/public/template/component-header-single-line.css?v=170682997981086782941685699266" rel="stylesheet" type="text/css" media="all">
<header class="header header-single-line" style="--spacing-l-r: 0px; --padding-top: 18px; --padding-bottom: 18px; --bg-color: #000000; --header-text-transform: capitalize">
    <div class="container-fluid">
        <div class="header-single-line__content size--7"><div class="header-single-line__item header-single-line__item--logo" style=" --logo-font-size: 30px; --logo-font-weight: 900; --logo-color: #ffffff"><div class="header__logo text-left clearfix">
                                <div class="header__heading" style="text-align:center!important;">
                                    <a href="{{URL::to('/')}}" class="header__heading-link focus-inset">
                                        <!--LOGO & COMPANY NAME-->
                                        <table border="0">
                                            <tr>
                                                <td>
                                                    <img 
                                                        src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->icon}}" 
                                                        alt="{{$settings->name}}" 
                                                        height="50" 
                                                        class="header__heading-logo" style="margin: 0 auto!important;"
                                                    >
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <p style="font-size:25px!important; color:white!important; font-weight: bold; font-family: Monotype Corsiva; font-style: italic!important;">
                                                        {{$settings->name}}
                                                    </p> 
                                                </td>
                                            </tr>
                                        </table>
                                     <!--motion-reduce-->
</a>
                                </div>
                            </div>
                            </div>
                            <div class="header-single-line__item header-single-line__item--text">
                                <div class="header__iconItem header__group text-right">
                                    <div class="customer-service-text" style="--text-size: 14px; --text-color: #ffffff"><p>Available 24/7 at</p><p><strong>{{$settings->mobile}}</strong></p></div>
                                </div>
                            
</div><div class="header-single-line__item header-single-line__item--search"><div class="header__search clearfix show-box-shadow" style="--bg-search-color: #fafafa; --search-color: #808080; --search-icon-color: #fd6506; --search-border-radius: 50px">
                                <details-modal class="header__iconItem header__search"><predictive-search class="search-modal__form" data-loading-text="Loading..." data-product-to-show="3"><details class="search_details">
                                        <summary class="header__search-full" aria-haspopup="dialog" aria-label="Search">
                                            <button type="button" class="header-search-close" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg></button>
                                            <form action="{{URL::to('/')}}/search" method="get" role="search" class="search search-modal__form">
                                                <div class="field">
                                                    <input class="search__input field__input form-input-placeholder" id="searchkey" type="search" name="q" value="" placeholder="Search the store" autocomplete="off" role="combobox" aria-expanded="false" aria-owns="predictive-search-results-list" aria-controls="predictive-search-results-list" aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocapitalize="off" spellcheck="false" aria-activedescendant="">
                                                    
                                                    <!--<label class="field__label hiddenLabels" for="Search-In-Modal-Single">Search the store</label>-->
                                                    <button class="button search__button field__button focus-inset" aria-label="Search">
                                                        <svg viewBox="0 0 512 512" class="icon-search"><path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9 C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"></path></svg>
                                                        </button>
                                                </div>
                                            </form>
                                                
           <!--quickSearchResultsBlock quickSearchResultsWidget quickSearchResultsWrap                                      -->
<!--<div >-->
<!--    <div class="quickSearchResults custom-scrollbar">-->
<style>
    .suggestion{
        position: absolute;
        top: 49px;
        left: 0px;
        background: white;
        padding: 5px;
        border-radius: 5px;
        margin: 0px 12px;
        display:none;
        z-index:9;
    }
</style>
        <div class="suggestion" id="suggestion">
            <div class="search-block quickSearchTrending">
                <h3 class="search-block-title text-left" style="padding-bottom:0px; margin-bottom:0px; border-bottom:1px solid #ccc;">
                            <span class="text">Products</span>
                            <!--<button type="button" class="header-search-popup-close d-none button-effect" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="d-none"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg></button>-->
                        </h3>
                        <style>
                            .itemlist{
                                float:left;
                                width:40%;
                            }
                            .itemlist > table > td{
                                background:#ccc;
                            }
                            .itemdetails{
                                float:left;
                                width:60%;
                            }
                        </style>
                        <div id="suggestioncontent">
                            <?php $latestproducts=\DB::table('products')->limit('10')->latest()->get();?>
                            <div class="itemlist" >
                                <table border="0" id="itemlist">
                                    @foreach($latestproducts as $latestproduct)
                                    <tr>
                                        <td style="width:50px;">
                                            <a href="{{URL::to('/')}}/details/{{$latestproduct->id}}">
                                            <img src="{{URL::to('/')}}/application/storage/app/product/{{$latestproduct->f_pic}}" style="height:40px; width:40px!important;"/>
                                            </a>
                                        </td>
                                        <td><a href="{{URL::to('/')}}/details/{{$latestproduct->id}}">{{$latestproduct->name}}</a></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="itemdetails" >
                                <table id="itemdetails">
                                    <tr>
                                        <td>
                                            <img src="{{URL::to('/')}}/application/storage/app/product/{{$latestproducts[0]->f_pic}}"  style="width:100%; padding:5px 20px;"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <h5 style="padding:0px 20px; margin:0px;">{{$latestproducts[0]->name}}</h5> 
                                           <p style="padding:0px 20px; margin:0px;">SKU: {{$latestproducts[0]->product_code}}</p>
                                        </td>
                                    </tr>
                                </table>
                                
                            </div>
                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                        <script>
                         $(document).ready(function () {
                             $("#searchkey, #suggestioncontent").focus(function(){
                                $('#suggestion').show();
                             });
                             $("#searchkey, #suggestioncontent").focusout(function(){
                                $('#suggestion').hide();
                             });
                            $('#searchkey').keyup(function(){
                                $('#suggestion').show();
                                var keyval=$('#searchkey').val();
                                    //debugger;
                                    $('#itemlist').empty();
                                    $('#itemdetails').empty();
                                    $.ajax({
                                        type:"get",
                                        url:"https://bttexweb.hostrare.org/searchsuggestion/"+keyval,
                                                 
                                            success:function(result){
                                                //console.log(res);
                                                $('#itemlist').each(result, function(i, item){
                                                    console.log(item.name);
                                                    //$(this).append('<tr><td style="width:50px;"></td><td><a href="https://bttexweb.hostrare.org/details/'+i.id+'">'+i.name+'</a></td></tr>');
                                                //$('#showSearchResult').html(res);
                                                });
                                            }
                                       });
                                });
                        });
                        </script>
                        <!--<ul class="list-item list-unstyled clearfix">-->
                        <!--    <li class="item">-->
                        <!--        <a href="/search?q=dempus*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">dempus</span></a></li>-->
                        <!--    <li class="item">-->
                        <!--        <a href="/search?q=sample*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">sample</span></a></li>-->
                        <!--    <li class="item">-->
                        <!--            <a href="/search?q=magnis*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">magnis</span></a></li>-->
                        <!--    <li class="item">-->
                        <!--        <a href="/search?q=loremous-saliduar*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">loremous saliduar</span></a></li>-->
                        <!--    <li class="item">-->
                        <!--            <a href="/search?q=naminos*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">naminos</span></a></li>-->
                        <!--    <li class="item">-->
                        <!--                <a href="/search?q=dinterdum*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">dinterdum</span></a></li>-->
                        <!--    <li class="item">-->
                        <!--                    <a href="/search?q=clothing-shopify-themes*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">clothing shopify themes</span></a></li>-->
                        <!--    <li class="item">-->
                        <!--                        <a href="/search?q=trending-collection*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">trending collection</span></a></li>-->
                        <!--</ul>-->
            <!--</div>-->
<!--        <div class="search-block quickSearchProduct">-->
<!--            <h3 class="search-block-title text-left">-->
<!--                <span class="text">Popular Products</span></h3>-->
<!--            <div class="search-block-content">-->
<!--                <div class="halo-block">-->
<!--                    <div class="products-grid column-3 disable-srollbar">-->
<!--                        <div class="product">-->
<!--<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625007194" data-json-product="{&quot;id&quot;: 6679625007194,&quot;handle&quot;: &quot;tele-kill-giother-nodels-coped-permi-unde-ona&quot;,&quot;media&quot;: null,&quot;variants&quot;: [{&quot;id&quot;:39724525486170,&quot;title&quot;:&quot;XS \/ Black&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856385822810,&quot;product_id&quot;:6679625007194,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-1.jpg?v=1640334199&quot;,&quot;variant_ids&quot;:[39724525486170]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XS \/ Black&quot;,&quot;public_title&quot;:&quot;XS \/ Black&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Black&quot;],&quot;price&quot;:5900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:9900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108914741338,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-1.jpg?v=1640334199&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525518938,&quot;title&quot;:&quot;XS \/ Slategray&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856385855578,&quot;product_id&quot;:6679625007194,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-2.jpg?v=1640334199&quot;,&quot;variant_ids&quot;:[39724525518938]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XS \/ Slategray&quot;,&quot;public_title&quot;:&quot;XS \/ Slategray&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Slategray&quot;],&quot;price&quot;:6900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108914774106,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-2.jpg?v=1640334199&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525551706,&quot;title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856385888346,&quot;product_id&quot;:6679625007194,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-3.jpg?v=1640334199&quot;,&quot;variant_ids&quot;:[39724525551706]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XS \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108914806874,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-3.jpg?v=1640334199&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525584474,&quot;title&quot;:&quot;S \/ Black&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - S \/ Black&quot;,&quot;public_title&quot;:&quot;S \/ Black&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Black&quot;],&quot;price&quot;:8900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525617242,&quot;title&quot;:&quot;S \/ Slategray&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - S \/ Slategray&quot;,&quot;public_title&quot;:&quot;S \/ Slategray&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Slategray&quot;],&quot;price&quot;:5900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525650010,&quot;title&quot;:&quot;S \/ Sandybrown&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - S \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;S \/ Sandybrown&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525682778,&quot;title&quot;:&quot;M \/ Slategray&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:false,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - M \/ Slategray&quot;,&quot;public_title&quot;:&quot;M \/ Slategray&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525715546,&quot;title&quot;:&quot;M \/ Sandybrown&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - M \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;M \/ Sandybrown&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:6900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525748314,&quot;title&quot;:&quot;L \/ Slategray&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - L \/ Slategray&quot;,&quot;public_title&quot;:&quot;L \/ Slategray&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Slategray&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525781082,&quot;title&quot;:&quot;L \/ Sandybrown&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - L \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;L \/ Sandybrown&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:8900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525813850,&quot;title&quot;:&quot;XL \/ Black&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XL \/ Black&quot;,&quot;public_title&quot;:&quot;XL \/ Black&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}]}">-->
<!--    <div class="card">-->
<!--        <div class="card-product">-->
<!--            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-53134877 date1-614" data-new-badge-number="30"><span class="badge sale-badge" aria-hidden="true">Sale-->
<!--</span></div>-->
<!--<div class="card-media card-media--adapt media--hover-effect" style="padding-bottom: 100.0%;">-->
<!--                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_165x.jpg?v=1640334199 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_170x.jpg?v=1640334199 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_185x.jpg?v=1640334199 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_198x.jpg?v=1640334199 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_210x.jpg?v=1640334199 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_220x.jpg?v=1640334199 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_245x.jpg?v=1640334199 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_270x.jpg?v=1640334199 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_290x.jpg?v=1640334199 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_320x.jpg?v=1640334199 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_355x.jpg?v=1640334199 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_360x.jpg?v=1640334199 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_370x.jpg?v=1640334199 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_420x.jpg?v=1640334199 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_430x.jpg?v=1640334199 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_460x.jpg?v=1640334199 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_470x.jpg?v=1640334199 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_510x.jpg?v=1640334199 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_523x.jpg?v=1640334199 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_533x.jpg?v=1640334199 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_534x.jpg?v=1640334199 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_570x.jpg?v=1640334199 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_640x.jpg?v=1640334199 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_665x.jpg?v=1640334199 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_670x.jpg?v=1640334199 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_720x.jpg?v=1640334199 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_775x.jpg?v=1640334199 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_785x.jpg?v=1640334199 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_870x.jpg?v=1640334199 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 14) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_800x.jpg?v=1640334199"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_165x.jpg?v=1640334199 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_170x.jpg?v=1640334199 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_185x.jpg?v=1640334199 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_198x.jpg?v=1640334199 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_210x.jpg?v=1640334199 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_220x.jpg?v=1640334199 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_245x.jpg?v=1640334199 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_270x.jpg?v=1640334199 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_290x.jpg?v=1640334199 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_320x.jpg?v=1640334199 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_355x.jpg?v=1640334199 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_360x.jpg?v=1640334199 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_370x.jpg?v=1640334199 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_420x.jpg?v=1640334199 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_430x.jpg?v=1640334199 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_460x.jpg?v=1640334199 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_470x.jpg?v=1640334199 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_510x.jpg?v=1640334199 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_523x.jpg?v=1640334199 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_533x.jpg?v=1640334199 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_534x.jpg?v=1640334199 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_570x.jpg?v=1640334199 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_640x.jpg?v=1640334199 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_665x.jpg?v=1640334199 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_670x.jpg?v=1640334199 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_720x.jpg?v=1640334199 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_775x.jpg?v=1640334199 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_785x.jpg?v=1640334199 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_870x.jpg?v=1640334199 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 14) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload"><span class="data-lazy-loading"></span>-->
<!--                    <a class="card-link" href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" title="(Product 14) Sample - Computers &amp; Accessories For Sale"></a>-->
<!--                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">-->
<!--                                <button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625007194" data-open-quick-view-popup="" data-product-handle="tele-kill-giother-nodels-coped-permi-unde-ona">-->
<!--                                    <span class="visually-hidden">Quick View</span>-->
<!--                                    <span class="text">-->
<!--                                        Quick View-->
<!--                                    </span>-->
<!--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>-->
<!--                                </button>-->
<!--                            </div></div>-->
<!--<div class="card-quickview">-->
<!--                        <button type="button" title="Quick View" class="quickview-button button" data-product-id="6679625007194" data-open-quick-view-popup="" data-product-handle="tele-kill-giother-nodels-coped-permi-unde-ona">-->
<!--                            <span class="visually-hidden">Quick View</span>-->
<!--                            Quick View-->
<!--                        </button>-->
<!--                    </div></div>-->
<!--        </div>-->
<!--        <div class="card-information">-->
<!--            <div class="card-information__wrapper text-left">-->
                
<!--                    <div class="wrapper-title-vendor  card-title-ellipsis">-->
                
<!--<a class="card-title link-underline card-title-ellipsis card-title-change" href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" data-product-title="(Product 14) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/tele-kill-giother-nodels-coped-permi-unde-ona">-->
<!--                    <span class="text">-->
<!--                        (Product 14) Sample - Computers &amp; Accessories For Sale-->
                        
<!--                            <span data-change-title=""> - Black</span>-->
                        
<!--                    </span>-->
<!--                </a>-->

                
<!--                    </div>-->
                
<!--<div class="card-review clearfix halo-productReview">-->
<!--                        <span class="spr-badge" id="spr_badge_6679625007194" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i></span><span class="spr-badge-caption">No reviews</span>-->
<!--</span>-->

<!--                    </div><div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>-->
<!--<div class="card-price">-->
<!--                        <div class="price price--on-sale">-->
<!--    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="text">From</span> <span class="money" data-currency-usd="$49.00">$49.00</span></span></dd>-->
<!--        </div>-->
<!--        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"><span class="money">$99.00</span></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$59.00</span></span></dd></div>-->
<!--        <small class="unit-price caption hidden">-->
<!--            <dt class="visually-hidden">Unit price</dt>-->
<!--            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>-->
<!--        </small>-->
<!--    </dl>-->
<!--</div>-->

<!--                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625007194">-->
<!--        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label is-active" data-value="black" data-variant-id="39724525486170" title="Black" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_800x.jpg?v=1640334199"><span class="pattern" style="background-color: black; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span>black</label><span class="tooltip">Black-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="slategray" data-variant-id="39724525518938" title="Slategray" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_800x.jpg?v=1640334199"><span class="pattern" style="background-color: slategray; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span>slategray</label><span class="tooltip">Slategray-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="sandybrown" data-variant-id="39724525551706" title="Sandybrown" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-3_800x.jpg?v=1640334199"><span class="pattern" style="background-color: sandybrown; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span>sandybrown</label><span class="tooltip">Sandybrown-->
<!--</span></div></li></ul>-->
<!--    </div>-->

<!--<div class="wrapper__card show-wishlist show-mb"><div class="card-action">-->
<!--                            <a class="button button-ATC" href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" data-quickshop-popup="" data-product-handle="tele-kill-giother-nodels-coped-permi-unde-ona">Quick Add-->
<!--</a><div class="variants-popup custom-scrollbar">-->
<!--                <script>window.quick_view_inven_array_6679625007194 = {'39724525486170': '9','39724525518938': '10','39724525551706': '10','39724525584474': '10','39724525617242': '10','39724525650010': '10','39724525682778': '0','39724525715546': '10','39724525748314': '10','39724525781082': '10','39724525813850': '9',};</script><a href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="/cart/add" method="post" class="variants" id="swatch-form-6679625007194-list-result-" data-id="product-actions-6679625007194" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs available" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625007194-list-result">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625007194-list-result">XS</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        


<!--<div class="swatch-element s available" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625007194-list-result">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625007194-list-result">S</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        


<!--<div class="swatch-element m unavailable" data-value="M">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="M" id="SingleOptionSelector0-M-6679625007194-list-result" disabled="">-->
<!--                                <label class="single-label" title="M" for="SingleOptionSelector0-M-6679625007194-list-result">M</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        

<!--<div class="swatch-element l unavailable" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625007194-list-result">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625007194-list-result">L</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        

<!--<div class="swatch-element xl available" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625007194-list-result">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625007194-list-result">XL</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1" style="display: none;">-->
<!--                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-result" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625007194-list-result">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625007194-list-result"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-result" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625007194-list-result">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625007194-list-result"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-result" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625007194-list-result">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625007194-list-result"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span></label>-->
<!--                            </div></div><select name="id" id="ProductSelect-6679625007194-list-result" class="selector-wrapper-hidden" style="display: none;"><option value="39724525486170" data-value="39724525486170">XS / Black</option><option value="39724525518938" data-value="39724525518938">XS / Slategray</option><option value="39724525551706" data-value="39724525551706">XS / Sandybrown</option><option value="39724525584474" data-value="39724525584474">S / Black</option><option value="39724525617242" data-value="39724525617242">S / Slategray</option><option value="39724525650010" data-value="39724525650010">S / Sandybrown</option><option disabled="disabled" data-value="39724525682778">M / Slategray - Sold out</option><option value="39724525715546" data-value="39724525715546">M / Sandybrown</option><option value="39724525748314" data-value="39724525748314">L / Slategray</option><option value="39724525781082" data-value="39724525781082">L / Sandybrown</option><option value="39724525813850" data-value="39724525813850">XL / Black</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625007194-list-result-">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--            </div>-->
<!--                        </div><div class="card-action__group card-list__hidden">-->
<!--    <div class="card-action">-->
<!--        <form action="/cart/add" method="post" class="variants" id="form-6679625007194-list-resultlist" data-product-id="6679625007194" enctype="multipart/form-data"><a class="button button-ATC" href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" data-quickshop-popup="">Quick Add</a></form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card-action__group variants-popup card-list__hidden">-->
<!--    <div class="card-action variants-popup-form"><div class="custom-scrollbar">-->
<!--                        <script>window.quick_view_inven_array_6679625007194 = {'39724525486170': '9','39724525518938': '10','39724525551706': '10','39724525584474': '10','39724525617242': '10','39724525650010': '10','39724525682778': '0','39724525715546': '10','39724525748314': '10','39724525781082': '10','39724525813850': '9',};</script><a href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="/cart/add" method="post" class="variants" id="swatch-form-6679625007194-list-result-list" data-id="product-actions-6679625007194list" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs available" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625007194-list-resultlist">XS</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        


<!--<div class="swatch-element s available" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625007194-list-resultlist">S</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        


<!--<div class="swatch-element m unavailable" data-value="M">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="M" id="SingleOptionSelector0-M-6679625007194-list-resultlist" disabled="">-->
<!--                                <label class="single-label" title="M" for="SingleOptionSelector0-M-6679625007194-list-resultlist">M</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        

<!--<div class="swatch-element l unavailable" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625007194-list-resultlist">L</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        

<!--<div class="swatch-element xl available" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625007194-list-resultlist">XL</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1">-->
<!--                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-resultlist" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625007194-list-resultlist"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-resultlist" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625007194-list-resultlist"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-resultlist" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625007194-list-resultlist"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span></label>-->
<!--                            </div></div><select name="id" id="ProductSelect-6679625007194-list-resultlist" class="selector-wrapper-hidden" style="display: none;"><option value="39724525486170" data-value="39724525486170">XS / Black</option><option value="39724525518938" data-value="39724525518938">XS / Slategray</option><option value="39724525551706" data-value="39724525551706">XS / Sandybrown</option><option value="39724525584474" data-value="39724525584474">S / Black</option><option value="39724525617242" data-value="39724525617242">S / Slategray</option><option value="39724525650010" data-value="39724525650010">S / Sandybrown</option><option disabled="disabled" data-value="39724525682778">M / Slategray - Sold out</option><option value="39724525715546" data-value="39724525715546">M / Sandybrown</option><option value="39724525748314" data-value="39724525748314">L / Slategray</option><option value="39724525781082" data-value="39724525781082">L / Sandybrown</option><option value="39724525813850" data-value="39724525813850">XL / Black</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625007194-list-result-list">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--                    </div></div>-->
<!--</div>-->
<!--<div class="card-product__group-item card-wishlist">-->
<!--                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="tele-kill-giother-nodels-coped-permi-unde-ona" data-product-id="6679625007194">-->
<!--                                <span class="visually-hidden">Add to wishlist</span>-->
<!--                                <span class="text">-->
<!--                                    Add to wishlist-->
<!--                                </span>-->
<!--                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>-->
<!--                            </button>-->
<!--                        </div></div></div>-->
<!--    </div>-->
<!--</div>-->

<!--</div>-->
<!--                        <div class="product">-->
<!--<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625236570" data-json-product="{&quot;id&quot;: 6679625236570,&quot;handle&quot;: &quot;home-tosmois-de-cras-hamo-dincidunts&quot;,&quot;media&quot;: null,&quot;variants&quot;: [{&quot;id&quot;:39724528402522,&quot;title&quot;:&quot;XS \/ Black&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386969690,&quot;product_id&quot;:6679625236570,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528402522]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Black&quot;,&quot;public_title&quot;:&quot;XS \/ Black&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Black&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:5900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915888218,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528435290,&quot;title&quot;:&quot;XS \/ Beige&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856387002458,&quot;product_id&quot;:6679625236570,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528435290]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Beige&quot;,&quot;public_title&quot;:&quot;XS \/ Beige&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:6900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915920986,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528468058,&quot;title&quot;:&quot;XS \/ Slategray&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856387035226,&quot;product_id&quot;:6679625236570,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_fb22dfcd-1532-40cd-9017-70c7cceed9e8.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528468058]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Slategray&quot;,&quot;public_title&quot;:&quot;XS \/ Slategray&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915953754,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_fb22dfcd-1532-40cd-9017-70c7cceed9e8.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528500826,&quot;title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856387067994,&quot;product_id&quot;:6679625236570,&quot;position&quot;:4,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2_50568174-f5b3-4d14-aaf3-d2b6f7ce1964.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528500826]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915986522,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2_50568174-f5b3-4d14-aaf3-d2b6f7ce1964.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528533594,&quot;title&quot;:&quot;S \/ Black&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Black&quot;,&quot;public_title&quot;:&quot;S \/ Black&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528566362,&quot;title&quot;:&quot;S \/ Beige&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Beige&quot;,&quot;public_title&quot;:&quot;S \/ Beige&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528599130,&quot;title&quot;:&quot;S \/ Slategray&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Slategray&quot;,&quot;public_title&quot;:&quot;S \/ Slategray&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528631898,&quot;title&quot;:&quot;S \/ Sandybrown&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;S \/ Sandybrown&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528664666,&quot;title&quot;:&quot;L \/ Black&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Black&quot;,&quot;public_title&quot;:&quot;L \/ Black&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528697434,&quot;title&quot;:&quot;L \/ Beige&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Beige&quot;,&quot;public_title&quot;:&quot;L \/ Beige&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528730202,&quot;title&quot;:&quot;L \/ Slategray&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Slategray&quot;,&quot;public_title&quot;:&quot;L \/ Slategray&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528762970,&quot;title&quot;:&quot;L \/ Sandybrown&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;L \/ Sandybrown&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528795738,&quot;title&quot;:&quot;XL \/ Black&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Black&quot;,&quot;public_title&quot;:&quot;XL \/ Black&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528828506,&quot;title&quot;:&quot;XL \/ Beige&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Beige&quot;,&quot;public_title&quot;:&quot;XL \/ Beige&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528861274,&quot;title&quot;:&quot;XL \/ Slategray&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Slategray&quot;,&quot;public_title&quot;:&quot;XL \/ Slategray&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528894042,&quot;title&quot;:&quot;XL \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XL \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}]}">-->
<!--    <div class="card">-->
<!--        <div class="card-product">-->
<!--            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-53134842 date1-614" data-new-badge-number="30"></div>-->
<!--<div class="card-media card-media--adapt media--hover-effect" style="padding-bottom: 100.0%;">-->
<!--                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_165x.jpg?v=1640334234 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_170x.jpg?v=1640334234 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_185x.jpg?v=1640334234 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_198x.jpg?v=1640334234 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_210x.jpg?v=1640334234 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_220x.jpg?v=1640334234 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_245x.jpg?v=1640334234 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_270x.jpg?v=1640334234 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_290x.jpg?v=1640334234 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_320x.jpg?v=1640334234 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_355x.jpg?v=1640334234 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_360x.jpg?v=1640334234 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_370x.jpg?v=1640334234 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_420x.jpg?v=1640334234 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_430x.jpg?v=1640334234 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_460x.jpg?v=1640334234 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_470x.jpg?v=1640334234 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_510x.jpg?v=1640334234 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_523x.jpg?v=1640334234 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_533x.jpg?v=1640334234 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_534x.jpg?v=1640334234 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_570x.jpg?v=1640334234 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_640x.jpg?v=1640334234 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_665x.jpg?v=1640334234 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_670x.jpg?v=1640334234 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_720x.jpg?v=1640334234 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_775x.jpg?v=1640334234 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_785x.jpg?v=1640334234 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_870x.jpg?v=1640334234 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 21) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_800x.jpg?v=1640334234"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_165x.jpg?v=1640334234 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_170x.jpg?v=1640334234 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_185x.jpg?v=1640334234 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_198x.jpg?v=1640334234 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_210x.jpg?v=1640334234 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_220x.jpg?v=1640334234 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_245x.jpg?v=1640334234 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_270x.jpg?v=1640334234 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_290x.jpg?v=1640334234 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_320x.jpg?v=1640334234 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_355x.jpg?v=1640334234 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_360x.jpg?v=1640334234 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_370x.jpg?v=1640334234 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_420x.jpg?v=1640334234 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_430x.jpg?v=1640334234 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_460x.jpg?v=1640334234 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_470x.jpg?v=1640334234 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_510x.jpg?v=1640334234 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_523x.jpg?v=1640334234 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_533x.jpg?v=1640334234 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_534x.jpg?v=1640334234 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_570x.jpg?v=1640334234 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_640x.jpg?v=1640334234 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_665x.jpg?v=1640334234 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_670x.jpg?v=1640334234 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_720x.jpg?v=1640334234 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_775x.jpg?v=1640334234 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_785x.jpg?v=1640334234 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_870x.jpg?v=1640334234 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 21) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload"><span class="data-lazy-loading"></span>-->
<!--                    <a class="card-link" href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" title="(Product 21) Sample - Computers &amp; Accessories For Sale"></a>-->
<!--                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">-->
<!--                                <button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625236570" data-open-quick-view-popup="" data-product-handle="home-tosmois-de-cras-hamo-dincidunts">-->
<!--                                    <span class="visually-hidden">Quick View</span>-->
<!--                                    <span class="text">-->
<!--                                        Quick View-->
<!--                                    </span>-->
<!--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>-->
<!--                                </button>-->
<!--                            </div></div>-->
<!--<div class="card-quickview">-->
<!--                        <button type="button" title="Quick View" class="quickview-button button" data-product-id="6679625236570" data-open-quick-view-popup="" data-product-handle="home-tosmois-de-cras-hamo-dincidunts">-->
<!--                            <span class="visually-hidden">Quick View</span>-->
<!--                            Quick View-->
<!--                        </button>-->
<!--                    </div></div>-->
<!--        </div>-->
<!--        <div class="card-information">-->
<!--            <div class="card-information__wrapper text-left">-->
                
<!--                    <div class="wrapper-title-vendor  card-title-ellipsis">-->
                
<!--<a class="card-title link-underline card-title-ellipsis card-title-change" href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" data-product-title="(Product 21) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/home-tosmois-de-cras-hamo-dincidunts">-->
<!--                    <span class="text">-->
<!--                        (Product 21) Sample - Computers &amp; Accessories For Sale-->
                        
<!--                            <span data-change-title=""> - Black</span>-->
                        
<!--                    </span>-->
<!--                </a>-->

                
<!--                    </div>-->
                
<!--<div class="card-review clearfix halo-productReview">-->
<!--                        <span class="spr-badge" id="spr_badge_6679625236570" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i></span><span class="spr-badge-caption">1 review</span>-->
<!--</span>-->

<!--                    </div><div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>-->
<!--<div class="card-price">-->
<!--                        <div class="price  price--on-sale ">-->
<!--    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$79.00</span></span></dd>-->
<!--        </div>-->
<!--        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"><span class="money" data-currency-usd="$59.00">$59.00</span></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="text">From</span> <span class="money" data-currency-usd="$49.00">$49.00</span></span></dd></div>-->
<!--        <small class="unit-price caption hidden">-->
<!--            <dt class="visually-hidden">Unit price</dt>-->
<!--            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>-->
<!--        </small>-->
<!--    </dl>-->
<!--</div>-->

<!--                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625236570">-->
<!--        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label is-active" data-value="black" data-variant-id="39724528402522" title="Black" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_800x.jpg?v=1640334234"><span class="pattern" style="background-color: black; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span>black</label><span class="tooltip">Black-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="beige" data-variant-id="39724528435290" title="Beige" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_800x.jpg?v=1640334234"><span class="pattern" style="background-color: beige; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123188)"></span>beige</label><span class="tooltip">Beige-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="slategray" data-variant-id="39724528468058" title="Slategray" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_fb22dfcd-1532-40cd-9017-70c7cceed9e8_800x.jpg?v=1640334234"><span class="pattern" style="background-color: slategray; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span>slategray</label><span class="tooltip">Slategray-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="sandybrown" data-variant-id="39724528500826" title="Sandybrown" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_50568174-f5b3-4d14-aaf3-d2b6f7ce1964_800x.jpg?v=1640334234"><span class="pattern" style="background-color: sandybrown; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span>sandybrown</label><span class="tooltip">Sandybrown-->
<!--</span></div></li></ul>-->
<!--    </div>-->

<!--<div class="wrapper__card show-wishlist show-mb"><div class="card-action">-->
<!--                            <form action="/cart/add" method="post" class="variants" id="form-6679625236570-list-result" data-product-id="6679625236570" enctype="multipart/form-data"><a class="button button-ATC" href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" data-quickshop-popup="" data-product-handle="home-tosmois-de-cras-hamo-dincidunts">Quick Add-->
<!--</a></form><div class="variants-popup custom-scrollbar">-->
<!--                <script>window.quick_view_inven_array_6679625236570 = {'39724528402522': '9','39724528435290': '10','39724528468058': '10','39724528500826': '10','39724528533594': '10','39724528566362': '10','39724528599130': '10','39724528631898': '10','39724528664666': '10','39724528697434': '10','39724528730202': '10','39724528762970': '10','39724528795738': '10','39724528828506': '10','39724528861274': '10','39724528894042': '10',};</script><a href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="/cart/add" method="post" class="variants" id="swatch-form-6679625236570-list-result-" data-id="product-actions-6679625236570" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs available" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625236570-list-result">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625236570-list-result">XS</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element s available" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625236570-list-result">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625236570-list-result">S</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element l available" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625236570-list-result">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625236570-list-result">L</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element xl available" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625236570-list-result">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625236570-list-result">XL</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1" style="display: none;">-->
<!--                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625236570-list-result">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625236570-list-result"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element beige available" data-value="Beige">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Beige" id="SingleOptionSelector1-Beige-6679625236570-list-result">-->
<!--                                <label class="single-label" title="Beige" for="SingleOptionSelector1-Beige-6679625236570-list-result"><span class="pattern" style="background-color: beige;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625236570-list-result">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625236570-list-result"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625236570-list-result">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625236570-list-result"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span></label>-->
<!--                            </div></div><select name="id" id="ProductSelect-6679625236570-list-result" class="selector-wrapper-hidden" style="display: none;"><option value="39724528402522" data-value="39724528402522">XS / Black</option><option value="39724528435290" data-value="39724528435290">XS / Beige</option><option value="39724528468058" data-value="39724528468058">XS / Slategray</option><option value="39724528500826" data-value="39724528500826">XS / Sandybrown</option><option value="39724528533594" data-value="39724528533594">S / Black</option><option value="39724528566362" data-value="39724528566362">S / Beige</option><option value="39724528599130" data-value="39724528599130">S / Slategray</option><option value="39724528631898" data-value="39724528631898">S / Sandybrown</option><option value="39724528664666" data-value="39724528664666">L / Black</option><option value="39724528697434" data-value="39724528697434">L / Beige</option><option value="39724528730202" data-value="39724528730202">L / Slategray</option><option value="39724528762970" data-value="39724528762970">L / Sandybrown</option><option value="39724528795738" data-value="39724528795738">XL / Black</option><option value="39724528828506" data-value="39724528828506">XL / Beige</option><option value="39724528861274" data-value="39724528861274">XL / Slategray</option><option value="39724528894042" data-value="39724528894042">XL / Sandybrown</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625236570-list-result-">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--            </div>-->
<!--                        </div><div class="card-action__group card-list__hidden">-->
<!--    <div class="card-action">-->
<!--        <form action="/cart/add" method="post" class="variants" id="form-6679625236570-list-resultlist" data-product-id="6679625236570" enctype="multipart/form-data"><a class="button button-ATC" href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" data-quickshop-popup="">Quick Add</a></form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card-action__group variants-popup card-list__hidden">-->
<!--    <div class="card-action variants-popup-form"><div class="custom-scrollbar">-->
<!--                        <script>window.quick_view_inven_array_6679625236570 = {'39724528402522': '9','39724528435290': '10','39724528468058': '10','39724528500826': '10','39724528533594': '10','39724528566362': '10','39724528599130': '10','39724528631898': '10','39724528664666': '10','39724528697434': '10','39724528730202': '10','39724528762970': '10','39724528795738': '10','39724528828506': '10','39724528861274': '10','39724528894042': '10',};</script><a href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="/cart/add" method="post" class="variants" id="swatch-form-6679625236570-list-result-list" data-id="product-actions-6679625236570list" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs available" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625236570-list-resultlist">XS</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element s available" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625236570-list-resultlist">S</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element l available" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625236570-list-resultlist">L</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element xl available" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625236570-list-resultlist">XL</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1">-->
<!--                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625236570-list-resultlist"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element beige available" data-value="Beige">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Beige" id="SingleOptionSelector1-Beige-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="Beige" for="SingleOptionSelector1-Beige-6679625236570-list-resultlist"><span class="pattern" style="background-color: beige;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625236570-list-resultlist"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625236570-list-resultlist"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span></label>-->
<!--                            </div></div><select name="id" id="ProductSelect-6679625236570-list-resultlist" class="selector-wrapper-hidden" style="display: none;"><option value="39724528402522" data-value="39724528402522">XS / Black</option><option value="39724528435290" data-value="39724528435290">XS / Beige</option><option value="39724528468058" data-value="39724528468058">XS / Slategray</option><option value="39724528500826" data-value="39724528500826">XS / Sandybrown</option><option value="39724528533594" data-value="39724528533594">S / Black</option><option value="39724528566362" data-value="39724528566362">S / Beige</option><option value="39724528599130" data-value="39724528599130">S / Slategray</option><option value="39724528631898" data-value="39724528631898">S / Sandybrown</option><option value="39724528664666" data-value="39724528664666">L / Black</option><option value="39724528697434" data-value="39724528697434">L / Beige</option><option value="39724528730202" data-value="39724528730202">L / Slategray</option><option value="39724528762970" data-value="39724528762970">L / Sandybrown</option><option value="39724528795738" data-value="39724528795738">XL / Black</option><option value="39724528828506" data-value="39724528828506">XL / Beige</option><option value="39724528861274" data-value="39724528861274">XL / Slategray</option><option value="39724528894042" data-value="39724528894042">XL / Sandybrown</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625236570-list-result-list">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--                    </div></div>-->
<!--</div>-->
<!--<div class="card-product__group-item card-wishlist">-->
<!--                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="home-tosmois-de-cras-hamo-dincidunts" data-product-id="6679625236570">-->
<!--                                <span class="visually-hidden">Add to wishlist</span>-->
<!--                                <span class="text">-->
<!--                                    Add to wishlist-->
<!--                                </span>-->
<!--                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>-->
<!--                            </button>-->
<!--                        </div></div></div>-->
<!--    </div>-->
<!--</div>-->

<!--</div>-->
<!--                        <div class="product">-->
<!--<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625105498" data-json-product="{&quot;id&quot;: 6679625105498,&quot;handle&quot;: &quot;home-imperdiet-vellectus-eleifend-thiams&quot;,&quot;media&quot;: null,&quot;variants&quot;: [{&quot;id&quot;:39724526600282,&quot;title&quot;:&quot;DarkOrange&quot;,&quot;option1&quot;:&quot;DarkOrange&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;MKI-2661&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386314330,&quot;product_id&quot;:6679625105498,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2.jpg?v=1640334213&quot;,&quot;variant_ids&quot;:[39724526600282]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 17) Sample - Computers \u0026 Accessories For Sale - DarkOrange&quot;,&quot;public_title&quot;:&quot;DarkOrange&quot;,&quot;options&quot;:[&quot;DarkOrange&quot;],&quot;price&quot;:9900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:42900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915232858,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2.jpg?v=1640334213&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724526633050,&quot;title&quot;:&quot;LightCoral&quot;,&quot;option1&quot;:&quot;LightCoral&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;MKI-2661&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386347098,&quot;product_id&quot;:6679625105498,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1.jpg?v=1640334213&quot;,&quot;variant_ids&quot;:[39724526633050]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 17) Sample - Computers \u0026 Accessories For Sale - LightCoral&quot;,&quot;public_title&quot;:&quot;LightCoral&quot;,&quot;options&quot;:[&quot;LightCoral&quot;],&quot;price&quot;:8900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915265626,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1.jpg?v=1640334213&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724526665818,&quot;title&quot;:&quot;Grey&quot;,&quot;option1&quot;:&quot;Grey&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;MKI-2661&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386379866,&quot;product_id&quot;:6679625105498,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_c7fc75f2-735e-41a4-9d82-004fe8244483.jpg?v=1640334213&quot;,&quot;variant_ids&quot;:[39724526665818]},&quot;available&quot;:false,&quot;name&quot;:&quot;(Product 17) Sample - Computers \u0026 Accessories For Sale - Grey&quot;,&quot;public_title&quot;:&quot;Grey&quot;,&quot;options&quot;:[&quot;Grey&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915298394,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_c7fc75f2-735e-41a4-9d82-004fe8244483.jpg?v=1640334213&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}]}">-->
<!--    <div class="card">-->
<!--        <div class="card-product">-->
<!--            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-53134862 date1-614" data-new-badge-number="30"><span class="badge sale-badge" aria-hidden="true">Sale-->
<!--</span></div>-->
<!--<div class="card-media card-media--adapt media--hover-effect" style="padding-bottom: 100.0%;">-->
<!--                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_165x.jpg?v=1640334213 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_170x.jpg?v=1640334213 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_185x.jpg?v=1640334213 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_198x.jpg?v=1640334213 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_210x.jpg?v=1640334213 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_220x.jpg?v=1640334213 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_245x.jpg?v=1640334213 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_270x.jpg?v=1640334213 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_290x.jpg?v=1640334213 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_320x.jpg?v=1640334213 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_355x.jpg?v=1640334213 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_360x.jpg?v=1640334213 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_370x.jpg?v=1640334213 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_420x.jpg?v=1640334213 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_430x.jpg?v=1640334213 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_460x.jpg?v=1640334213 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_470x.jpg?v=1640334213 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_510x.jpg?v=1640334213 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_523x.jpg?v=1640334213 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_533x.jpg?v=1640334213 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_534x.jpg?v=1640334213 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_570x.jpg?v=1640334213 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_640x.jpg?v=1640334213 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_665x.jpg?v=1640334213 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_670x.jpg?v=1640334213 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_720x.jpg?v=1640334213 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_775x.jpg?v=1640334213 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_785x.jpg?v=1640334213 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_870x.jpg?v=1640334213 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 17) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_800x.jpg?v=1640334213"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_165x.jpg?v=1640334213 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_170x.jpg?v=1640334213 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_185x.jpg?v=1640334213 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_198x.jpg?v=1640334213 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_210x.jpg?v=1640334213 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_220x.jpg?v=1640334213 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_245x.jpg?v=1640334213 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_270x.jpg?v=1640334213 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_290x.jpg?v=1640334213 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_320x.jpg?v=1640334213 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_355x.jpg?v=1640334213 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_360x.jpg?v=1640334213 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_370x.jpg?v=1640334213 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_420x.jpg?v=1640334213 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_430x.jpg?v=1640334213 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_460x.jpg?v=1640334213 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_470x.jpg?v=1640334213 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_510x.jpg?v=1640334213 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_523x.jpg?v=1640334213 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_533x.jpg?v=1640334213 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_534x.jpg?v=1640334213 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_570x.jpg?v=1640334213 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_640x.jpg?v=1640334213 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_665x.jpg?v=1640334213 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_670x.jpg?v=1640334213 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_720x.jpg?v=1640334213 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_775x.jpg?v=1640334213 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_785x.jpg?v=1640334213 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_870x.jpg?v=1640334213 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 17) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload"><span class="data-lazy-loading"></span>-->
<!--                    <a class="card-link" href="/products/home-imperdiet-vellectus-eleifend-thiams?variant=39724526600282" title="(Product 17) Sample - Computers &amp; Accessories For Sale"></a>-->
<!--                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">-->
<!--                                <button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625105498" data-open-quick-view-popup="" data-product-handle="home-imperdiet-vellectus-eleifend-thiams">-->
<!--                                    <span class="visually-hidden">Quick View</span>-->
<!--                                    <span class="text">-->
<!--                                        Quick View-->
<!--                                    </span>-->
<!--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>-->
<!--                                </button>-->
<!--                            </div></div>-->
<!--<div class="card-quickview">-->
<!--                        <button type="button" title="Quick View" class="quickview-button button" data-product-id="6679625105498" data-open-quick-view-popup="" data-product-handle="home-imperdiet-vellectus-eleifend-thiams">-->
<!--                            <span class="visually-hidden">Quick View</span>-->
<!--                            Quick View-->
<!--                        </button>-->
<!--                    </div></div>-->
<!--        </div>-->
<!--        <div class="card-information">-->
<!--            <div class="card-information__wrapper text-left">-->
                
<!--                    <div class="wrapper-title-vendor  card-title-ellipsis">-->
                
<!--<a class="card-title link-underline card-title-ellipsis card-title-change" href="/products/home-imperdiet-vellectus-eleifend-thiams?variant=39724526600282" data-product-title="(Product 17) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/home-imperdiet-vellectus-eleifend-thiams">-->
<!--                    <span class="text">-->
<!--                        (Product 17) Sample - Computers &amp; Accessories For Sale-->
                        
<!--                            <span data-change-title=""> - DarkOrange</span>-->
                        
<!--                    </span>-->
<!--                </a>-->

                
<!--                    </div>-->
                
<!--<div class="card-review clearfix halo-productReview">-->
<!--                        <span class="spr-badge" id="spr_badge_6679625105498" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i></span><span class="spr-badge-caption">No reviews</span>-->
<!--</span>-->

<!--                    </div><div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>-->
<!--<div class="card-price">-->
<!--                        <div class="price price--on-sale">-->
<!--    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="text">From</span> <span class="money" data-currency-usd="$79.00">$79.00</span></span></dd>-->
<!--        </div>-->
<!--        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"><span class="money">$429.00</span></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$99.00</span></span></dd></div>-->
<!--        <small class="unit-price caption hidden">-->
<!--            <dt class="visually-hidden">Unit price</dt>-->
<!--            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>-->
<!--        </small>-->
<!--    </dl>-->
<!--</div>-->

<!--                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625105498">-->
<!--        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label data-with-one-option="39724526600282" data-quantity="1" class="swatch-label is-active" data-value="darkorange" data-variant-id="39724526600282" title="DarkOrange" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_800x.jpg?v=1640334213"><span class="pattern" style="background-color: darkorange; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/darkorange.png?123188)"></span>darkorange</label><span class="tooltip">DarkOrange-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label data-with-one-option="39724526633050" data-quantity="1" class="swatch-label" data-value="lightcoral" data-variant-id="39724526633050" title="LightCoral" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_800x.jpg?v=1640334213"><span class="pattern" style="background-color: lightcoral; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/lightcoral.png?123188)"></span>lightcoral</label><span class="tooltip">LightCoral-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label data-with-one-option="39724526665818" data-quantity="0" class="swatch-label" data-value="grey" data-variant-id="39724526665818" title="Grey" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_c7fc75f2-735e-41a4-9d82-004fe8244483_800x.jpg?v=1640334213"><span class="pattern" style="background-color: grey; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/grey.png?123188)"></span>grey</label><span class="tooltip">Grey-->
<!--</span></div></li></ul>-->
<!--    </div>-->

<!--<div class="wrapper__card show-wishlist show-mb"><div class="card-action">-->
<!--                            <form action="/cart/add" method="post" class="variants" id="form-6679625105498-list-result" data-product-id="6679625105498" enctype="multipart/form-data"><input type="hidden" name="id" value="39724526600282">-->
<!--                    <input type="hidden" name="quantity" value="1">-->
<!--                    <button class="button button-ATC is-visible" type="submit" data-form-id="#form-6679625105498-list-result" data-btn-addtocart="">Add to cart</button></form>-->
<!--                        </div><div class="card-action__group card-list__hidden">-->
<!--    <div class="card-action">-->
<!--        <form action="/cart/add" method="post" class="variants" id="form-6679625105498-list-resultlist" data-product-id="6679625105498" enctype="multipart/form-data"><input type="hidden" name="id" value="39724526600282">-->
<!--                            <input type="hidden" name="quantity" value="1">-->
<!--                            <button class="button button-ATC is-visible" type="submit" data-form-id="#form-6679625105498-list-resultlist" data-btn-addtocart="">Add to cart</button></form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card-action__group variants-popup card-list__hidden">-->
<!--    <div class="card-action variants-popup-form"></div>-->
<!--</div>-->
<!--<div class="card-product__group-item card-wishlist">-->
<!--                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="home-imperdiet-vellectus-eleifend-thiams" data-product-id="6679625105498">-->
<!--                                <span class="visually-hidden">Add to wishlist</span>-->
<!--                                <span class="text">-->
<!--                                    Add to wishlist-->
<!--                                </span>-->
<!--                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>-->
<!--                            </button>-->
<!--                        </div></div></div>-->
<!--    </div>-->
<!--</div>-->

<!--</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    <!--</div>-->
</div>
</div>
<div class="predictive-search predictive-search--header quickSearchResultsWrap" tabindex="-1" data-predictive-search="">
    <div class="predictive-search__loading-state" style="display:none!important;">
        <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle></svg>
        </div>
</div>
<span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
                                        </summary>
                                        <div class="search-modal modal__content quickSearch" role="dialog" aria-modal="true" aria-label="Search"><div class="quickSearchResultsWrap" style="display: none;" data-product-to-show="3">
	<div class="loadingOverlay"></div>
	<div class="quickSearchResults custom-scrollbar">
		<div class="container"><div class="quickSearchResultsBlock quickSearchResultsWidget quickSearchResultsWrap" data-quick-trending-products="">
    <div class="quickSearchResults custom-scrollbar">
        <div class="container"><div class="search-block quickSearchTrending"><h3 class="search-block-title text-left">
                            <span class="text">Trending Now</span>
                            <button type="button" class="header-search-popup-close d-none button-effect" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="d-none"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg></button>
                        </h3><ul class="list-item list-unstyled clearfix"><li class="item"><a href="/search?q=dempus*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">dempus</span></a></li><li class="item"><a href="/search?q=sample*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">sample</span></a></li><li class="item"><a href="/search?q=magnis*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">magnis</span></a></li><li class="item"><a href="/search?q=loremous-saliduar*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">loremous saliduar</span></a></li><li class="item"><a href="/search?q=naminos*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">naminos</span></a></li><li class="item"><a href="/search?q=dinterdum*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">dinterdum</span></a></li><li class="item"><a href="/search?q=clothing-shopify-themes*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">clothing shopify themes</span></a></li><li class="item"><a href="/search?q=trending-collection*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><span class="text">trending collection</span></a></li></ul>
                </div><div class="search-block quickSearchProduct"><h3 class="search-block-title text-left"><span class="text">Popular Products</span></h3><div class="search-block-content">
                        <div class="halo-block"><div class="products-grid column-3 disable-srollbar"><div class="product">
<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625007194" data-json-product="{&quot;id&quot;: 6679625007194,&quot;handle&quot;: &quot;tele-kill-giother-nodels-coped-permi-unde-ona&quot;,&quot;media&quot;: null,&quot;variants&quot;: [{&quot;id&quot;:39724525486170,&quot;title&quot;:&quot;XS \/ Black&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856385822810,&quot;product_id&quot;:6679625007194,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-1.jpg?v=1640334199&quot;,&quot;variant_ids&quot;:[39724525486170]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XS \/ Black&quot;,&quot;public_title&quot;:&quot;XS \/ Black&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Black&quot;],&quot;price&quot;:5900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:9900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108914741338,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-1.jpg?v=1640334199&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525518938,&quot;title&quot;:&quot;XS \/ Slategray&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856385855578,&quot;product_id&quot;:6679625007194,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-2.jpg?v=1640334199&quot;,&quot;variant_ids&quot;:[39724525518938]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XS \/ Slategray&quot;,&quot;public_title&quot;:&quot;XS \/ Slategray&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Slategray&quot;],&quot;price&quot;:6900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108914774106,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-2.jpg?v=1640334199&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525551706,&quot;title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856385888346,&quot;product_id&quot;:6679625007194,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-3.jpg?v=1640334199&quot;,&quot;variant_ids&quot;:[39724525551706]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XS \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108914806874,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-3.jpg?v=1640334199&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525584474,&quot;title&quot;:&quot;S \/ Black&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - S \/ Black&quot;,&quot;public_title&quot;:&quot;S \/ Black&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Black&quot;],&quot;price&quot;:8900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525617242,&quot;title&quot;:&quot;S \/ Slategray&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - S \/ Slategray&quot;,&quot;public_title&quot;:&quot;S \/ Slategray&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Slategray&quot;],&quot;price&quot;:5900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525650010,&quot;title&quot;:&quot;S \/ Sandybrown&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - S \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;S \/ Sandybrown&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525682778,&quot;title&quot;:&quot;M \/ Slategray&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:false,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - M \/ Slategray&quot;,&quot;public_title&quot;:&quot;M \/ Slategray&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525715546,&quot;title&quot;:&quot;M \/ Sandybrown&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - M \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;M \/ Sandybrown&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:6900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525748314,&quot;title&quot;:&quot;L \/ Slategray&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - L \/ Slategray&quot;,&quot;public_title&quot;:&quot;L \/ Slategray&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Slategray&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525781082,&quot;title&quot;:&quot;L \/ Sandybrown&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - L \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;L \/ Sandybrown&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:8900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525813850,&quot;title&quot;:&quot;XL \/ Black&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XL \/ Black&quot;,&quot;public_title&quot;:&quot;XL \/ Black&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}]}">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-53134877 date1-614" data-new-badge-number="30"><span class="badge sale-badge" aria-hidden="true">Sale
</span></div>
<div class="card-media card-media--adapt media--hover-effect" style="padding-bottom: 100.0%;">
                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_165x.jpg?v=1640334199 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_170x.jpg?v=1640334199 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_185x.jpg?v=1640334199 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_198x.jpg?v=1640334199 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_210x.jpg?v=1640334199 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_220x.jpg?v=1640334199 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_245x.jpg?v=1640334199 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_270x.jpg?v=1640334199 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_290x.jpg?v=1640334199 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_320x.jpg?v=1640334199 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_355x.jpg?v=1640334199 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_360x.jpg?v=1640334199 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_370x.jpg?v=1640334199 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_420x.jpg?v=1640334199 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_430x.jpg?v=1640334199 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_460x.jpg?v=1640334199 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_470x.jpg?v=1640334199 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_510x.jpg?v=1640334199 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_523x.jpg?v=1640334199 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_533x.jpg?v=1640334199 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_534x.jpg?v=1640334199 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_570x.jpg?v=1640334199 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_640x.jpg?v=1640334199 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_665x.jpg?v=1640334199 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_670x.jpg?v=1640334199 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_720x.jpg?v=1640334199 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_775x.jpg?v=1640334199 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_785x.jpg?v=1640334199 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_870x.jpg?v=1640334199 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 14) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_800x.jpg?v=1640334199"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_165x.jpg?v=1640334199 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_170x.jpg?v=1640334199 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_185x.jpg?v=1640334199 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_198x.jpg?v=1640334199 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_210x.jpg?v=1640334199 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_220x.jpg?v=1640334199 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_245x.jpg?v=1640334199 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_270x.jpg?v=1640334199 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_290x.jpg?v=1640334199 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_320x.jpg?v=1640334199 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_355x.jpg?v=1640334199 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_360x.jpg?v=1640334199 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_370x.jpg?v=1640334199 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_420x.jpg?v=1640334199 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_430x.jpg?v=1640334199 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_460x.jpg?v=1640334199 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_470x.jpg?v=1640334199 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_510x.jpg?v=1640334199 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_523x.jpg?v=1640334199 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_533x.jpg?v=1640334199 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_534x.jpg?v=1640334199 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_570x.jpg?v=1640334199 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_640x.jpg?v=1640334199 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_665x.jpg?v=1640334199 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_670x.jpg?v=1640334199 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_720x.jpg?v=1640334199 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_775x.jpg?v=1640334199 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_785x.jpg?v=1640334199 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_870x.jpg?v=1640334199 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 14) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload"><span class="data-lazy-loading"></span>
                    <a class="card-link" href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" title="(Product 14) Sample - Computers &amp; Accessories For Sale"></a>
                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">
                                <button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625007194" data-open-quick-view-popup="" data-product-handle="tele-kill-giother-nodels-coped-permi-unde-ona">
                                    <span class="visually-hidden">Quick View</span>
                                    <span class="text">
                                        Quick View
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>
                                </button>
                            </div></div>
<div class="card-quickview">
                        <button type="button" title="Quick View" class="quickview-button button" data-product-id="6679625007194" data-open-quick-view-popup="" data-product-handle="tele-kill-giother-nodels-coped-permi-unde-ona">
                            <span class="visually-hidden">Quick View</span>
                            Quick View
                        </button>
                    </div></div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-left">
                
                    <div class="wrapper-title-vendor  card-title-ellipsis">
                
<a class="card-title link-underline card-title-ellipsis card-title-change" href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" data-product-title="(Product 14) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/tele-kill-giother-nodels-coped-permi-unde-ona">
                    <span class="text">
                        (Product 14) Sample - Computers &amp; Accessories For Sale
                        
                            <span data-change-title=""> - Black</span>
                        
                    </span>
                </a>

                
                    </div>
                
<div class="card-review clearfix halo-productReview">
                        <span class="spr-badge" id="spr_badge_6679625007194" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i></span><span class="spr-badge-caption">No reviews</span>
</span>

                    </div><div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>
<div class="card-price">
                        <div class="price price--on-sale">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="text">From</span> <span class="money" data-currency-usd="$49.00">$49.00</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"><span class="money">$99.00</span></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$59.00</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>

                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625007194">
        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label is-active" data-value="black" data-variant-id="39724525486170" title="Black" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_800x.jpg?v=1640334199"><span class="pattern" style="background-color: black; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span>black</label><span class="tooltip">Black
</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="slategray" data-variant-id="39724525518938" title="Slategray" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_800x.jpg?v=1640334199"><span class="pattern" style="background-color: slategray; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span>slategray</label><span class="tooltip">Slategray
</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="sandybrown" data-variant-id="39724525551706" title="Sandybrown" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-3_800x.jpg?v=1640334199"><span class="pattern" style="background-color: sandybrown; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span>sandybrown</label><span class="tooltip">Sandybrown
</span></div></li></ul>
    </div>

<div class="wrapper__card show-wishlist show-mb"><div class="card-action">
                            <form action="/cart/add" method="post" class="variants" id="form-6679625007194-list-result" data-product-id="6679625007194" enctype="multipart/form-data"><a class="button button-ATC" href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" data-quickshop-popup="" data-product-handle="tele-kill-giother-nodels-coped-permi-unde-ona">Quick Add
</a></form><div class="variants-popup custom-scrollbar">
                <script>window.quick_view_inven_array_6679625007194 = {'39724525486170': '9','39724525518938': '10','39724525551706': '10','39724525584474': '10','39724525617242': '10','39724525650010': '10','39724525682778': '0','39724525715546': '10','39724525748314': '10','39724525781082': '10','39724525813850': '9',};</script><a href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>
<div class="variants-popup-content text-center" data-quickshop=""><form action="/cart/add" method="post" class="variants" id="swatch-form-6679625007194-list-result-" data-id="product-actions-6679625007194" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">
                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs unavailable" data-value="XS">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625007194-list-result">
                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625007194-list-result">XS</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        


<div class="swatch-element s unavailable" data-value="S">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625007194-list-result">
                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625007194-list-result">S</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        


<div class="swatch-element m unavailable" data-value="M">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="M" id="SingleOptionSelector0-M-6679625007194-list-result" disabled="">
                                <label class="single-label" title="M" for="SingleOptionSelector0-M-6679625007194-list-result">M</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        

<div class="swatch-element l unavailable" data-value="L">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625007194-list-result">
                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625007194-list-result">L</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        

<div class="swatch-element xl unavailable" data-value="XL">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625007194-list-result">
                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625007194-list-result">XL</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        
</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1" style="display: none;">
                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-result" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625007194-list-result">
                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625007194-list-result"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span></label>
                            </div><div class="swatch-element slategray available" data-value="Slategray">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-result" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625007194-list-result">
                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625007194-list-result"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span></label>
                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-result" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625007194-list-result">
                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625007194-list-result"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span></label>
                            </div></div><select name="id" id="ProductSelect-6679625007194-list-result" class="selector-wrapper-hidden" style="display: none;"><option value="39724525486170" data-value="39724525486170">XS / Black</option><option value="39724525518938" data-value="39724525518938">XS / Slategray</option><option value="39724525551706" data-value="39724525551706">XS / Sandybrown</option><option value="39724525584474" data-value="39724525584474">S / Black</option><option value="39724525617242" data-value="39724525617242">S / Slategray</option><option value="39724525650010" data-value="39724525650010">S / Sandybrown</option><option disabled="disabled" data-value="39724525682778">M / Slategray - Sold out</option><option value="39724525715546" data-value="39724525715546">M / Sandybrown</option><option value="39724525748314" data-value="39724525748314">L / Slategray</option><option value="39724525781082" data-value="39724525781082">L / Sandybrown</option><option value="39724525813850" data-value="39724525813850">XL / Black</option>
        </select>
        
        <div class="product-card__button2">
            <input type="hidden" name="quantity" value="1">
            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625007194-list-result-">Add</button></div>
    </form>
</div>
            </div>
                        </div><div class="card-action__group card-list__hidden">
    <div class="card-action">
        <form action="/cart/add" method="post" class="variants" id="form-6679625007194-list-resultlist" data-product-id="6679625007194" enctype="multipart/form-data"><a class="button button-ATC" href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" data-quickshop-popup="">Quick Add</a></form>
    </div>
</div>
<div class="card-action__group variants-popup card-list__hidden">
    <div class="card-action variants-popup-form"><div class="custom-scrollbar">
                        <script>window.quick_view_inven_array_6679625007194 = {'39724525486170': '9','39724525518938': '10','39724525551706': '10','39724525584474': '10','39724525617242': '10','39724525650010': '10','39724525682778': '0','39724525715546': '10','39724525748314': '10','39724525781082': '10','39724525813850': '9',};</script><a href="/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>
<div class="variants-popup-content text-center" data-quickshop=""><form action="/cart/add" method="post" class="variants" id="swatch-form-6679625007194-list-result-list" data-id="product-actions-6679625007194list" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">
                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs unavailable" data-value="XS">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625007194-list-resultlist">
                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625007194-list-resultlist">XS</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        


<div class="swatch-element s unavailable" data-value="S">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625007194-list-resultlist">
                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625007194-list-resultlist">S</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        


<div class="swatch-element m unavailable" data-value="M">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="M" id="SingleOptionSelector0-M-6679625007194-list-resultlist" disabled="">
                                <label class="single-label" title="M" for="SingleOptionSelector0-M-6679625007194-list-resultlist">M</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        

<div class="swatch-element l unavailable" data-value="L">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625007194-list-resultlist">
                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625007194-list-resultlist">L</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        

<div class="swatch-element xl unavailable" data-value="XL">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625007194-list-resultlist">
                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625007194-list-resultlist">XL</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        
</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1">
                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-resultlist" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625007194-list-resultlist">
                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625007194-list-resultlist"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span></label>
                            </div><div class="swatch-element slategray available" data-value="Slategray">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-resultlist" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625007194-list-resultlist">
                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625007194-list-resultlist"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span></label>
                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-resultlist" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625007194-list-resultlist">
                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625007194-list-resultlist"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span></label>
                            </div></div><select name="id" id="ProductSelect-6679625007194-list-resultlist" class="selector-wrapper-hidden" style="display: none;"><option value="39724525486170" data-value="39724525486170">XS / Black</option><option value="39724525518938" data-value="39724525518938">XS / Slategray</option><option value="39724525551706" data-value="39724525551706">XS / Sandybrown</option><option value="39724525584474" data-value="39724525584474">S / Black</option><option value="39724525617242" data-value="39724525617242">S / Slategray</option><option value="39724525650010" data-value="39724525650010">S / Sandybrown</option><option disabled="disabled" data-value="39724525682778">M / Slategray - Sold out</option><option value="39724525715546" data-value="39724525715546">M / Sandybrown</option><option value="39724525748314" data-value="39724525748314">L / Slategray</option><option value="39724525781082" data-value="39724525781082">L / Sandybrown</option><option value="39724525813850" data-value="39724525813850">XL / Black</option>
        </select>
        
        <div class="product-card__button2">
            <input type="hidden" name="quantity" value="1">
            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625007194-list-result-list">Add</button></div>
    </form>
</div>
                    </div></div>
</div>
<div class="card-product__group-item card-wishlist">
                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="tele-kill-giother-nodels-coped-permi-unde-ona" data-product-id="6679625007194">
                                <span class="visually-hidden">Add to wishlist</span>
                                <span class="text">
                                    Add to wishlist
                                </span>
                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>
                            </button>
                        </div></div></div>
    </div>
</div>

</div><div class="product">
<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625236570" data-json-product="{&quot;id&quot;: 6679625236570,&quot;handle&quot;: &quot;home-tosmois-de-cras-hamo-dincidunts&quot;,&quot;media&quot;: null,&quot;variants&quot;: [{&quot;id&quot;:39724528402522,&quot;title&quot;:&quot;XS \/ Black&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386969690,&quot;product_id&quot;:6679625236570,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528402522]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Black&quot;,&quot;public_title&quot;:&quot;XS \/ Black&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Black&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:5900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915888218,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528435290,&quot;title&quot;:&quot;XS \/ Beige&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856387002458,&quot;product_id&quot;:6679625236570,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528435290]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Beige&quot;,&quot;public_title&quot;:&quot;XS \/ Beige&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:6900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915920986,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528468058,&quot;title&quot;:&quot;XS \/ Slategray&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856387035226,&quot;product_id&quot;:6679625236570,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_fb22dfcd-1532-40cd-9017-70c7cceed9e8.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528468058]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Slategray&quot;,&quot;public_title&quot;:&quot;XS \/ Slategray&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915953754,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_fb22dfcd-1532-40cd-9017-70c7cceed9e8.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528500826,&quot;title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856387067994,&quot;product_id&quot;:6679625236570,&quot;position&quot;:4,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2_50568174-f5b3-4d14-aaf3-d2b6f7ce1964.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528500826]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915986522,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2_50568174-f5b3-4d14-aaf3-d2b6f7ce1964.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528533594,&quot;title&quot;:&quot;S \/ Black&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Black&quot;,&quot;public_title&quot;:&quot;S \/ Black&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528566362,&quot;title&quot;:&quot;S \/ Beige&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Beige&quot;,&quot;public_title&quot;:&quot;S \/ Beige&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528599130,&quot;title&quot;:&quot;S \/ Slategray&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Slategray&quot;,&quot;public_title&quot;:&quot;S \/ Slategray&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528631898,&quot;title&quot;:&quot;S \/ Sandybrown&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;S \/ Sandybrown&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528664666,&quot;title&quot;:&quot;L \/ Black&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Black&quot;,&quot;public_title&quot;:&quot;L \/ Black&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528697434,&quot;title&quot;:&quot;L \/ Beige&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Beige&quot;,&quot;public_title&quot;:&quot;L \/ Beige&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528730202,&quot;title&quot;:&quot;L \/ Slategray&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Slategray&quot;,&quot;public_title&quot;:&quot;L \/ Slategray&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528762970,&quot;title&quot;:&quot;L \/ Sandybrown&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;L \/ Sandybrown&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528795738,&quot;title&quot;:&quot;XL \/ Black&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Black&quot;,&quot;public_title&quot;:&quot;XL \/ Black&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528828506,&quot;title&quot;:&quot;XL \/ Beige&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Beige&quot;,&quot;public_title&quot;:&quot;XL \/ Beige&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528861274,&quot;title&quot;:&quot;XL \/ Slategray&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Slategray&quot;,&quot;public_title&quot;:&quot;XL \/ Slategray&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528894042,&quot;title&quot;:&quot;XL \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XL \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}]}">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-53134842 date1-614" data-new-badge-number="30"></div>
<div class="card-media card-media--adapt media--hover-effect" style="padding-bottom: 100.0%;">
                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_165x.jpg?v=1640334234 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_170x.jpg?v=1640334234 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_185x.jpg?v=1640334234 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_198x.jpg?v=1640334234 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_210x.jpg?v=1640334234 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_220x.jpg?v=1640334234 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_245x.jpg?v=1640334234 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_270x.jpg?v=1640334234 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_290x.jpg?v=1640334234 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_320x.jpg?v=1640334234 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_355x.jpg?v=1640334234 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_360x.jpg?v=1640334234 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_370x.jpg?v=1640334234 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_420x.jpg?v=1640334234 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_430x.jpg?v=1640334234 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_460x.jpg?v=1640334234 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_470x.jpg?v=1640334234 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_510x.jpg?v=1640334234 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_523x.jpg?v=1640334234 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_533x.jpg?v=1640334234 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_534x.jpg?v=1640334234 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_570x.jpg?v=1640334234 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_640x.jpg?v=1640334234 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_665x.jpg?v=1640334234 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_670x.jpg?v=1640334234 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_720x.jpg?v=1640334234 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_775x.jpg?v=1640334234 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_785x.jpg?v=1640334234 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_870x.jpg?v=1640334234 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 21) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_800x.jpg?v=1640334234"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_165x.jpg?v=1640334234 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_170x.jpg?v=1640334234 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_185x.jpg?v=1640334234 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_198x.jpg?v=1640334234 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_210x.jpg?v=1640334234 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_220x.jpg?v=1640334234 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_245x.jpg?v=1640334234 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_270x.jpg?v=1640334234 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_290x.jpg?v=1640334234 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_320x.jpg?v=1640334234 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_355x.jpg?v=1640334234 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_360x.jpg?v=1640334234 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_370x.jpg?v=1640334234 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_420x.jpg?v=1640334234 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_430x.jpg?v=1640334234 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_460x.jpg?v=1640334234 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_470x.jpg?v=1640334234 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_510x.jpg?v=1640334234 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_523x.jpg?v=1640334234 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_533x.jpg?v=1640334234 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_534x.jpg?v=1640334234 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_570x.jpg?v=1640334234 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_640x.jpg?v=1640334234 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_665x.jpg?v=1640334234 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_670x.jpg?v=1640334234 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_720x.jpg?v=1640334234 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_775x.jpg?v=1640334234 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_785x.jpg?v=1640334234 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_870x.jpg?v=1640334234 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 21) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload"><span class="data-lazy-loading"></span>
                    <a class="card-link" href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" title="(Product 21) Sample - Computers &amp; Accessories For Sale"></a>
                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">
                                <button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625236570" data-open-quick-view-popup="" data-product-handle="home-tosmois-de-cras-hamo-dincidunts">
                                    <span class="visually-hidden">Quick View</span>
                                    <span class="text">
                                        Quick View
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>
                                </button>
                            </div></div>
<div class="card-quickview">
                        <button type="button" title="Quick View" class="quickview-button button" data-product-id="6679625236570" data-open-quick-view-popup="" data-product-handle="home-tosmois-de-cras-hamo-dincidunts">
                            <span class="visually-hidden">Quick View</span>
                            Quick View
                        </button>
                    </div></div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-left">
                
                    <div class="wrapper-title-vendor  card-title-ellipsis">
                
<a class="card-title link-underline card-title-ellipsis card-title-change" href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" data-product-title="(Product 21) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/home-tosmois-de-cras-hamo-dincidunts">
                    <span class="text">
                        (Product 21) Sample - Computers &amp; Accessories For Sale
                        
                            <span data-change-title=""> - Black</span>
                        
                    </span>
                </a>

                
                    </div>
                
<div class="card-review clearfix halo-productReview">
                        <span class="spr-badge" id="spr_badge_6679625236570" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i></span><span class="spr-badge-caption">1 review</span>
</span>

                    </div><div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>
<div class="card-price">
                        <div class="price  price--on-sale ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$79.00</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"><span class="money" data-currency-usd="$59.00">$59.00</span></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="text">From</span> <span class="money" data-currency-usd="$49.00">$49.00</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>

                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625236570">
        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label is-active" data-value="black" data-variant-id="39724528402522" title="Black" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_800x.jpg?v=1640334234"><span class="pattern" style="background-color: black; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span>black</label><span class="tooltip">Black
</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="beige" data-variant-id="39724528435290" title="Beige" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_800x.jpg?v=1640334234"><span class="pattern" style="background-color: beige; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123188)"></span>beige</label><span class="tooltip">Beige
</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="slategray" data-variant-id="39724528468058" title="Slategray" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_fb22dfcd-1532-40cd-9017-70c7cceed9e8_800x.jpg?v=1640334234"><span class="pattern" style="background-color: slategray; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span>slategray</label><span class="tooltip">Slategray
</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="sandybrown" data-variant-id="39724528500826" title="Sandybrown" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_50568174-f5b3-4d14-aaf3-d2b6f7ce1964_800x.jpg?v=1640334234"><span class="pattern" style="background-color: sandybrown; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span>sandybrown</label><span class="tooltip">Sandybrown
</span></div></li></ul>
    </div>

<div class="wrapper__card show-wishlist show-mb"><div class="card-action">
                            <form action="/cart/add" method="post" class="variants" id="form-6679625236570-list-result" data-product-id="6679625236570" enctype="multipart/form-data"><a class="button button-ATC" href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" data-quickshop-popup="" data-product-handle="home-tosmois-de-cras-hamo-dincidunts">Quick Add
</a></form><div class="variants-popup custom-scrollbar">
                <script>window.quick_view_inven_array_6679625236570 = {'39724528402522': '9','39724528435290': '10','39724528468058': '10','39724528500826': '10','39724528533594': '10','39724528566362': '10','39724528599130': '10','39724528631898': '10','39724528664666': '10','39724528697434': '10','39724528730202': '10','39724528762970': '10','39724528795738': '10','39724528828506': '10','39724528861274': '10','39724528894042': '10',};</script><a href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>
<div class="variants-popup-content text-center" data-quickshop=""><form action="/cart/add" method="post" class="variants" id="swatch-form-6679625236570-list-result-" data-id="product-actions-6679625236570" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">
                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs unavailable" data-value="XS">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625236570-list-result">
                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625236570-list-result">XS</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        



<div class="swatch-element s unavailable" data-value="S">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625236570-list-result">
                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625236570-list-result">S</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        



<div class="swatch-element l unavailable" data-value="L">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625236570-list-result">
                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625236570-list-result">L</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        



<div class="swatch-element xl unavailable" data-value="XL">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625236570-list-result">
                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625236570-list-result">XL</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        



</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1" style="display: none;">
                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625236570-list-result">
                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625236570-list-result"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span></label>
                            </div><div class="swatch-element beige available" data-value="Beige">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Beige" id="SingleOptionSelector1-Beige-6679625236570-list-result">
                                <label class="single-label" title="Beige" for="SingleOptionSelector1-Beige-6679625236570-list-result"><span class="pattern" style="background-color: beige;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123188)"></span></label>
                            </div><div class="swatch-element slategray available" data-value="Slategray">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625236570-list-result">
                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625236570-list-result"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span></label>
                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625236570-list-result">
                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625236570-list-result"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span></label>
                            </div></div><select name="id" id="ProductSelect-6679625236570-list-result" class="selector-wrapper-hidden" style="display: none;"><option value="39724528402522" data-value="39724528402522">XS / Black</option><option value="39724528435290" data-value="39724528435290">XS / Beige</option><option value="39724528468058" data-value="39724528468058">XS / Slategray</option><option value="39724528500826" data-value="39724528500826">XS / Sandybrown</option><option value="39724528533594" data-value="39724528533594">S / Black</option><option value="39724528566362" data-value="39724528566362">S / Beige</option><option value="39724528599130" data-value="39724528599130">S / Slategray</option><option value="39724528631898" data-value="39724528631898">S / Sandybrown</option><option value="39724528664666" data-value="39724528664666">L / Black</option><option value="39724528697434" data-value="39724528697434">L / Beige</option><option value="39724528730202" data-value="39724528730202">L / Slategray</option><option value="39724528762970" data-value="39724528762970">L / Sandybrown</option><option value="39724528795738" data-value="39724528795738">XL / Black</option><option value="39724528828506" data-value="39724528828506">XL / Beige</option><option value="39724528861274" data-value="39724528861274">XL / Slategray</option><option value="39724528894042" data-value="39724528894042">XL / Sandybrown</option>
        </select>
        
        <div class="product-card__button2">
            <input type="hidden" name="quantity" value="1">
            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625236570-list-result-">Add</button></div>
    </form>
</div>
            </div>
                        </div><div class="card-action__group card-list__hidden">
    <div class="card-action">
        <form action="/cart/add" method="post" class="variants" id="form-6679625236570-list-resultlist" data-product-id="6679625236570" enctype="multipart/form-data"><a class="button button-ATC" href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" data-quickshop-popup="">Quick Add</a></form>
    </div>
</div>
<div class="card-action__group variants-popup card-list__hidden">
    <div class="card-action variants-popup-form"><div class="custom-scrollbar">
                        <script>window.quick_view_inven_array_6679625236570 = {'39724528402522': '9','39724528435290': '10','39724528468058': '10','39724528500826': '10','39724528533594': '10','39724528566362': '10','39724528599130': '10','39724528631898': '10','39724528664666': '10','39724528697434': '10','39724528730202': '10','39724528762970': '10','39724528795738': '10','39724528828506': '10','39724528861274': '10','39724528894042': '10',};</script><a href="/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>
<div class="variants-popup-content text-center" data-quickshop=""><form action="/cart/add" method="post" class="variants" id="swatch-form-6679625236570-list-result-list" data-id="product-actions-6679625236570list" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">
                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs unavailable" data-value="XS">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625236570-list-resultlist">
                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625236570-list-resultlist">XS</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        



<div class="swatch-element s unavailable" data-value="S">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625236570-list-resultlist">
                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625236570-list-resultlist">S</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        



<div class="swatch-element l unavailable" data-value="L">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625236570-list-resultlist">
                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625236570-list-resultlist">L</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        



<div class="swatch-element xl unavailable" data-value="XL">
                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625236570-list-resultlist">
                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625236570-list-resultlist">XL</label><a class="single-action clearfix" href="#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>
                        



</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1">
                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625236570-list-resultlist">
                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625236570-list-resultlist"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123188)"></span></label>
                            </div><div class="swatch-element beige available" data-value="Beige">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Beige" id="SingleOptionSelector1-Beige-6679625236570-list-resultlist">
                                <label class="single-label" title="Beige" for="SingleOptionSelector1-Beige-6679625236570-list-resultlist"><span class="pattern" style="background-color: beige;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123188)"></span></label>
                            </div><div class="swatch-element slategray available" data-value="Slategray">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625236570-list-resultlist">
                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625236570-list-resultlist"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123188)"></span></label>
                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">
                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625236570-list-resultlist">
                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625236570-list-resultlist"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123188)"></span></label>
                            </div></div><select name="id" id="ProductSelect-6679625236570-list-resultlist" class="selector-wrapper-hidden" style="display: none;"><option value="39724528402522" data-value="39724528402522">XS / Black</option><option value="39724528435290" data-value="39724528435290">XS / Beige</option><option value="39724528468058" data-value="39724528468058">XS / Slategray</option><option value="39724528500826" data-value="39724528500826">XS / Sandybrown</option><option value="39724528533594" data-value="39724528533594">S / Black</option><option value="39724528566362" data-value="39724528566362">S / Beige</option><option value="39724528599130" data-value="39724528599130">S / Slategray</option><option value="39724528631898" data-value="39724528631898">S / Sandybrown</option><option value="39724528664666" data-value="39724528664666">L / Black</option><option value="39724528697434" data-value="39724528697434">L / Beige</option><option value="39724528730202" data-value="39724528730202">L / Slategray</option><option value="39724528762970" data-value="39724528762970">L / Sandybrown</option><option value="39724528795738" data-value="39724528795738">XL / Black</option><option value="39724528828506" data-value="39724528828506">XL / Beige</option><option value="39724528861274" data-value="39724528861274">XL / Slategray</option><option value="39724528894042" data-value="39724528894042">XL / Sandybrown</option>
        </select>
        
        <div class="product-card__button2">
            <input type="hidden" name="quantity" value="1">
            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625236570-list-result-list">Add</button></div>
    </form>
</div>
                    </div></div>
</div>
<div class="card-product__group-item card-wishlist">
                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="home-tosmois-de-cras-hamo-dincidunts" data-product-id="6679625236570">
                                <span class="visually-hidden">Add to wishlist</span>
                                <span class="text">
                                    Add to wishlist
                                </span>
                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>
                            </button>
                        </div></div></div>
    </div>
</div>

</div><div class="product">
<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625105498" data-json-product="{&quot;id&quot;: 6679625105498,&quot;handle&quot;: &quot;home-imperdiet-vellectus-eleifend-thiams&quot;,&quot;media&quot;: null,&quot;variants&quot;: [{&quot;id&quot;:39724526600282,&quot;title&quot;:&quot;DarkOrange&quot;,&quot;option1&quot;:&quot;DarkOrange&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;MKI-2661&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386314330,&quot;product_id&quot;:6679625105498,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2.jpg?v=1640334213&quot;,&quot;variant_ids&quot;:[39724526600282]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 17) Sample - Computers \u0026 Accessories For Sale - DarkOrange&quot;,&quot;public_title&quot;:&quot;DarkOrange&quot;,&quot;options&quot;:[&quot;DarkOrange&quot;],&quot;price&quot;:9900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:42900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915232858,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2.jpg?v=1640334213&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724526633050,&quot;title&quot;:&quot;LightCoral&quot;,&quot;option1&quot;:&quot;LightCoral&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;MKI-2661&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386347098,&quot;product_id&quot;:6679625105498,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1.jpg?v=1640334213&quot;,&quot;variant_ids&quot;:[39724526633050]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 17) Sample - Computers \u0026 Accessories For Sale - LightCoral&quot;,&quot;public_title&quot;:&quot;LightCoral&quot;,&quot;options&quot;:[&quot;LightCoral&quot;],&quot;price&quot;:8900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915265626,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1.jpg?v=1640334213&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724526665818,&quot;title&quot;:&quot;Grey&quot;,&quot;option1&quot;:&quot;Grey&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;MKI-2661&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386379866,&quot;product_id&quot;:6679625105498,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_c7fc75f2-735e-41a4-9d82-004fe8244483.jpg?v=1640334213&quot;,&quot;variant_ids&quot;:[39724526665818]},&quot;available&quot;:false,&quot;name&quot;:&quot;(Product 17) Sample - Computers \u0026 Accessories For Sale - Grey&quot;,&quot;public_title&quot;:&quot;Grey&quot;,&quot;options&quot;:[&quot;Grey&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915298394,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_c7fc75f2-735e-41a4-9d82-004fe8244483.jpg?v=1640334213&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}]}">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-53134862 date1-614" data-new-badge-number="30"><span class="badge sale-badge" aria-hidden="true">Sale
</span></div>
<div class="card-media card-media--adapt media--hover-effect" style="padding-bottom: 100.0%;">
                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_165x.jpg?v=1640334213 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_170x.jpg?v=1640334213 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_185x.jpg?v=1640334213 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_198x.jpg?v=1640334213 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_210x.jpg?v=1640334213 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_220x.jpg?v=1640334213 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_245x.jpg?v=1640334213 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_270x.jpg?v=1640334213 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_290x.jpg?v=1640334213 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_320x.jpg?v=1640334213 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_355x.jpg?v=1640334213 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_360x.jpg?v=1640334213 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_370x.jpg?v=1640334213 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_420x.jpg?v=1640334213 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_430x.jpg?v=1640334213 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_460x.jpg?v=1640334213 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_470x.jpg?v=1640334213 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_510x.jpg?v=1640334213 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_523x.jpg?v=1640334213 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_533x.jpg?v=1640334213 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_534x.jpg?v=1640334213 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_570x.jpg?v=1640334213 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_640x.jpg?v=1640334213 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_665x.jpg?v=1640334213 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_670x.jpg?v=1640334213 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_720x.jpg?v=1640334213 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_775x.jpg?v=1640334213 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_785x.jpg?v=1640334213 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_870x.jpg?v=1640334213 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 17) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_800x.jpg?v=1640334213"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_165x.jpg?v=1640334213 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_170x.jpg?v=1640334213 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_185x.jpg?v=1640334213 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_198x.jpg?v=1640334213 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_210x.jpg?v=1640334213 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_220x.jpg?v=1640334213 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_245x.jpg?v=1640334213 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_270x.jpg?v=1640334213 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_290x.jpg?v=1640334213 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_320x.jpg?v=1640334213 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_355x.jpg?v=1640334213 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_360x.jpg?v=1640334213 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_370x.jpg?v=1640334213 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_420x.jpg?v=1640334213 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_430x.jpg?v=1640334213 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_460x.jpg?v=1640334213 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_470x.jpg?v=1640334213 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_510x.jpg?v=1640334213 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_523x.jpg?v=1640334213 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_533x.jpg?v=1640334213 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_534x.jpg?v=1640334213 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_570x.jpg?v=1640334213 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_640x.jpg?v=1640334213 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_665x.jpg?v=1640334213 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_670x.jpg?v=1640334213 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_720x.jpg?v=1640334213 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_775x.jpg?v=1640334213 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_785x.jpg?v=1640334213 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_870x.jpg?v=1640334213 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 17) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload"><span class="data-lazy-loading"></span>
                    <a class="card-link" href="/products/home-imperdiet-vellectus-eleifend-thiams?variant=39724526600282" title="(Product 17) Sample - Computers &amp; Accessories For Sale"></a>
                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">
                                <button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625105498" data-open-quick-view-popup="" data-product-handle="home-imperdiet-vellectus-eleifend-thiams">
                                    <span class="visually-hidden">Quick View</span>
                                    <span class="text">
                                        Quick View
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>
                                </button>
                            </div></div>
<div class="card-quickview">
                        <button type="button" title="Quick View" class="quickview-button button" data-product-id="6679625105498" data-open-quick-view-popup="" data-product-handle="home-imperdiet-vellectus-eleifend-thiams">
                            <span class="visually-hidden">Quick View</span>
                            Quick View
                        </button>
                    </div></div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-left">
                
                    <div class="wrapper-title-vendor  card-title-ellipsis">
                
<a class="card-title link-underline card-title-ellipsis card-title-change" href="/products/home-imperdiet-vellectus-eleifend-thiams?variant=39724526600282" data-product-title="(Product 17) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/home-imperdiet-vellectus-eleifend-thiams">
                    <span class="text">
                        (Product 17) Sample - Computers &amp; Accessories For Sale
                        
                            <span data-change-title=""> - DarkOrange</span>
                        
                    </span>
                </a>

                
                    </div>
                
<div class="card-review clearfix halo-productReview">
                        <span class="spr-badge" id="spr_badge_6679625105498" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i></span><span class="spr-badge-caption">No reviews</span>
</span>

                    </div><div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>
<div class="card-price">
                        <div class="price price--on-sale">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="text">From</span> <span class="money" data-currency-usd="$79.00">$79.00</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"><span class="money">$429.00</span></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$99.00</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>

                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625105498">
        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label data-with-one-option="39724526600282" data-quantity="1" class="swatch-label is-active" data-value="darkorange" data-variant-id="39724526600282" title="DarkOrange" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_800x.jpg?v=1640334213"><span class="pattern" style="background-color: darkorange; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/darkorange.png?123188)"></span>darkorange</label><span class="tooltip">DarkOrange
</span></div></li><li class="item"><div class="item-wrapper clearfix"><label data-with-one-option="39724526633050" data-quantity="1" class="swatch-label" data-value="lightcoral" data-variant-id="39724526633050" title="LightCoral" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_800x.jpg?v=1640334213"><span class="pattern" style="background-color: lightcoral; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/lightcoral.png?123188)"></span>lightcoral</label><span class="tooltip">LightCoral
</span></div></li><li class="item"><div class="item-wrapper clearfix"><label data-with-one-option="39724526665818" data-quantity="0" class="swatch-label" data-value="grey" data-variant-id="39724526665818" title="Grey" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_c7fc75f2-735e-41a4-9d82-004fe8244483_800x.jpg?v=1640334213"><span class="pattern" style="background-color: grey; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/grey.png?123188)"></span>grey</label><span class="tooltip">Grey
</span></div></li></ul>
    </div>

<div class="wrapper__card show-wishlist show-mb"><div class="card-action">
                            <form action="/cart/add" method="post" class="variants" id="form-6679625105498-list-result" data-product-id="6679625105498" enctype="multipart/form-data"><input type="hidden" name="id" value="39724526600282">
                    <input type="hidden" name="quantity" value="1">
                    <button class="button button-ATC is-visible" type="submit" data-form-id="#form-6679625105498-list-result" data-btn-addtocart="">Add to cart</button></form>
                        </div><div class="card-action__group card-list__hidden">
    <div class="card-action">
        <form action="/cart/add" method="post" class="variants" id="form-6679625105498-list-resultlist" data-product-id="6679625105498" enctype="multipart/form-data"><input type="hidden" name="id" value="39724526600282">
                            <input type="hidden" name="quantity" value="1">
                            <button class="button button-ATC is-visible" type="submit" data-form-id="#form-6679625105498-list-resultlist" data-btn-addtocart="">Add to cart</button></form>
    </div>
</div>
<div class="card-action__group variants-popup card-list__hidden">
    <div class="card-action variants-popup-form"></div>
</div>
<div class="card-product__group-item card-wishlist">
                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="home-imperdiet-vellectus-eleifend-thiams" data-product-id="6679625105498">
                                <span class="visually-hidden">Add to wishlist</span>
                                <span class="text">
                                    Add to wishlist
                                </span>
                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>
                            </button>
                        </div></div></div>
    </div>
</div>

</div></div>
                        </div>
                    </div>
                </div></div>
    </div>
</div><div class="predictive-search predictive-search--header quickSearchResultsWrap" tabindex="-1" data-predictive-search="">
    <div class="predictive-search__loading-state"><svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle></svg></div>
</div>
<span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></div>
	</div>
</div>

</div>
                                    </details></predictive-search></details-modal>
                            </div></div>
                            <!--<div class="header-single-line__item header-single-line__item--wishlist"><div class="header__iconItem header__group" style="--color: #ffffff">-->
                                    <!--<a href="/pages/wish-list" class="header__icon header__icon--wishlist link link--text focus-inset"><svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg><span class="wishlist-text">Wish Lists</span></a>-->
                            <!--    </div></div>-->
                            <!--    <div class="header-single-line__item header-single-line__item--gift_cards"><div class="header__iconItem header__group" style="--color: #ffffff">-->
                                <!--<a role="link" aria-disabled="true" class="header__icon header__icon--giftcards link link--text focus-inset"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="gift" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-giftcards"><path fill="currentColor" d="M464 144h-39.3c9.5-13.4 15.3-29.9 15.3-48 0-44.1-33.4-80-74.5-80-42.3 0-66.8 25.4-109.5 95.8C213.3 41.4 188.8 16 146.5 16 105.4 16 72 51.9 72 96c0 18.1 5.8 34.6 15.3 48H48c-26.5 0-48 21.5-48 48v96c0 8.8 7.2 16 16 16h16v144c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304h16c8.8 0 16-7.2 16-16v-96c0-26.5-21.5-48-48-48zm-187.8-3.6c49.5-83.3 66-92.4 89.3-92.4 23.4 0 42.5 21.5 42.5 48s-19.1 48-42.5 48H274l2.2-3.6zM146.5 48c23.4 0 39.8 9.1 89.3 92.4l2.1 3.6h-91.5c-23.4 0-42.5-21.5-42.5-48 .1-26.5 19.2-48 42.6-48zM192 464H80c-8.8 0-16-7.2-16-16V304h128v160zm0-192H32v-80c0-8.8 7.2-16 16-16h144v96zm96 192h-64V176h64v288zm160-16c0 8.8-7.2 16-16 16H320V304h128v144zm32-176H320v-96h144c8.8 0 16 7.2 16 16v80z" class=""></path></svg><span class="giftcards-text">Gift Cards</span></a>-->
                            <!--</div></div>-->
                            <style>
                                .floatingcart {
                                    position: absolute;
                                    top: -10px;
                                    right: -51px;
                                    overflow-x: hidden;
                                    width: 400px;
                                    background: white;
                                    min-height: 120px;
                                }
                                .table>thead{
                                    width:100%!important;
                                }
                                .table>tbody{
                                    width:100%!important;
                                }
                                tr{
                                    width:100%!important;
                                }
                                .cart-qty{
                                    position: absolute;
                                    top: -12px;
                                    right: -5px;
                                    font-size: 14px;
                                    background: #219ebc;
                                    border-radius: 50px;
                                    padding: 8px 8px;
                                    height: 32px;
                                    width: 33px;
                                    vertical-align: middle;
                                    text-align: center;
                                }
                            </style>
                            <!--header__icon--cart-->
                            
                            <div class="header-single-line__item header-single-line__item--customer">
                                <div class="header__iconItem header__group" style="--color: #ffffff">
                                    @if(\Auth::check())
                                    <a href="{{URL::to('/')}}/user/order" target="_blank" class="header__icon header__icon--account link link--text" data-open-auth-sidebar="">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-account" viewBox="0 0 1024 1024" width="100%" height="100%"><path class="path1" d="M486.4 563.2c-155.275 0-281.6-126.325-281.6-281.6s126.325-281.6 281.6-281.6 281.6 126.325 281.6 281.6-126.325 281.6-281.6 281.6zM486.4 51.2c-127.043 0-230.4 103.357-230.4 230.4s103.357 230.4 230.4 230.4c127.042 0 230.4-103.357 230.4-230.4s-103.358-230.4-230.4-230.4z"></path><path class="path2" d="M896 1024h-819.2c-42.347 0-76.8-34.451-76.8-76.8 0-3.485 0.712-86.285 62.72-168.96 36.094-48.126 85.514-86.36 146.883-113.634 74.957-33.314 168.085-50.206 276.797-50.206 108.71 0 201.838 16.893 276.797 50.206 61.37 27.275 110.789 65.507 146.883 113.634 62.008 82.675 62.72 165.475 62.72 168.96 0 42.349-34.451 76.8-76.8 76.8zM486.4 665.6c-178.52 0-310.267 48.789-381 141.093-53.011 69.174-54.195 139.904-54.2 140.61 0 14.013 11.485 25.498 25.6 25.498h819.2c14.115 0 25.6-11.485 25.6-25.6-0.006-0.603-1.189-71.333-54.198-140.507-70.734-92.304-202.483-141.093-381.002-141.093z"></path></svg>
                                        
                                        <span class="customer-links">{{\Auth::user()->name}}</span>
                                        
                                    </a>
                                    @else
                                    <a href="{{URL::to('/')}}/login" target="_blank" class="header__icon header__icon--account link link--text" data-open-auth-sidebar="">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-account" viewBox="0 0 1024 1024" width="100%" height="100%"><path class="path1" d="M486.4 563.2c-155.275 0-281.6-126.325-281.6-281.6s126.325-281.6 281.6-281.6 281.6 126.325 281.6 281.6-126.325 281.6-281.6 281.6zM486.4 51.2c-127.043 0-230.4 103.357-230.4 230.4s103.357 230.4 230.4 230.4c127.042 0 230.4-103.357 230.4-230.4s-103.358-230.4-230.4-230.4z"></path><path class="path2" d="M896 1024h-819.2c-42.347 0-76.8-34.451-76.8-76.8 0-3.485 0.712-86.285 62.72-168.96 36.094-48.126 85.514-86.36 146.883-113.634 74.957-33.314 168.085-50.206 276.797-50.206 108.71 0 201.838 16.893 276.797 50.206 61.37 27.275 110.789 65.507 146.883 113.634 62.008 82.675 62.72 165.475 62.72 168.96 0 42.349-34.451 76.8-76.8 76.8zM486.4 665.6c-178.52 0-310.267 48.789-381 141.093-53.011 69.174-54.195 139.904-54.2 140.61 0 14.013 11.485 25.498 25.6 25.498h819.2c14.115 0 25.6-11.485 25.6-25.6-0.006-0.603-1.189-71.333-54.198-140.507-70.734-92.304-202.483-141.093-381.002-141.093z"></path></svg>
                                        
                                        <span class="customer-links">Sign In</span>
                                    </a>
                                    @endif
                                    
                                    </div></div>
                                    <div class="header-single-line__item header-single-line__item--cart">
                                        <div class="header__iconItem header__group" style="--color: #ffffff; --cart-bg-item: #ffffff; --cart-color-item: #fd6506; --cart-item-font-size: 14px">
                                <a href="#" class="header__icon  link link--text focus-inset cart-icon-bubble quotation" id="quotation" data-cart-sidebar="">
                                    
                                    <svg style="width: 7rem;height: 3.2rem;font-size: 100px;" viewBox="0 0 1024 1024" class="icon icon-cart" xmlns="http://www.w3.org/2000/svg"><path class="path1" d="M409.6 1024c-56.464 0-102.4-45.936-102.4-102.4s45.936-102.4 102.4-102.4S512 865.136 512 921.6 466.064 1024 409.6 1024zm0-153.6c-28.232 0-51.2 22.968-51.2 51.2s22.968 51.2 51.2 51.2 51.2-22.968 51.2-51.2-22.968-51.2-51.2-51.2z"></path><path class="path2" d="M768 1024c-56.464 0-102.4-45.936-102.4-102.4S711.536 819.2 768 819.2s102.4 45.936 102.4 102.4S824.464 1024 768 1024zm0-153.6c-28.232 0-51.2 22.968-51.2 51.2s22.968 51.2 51.2 51.2 51.2-22.968 51.2-51.2-22.968-51.2-51.2-51.2z"></path><path class="path3" d="M898.021 228.688C885.162 213.507 865.763 204.8 844.8 204.8H217.954l-5.085-30.506C206.149 133.979 168.871 102.4 128 102.4H76.8c-14.138 0-25.6 11.462-25.6 25.6s11.462 25.6 25.6 25.6H128c15.722 0 31.781 13.603 34.366 29.112l85.566 513.395C254.65 736.421 291.929 768 332.799 768h512c14.139 0 25.6-11.461 25.6-25.6s-11.461-25.6-25.6-25.6h-512c-15.722 0-31.781-13.603-34.366-29.11l-12.63-75.784 510.206-44.366c39.69-3.451 75.907-36.938 82.458-76.234l34.366-206.194c3.448-20.677-1.952-41.243-14.813-56.424zm-35.69 48.006l-34.366 206.194c-2.699 16.186-20.043 32.221-36.39 33.645l-514.214 44.714-50.874-305.246h618.314c5.968 0 10.995 2.054 14.155 5.782 3.157 3.73 4.357 9.024 3.376 14.912z"></path></svg> 
                                    
                                        <span class="cart-text">Quotation<sup class="cart-qty">{{Cart::count()}}</sup></span> 

                                    </div>
                                    @if(count(Cart::content())>0)
                                    <div class="floatingcart" id="floatingcart">
                                        <span style="font-size: 14px!important; margin-top: 10px; border-bottom: 1px solid #ccc;">Quotations Items</span>
                            <table class="table table-stripped">
                                <tr>
                                    <th width="15%" style="font-size: 11px!important;">Image</th>
                                    <th width="20%" style="font-size: 11px!important;">Product</th>
                                    <!--<th width="15%" style="font-size: 11px!important;">Price</th>-->
                                    <th width="15%" style="font-size: 11px!important;">Quantity</th>
                                    <th width="10%" style="font-size: 11px!important;">Total</th>
                                    <th width="5%" style="font-size: 11px!important;">Remove</th>
                                </tr>
                                    @foreach(Cart::content() as $item)
                                    <tr >
                                        @php
                                           $product=DB::table('products')->where('id',$item->id)->first();
                                        @endphp
                                        <td style="font-size: 11px!important; border-bottom:1px solid black!important;">
                                            <a href="{{route('details',['product_id'=>$item->id])}}">
                                            	 <img src="{{URL::to('/')}}/application/storage/app/product/{{$product->f_pic}}" width="50" alt="{{$item->name}}">
                                            </a>
                                        </td>
                                        <td class="text-left" style="font-size: 11px!important; border-bottom:1px solid black!important;">
                                            <a href="{{route('details',['product_id'=>$item->id])}}" style="color:black;">{{$item->name}}</a>
                                        </td>
                                        <!--<td style="font-size: 11px!important;">-->
                                        <!--    <span class="amount">৳ <span class="unit-price">{{$item->price}}</span> </span>-->
                                        <!--</td>-->
                                        <td style="font-size: 11px!important; border-bottom:1px solid black!important;">
                                            {{$item->qty}}
                                        </td>
                                        <td style="font-size: 11px!important; border-bottom:1px solid black!important;">
                                            <span class="amount">৳ <span class="total-price">{{$item->price*$item->qty}}</span></span>
                                        </td>
                                        <td style="font-size: 11px!important; border-bottom:1px solid black!important;">
                                            <a href="{{route('removeformcart',['id'=>$item->rowId])}}" class="btn"><i class="fa fa-times" style="font-size:24px;"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="2" style="text-align:center;"> 
                                            <a href="{{route('product.cart')}}" style="font-size:16px; color:blue; margin:10px; background: #ccc!important; border-radius:20px;     padding: 0px 17px;">Quotation</a>
                                        </td>
                                        <td colspan="3" style="text-align:center;">
                                            <a href="{{route('checkout')}}" style="font-size:16px; color:blue; margin:10px; background: #ccc!important;  border-radius:20px;     padding: 0px 17px;">Order Now</a>
                                        </td>
                                    </tr>
                            </table>
                            
                                    </div>
                                    @endif
                                </a>
                            </div></div>
                            
                            </div>
    </div>
</header>

</div>
<div id="shopify-section-sections--14862425161818__4e0c74e7-9efa-495b-842f-c03f92284f9c" class="shopify-section shopify-section-group-header-group section-header-navigation" data-index="22" style="z-index: 22;"><link href="{{URL::to('/')}}/public/template/component-megamenu.css" rel="stylesheet" type="text/css" media="all">
<style>
    @media screen and (min-width: 1025px) {
        .header-nav-vertical-menu{background: #219ebc!important;box-shadow: 0px 1px 6px rgba(var(--header_navigation_rgb), 0.1);}}
    @media screen and (min-width:1025px){.header-nav-vertical-menu .vertical-menu{width:260px;cursor:pointer}.vertical-menu .categories-title{padding:11px 25px;border-top-left-radius:6px;border-top-right-radius:6px;background:var(--title_categories_bg)}.vertical-menu .categories-title .title{color:var(--title_categories_color);font-size:var(--title_categories_font_size);line-height: var(--title_categories_line_height);font-weight: var(--font-weight-medium)}.vertical-menu .categories-title .view_all{font-size:var(--view_all_font_size);color:var(--view_all_link_color)}
    .categories-title__button .icon-grid{fill:black;margin-top:-1px}.categories-title__button .icon-grid+.title{margin-left:8px}.icon--dropdown{width:6px;height:1px;transform:rotate(-45deg);vertical-align:middle;margin-left:5px;transition:0.3s;background:var(--title_categories_color)}.icon--dropdown:before{content:"";position:absolute;left:3px;top:3px;width:6px;height:1px;;transform:rotate(-90deg);background:var(--title_categories_color)}.vertical-menu__hide .icon--dropdown{margin-left:15px;transform:rotate(-225deg)}.icon-hamburger{width:24px;height:2px;vertical-align:middle;margin-right:12px;cursor:pointer;position:relative;background-color:var(--icon_title_categories_color)}.icon-hamburger:after,.icon-hamburger:before{display:block;width:24px;height:2px;position:absolute;left:0;right:0;content:"";transition:transform .3s;transition-delay:.2s;background-color:var(--icon_title_categories_color)}.icon-hamburger:before{top:-8px}.icon-hamburger:after{top:8px}.categories-title__style_1 .categories-title__button{position:relative;padding-right:15px;width:100%}.categories-title__style_1 .icon--dropdown{position:absolute;right:4px;top:50%;margin-top:-3px}.header-navigation .vertical-menu__style_3{width:195px}.vertical-menu .categories-title__style_3{background:none;padding:11px 15px 11px 0;border-radius:0;position:relative}.categories-title__style_3:before{position:absolute;content:"";top:50%;transform:translateY(-50%);right:0;width:1px;height:30px;background-color:var(--title_categories_border_color)}.vertical-menu__style_3:hover .header__menu-vertical{opacity:1;visibility:visible;transform:translateY(0);box-shadow:0 3px 5px #0000000d;pointer-events:auto}.header-nav-vertical-menu .header__inline-menu-ver{width:calc(100% - 290px)}.vertical-menu__style_3+.header__inline-menu{width:calc(100% - 195px)}.header__menu-vertical .menu-lv-1__action>.label{display:inline-block;position:relative;right:auto;top:auto;margin-left:15px}.header__menu-vertical .menu-lv-1__action>.label:before{left:-5px;bottom:4px;transform:translate(-50%) rotate(270deg);border-bottom-color:var(--new_label_border)}
    .header-navigation .header__menu-vertical
    {
        border-top:none;
        visibility:visible;
        pointer-events:auto;
        transform:translateY(0);
        transition:transform .3s linear;
        width:300px;
        box-shadow:0 3px 18px 2px rgba(0,0,0,.2);
        border-bottom-left-radius:6px;
        border-bottom-right-radius:6px
        
    }
    .header-navigation .vertical-menu__hide .header__menu-vertical{opacity:0;visibility:hidden;pointer-events:none;transform:translateY(30px)}.header__menu-vertical .list-menu{padding:19px 0 26px}.header__menu-vertical .menu-lv-item:not(.d-none){display:block;margin:0}.header__menu-vertical .menu-lv-1__action{padding:10px 8px}.header__menu-vertical .menu-lv-item .list-menu--disclosure{position:absolute;left:calc(100% - 15px);box-shadow:none;padding:10px 0 0 0;top:-10px}.header__menu-vertical .menu-lv-item .list-menu--disclosure,.header__menu-vertical .menu-lv-2.dropdown:hover .site-nav-list-dropdown>.header__submenu{background-color:transparent}.header__menu-vertical .list-menu--disclosure .bg_white{background:var(--bg-white);box-shadow:0 1px 4px 0 rgb(0 0 0 / 15%);border-radius:6px}.header__menu-vertical .list-menu--disclosure-2{margin-left:0}.header__menu-vertical .menu-lv-1 .icon-dropdown{display:block;float:right}.header__menu-vertical .menu-lv-1__action .icon{right:23px;fill:var(--vertical_menu_lv1_color)}.header__menu-vertical .no-megamenu .menu-lv-2,.header__menu-vertical .no-megamenu .menu-lv-3{padding:0 20px}.header__menu-vertical .has-megamenu .menu-dropdown{left:100%;right:initial;top:0;min-width:calc(100vw - 450px);padding:0 30px 0 15px;max-height:90vh;border-bottom-left-radius:6px;border-bottom-right-radius:6px;box-shadow:0 3px 18px 2px rgb(0 0 0 / 20%)}.header__menu-vertical .has-megamenu .menu-dropdown .icon-dropdown{display:none}.header__menu-vertical>.list-menu{background:var(--vertical_menu_bg)}.header__menu-vertical .menu-lv-1:not(.menu-sale) .menu-lv-1__action{color:var(--vertical_menu_lv1_color)}.header__menu-vertical .menu-lv-1:hover{background:var(--vertical_menu_lv1_hover_bg)}.header__menu-vertical .menu-lv-1:hover .menu-lv-1__action{color:var(--vertical_menu_lv1_color_hover)}.header__menu-vertical .menu-lv-1>.link-effect>span:after{background:var(--vertical_menu_lv1_color_hover)}.header__menu-vertical .menu-lv-1>.link-effect:hover>span:after{background:var(--vertical_menu_lv1_color_hover)}.header__menu-vertical .menu-lv-1:hover>a .icon{fill:var(--vertical_menu_lv1_color_hover)}.header-nav-vertical-menu .header-icons{padding:8px 0;max-width:350px; column-gap: 15px}.header-nav-vertical-menu .header-icons .header__icon{display:inline-block}.header-nav-vertical-menu .header__icon--cart svg{margin-top:-1px}.header-nav-vertical-menu .customer-service-text,.header-nav-vertical-menu .help-item{font-size:var(--text_font_size)}.section-header-navigation:not(.scrolled-past-header) .header-nav-vertical-menu .customer-service-text+.icons-top-right:not(.ml-0){margin-left:15px}.header-nav-vertical-menu .icons-top-right,.header-nav-vertical-menu .header-icons-bottom,.header-nav-vertical-menu .customer-service-text-ptb{padding-top:4px;padding-bottom:4px}.header-nav-vertical-menu .customer-service-text-pt{padding-top:4px}.header-nav-vertical-menu .customer-service-text{vertical-align:middle}.header-nav-vertical-menu .customer-service-text p{margin-top:0;margin-bottom:0}.header-nav-vertical-menu .help-item-has-border{margin-right:20px}.header-nav-vertical-menu .help-item-has-border:before{position:absolute;content:"";width:1px;height:22px;top:50%;transform:translateY(-50%);right:0;background-color:var(--icon_help_border_color)}.header-nav-vertical-menu .help-item svg{color:#000!important; margin-top: -1px}.header-nav-vertical-menu .help-item span{vertical-align:middle;margin-top:-1px;color:var(--header_icons_color)}.header-nav-vertical-menu .help-item a:hover span{color:var(--header_icons_color_hover)}.header-nav-vertical-menu .header__search .icon-search{margin-top:3px}.header-nav-vertical-menu .header__icon--cart .cart-count-bubble{top:-7px}.scrolled-past-header .header-nav-vertical-menu .customer-service-text,.scrolled-past-header .header-nav-vertical-menu .help-item{display:none}.sticky-search-menu-open .header-nav-vertical-menu .search-modal__form{max-width:555px;background-color:var(--bg-white)}.
    sticky-search-menu-open .header-nav-vertical-menu .search-modal__content
    {max-width:555px;animation:animateMenuOpen .5s ease}.sticky-search-menu-open .header-nav-vertical-menu .search__input{padding:7px 10px}.sticky-search-menu-open .header-nav-vertical-menu .search__button svg{width:18px;height:18px}.sticky-search-menu-open .header-nav-vertical-menu .quickSearchResultsWrap{right:0;left:0;width:555px}.sticky-search-menu-open .header-nav-vertical-menu .quickSearchResults .container{padding-left:20px;padding-right:20px}.sticky-search-menu-open .header-nav-vertical-menu details>.search-modal{padding:10vh 0;border:1px solid #dadada;background:rgba(35,35,35,.8)}.sticky-search-menu-open .header-nav-vertical-menu .header-search-close{padding:0 0 15px 0}.sticky-search-menu-open .header-nav-vertical-menu .header-search-close svg{fill:var(--bg-white);width:20px;height:20px}.header-nav-vertical-menu .header-item:first-child {justify-content: flex-start}.header-nav-vertical-menu .header-item:nth-child(2){justify-content: center}.header-nav-vertical-menu .header-item:nth-child(3) {justify-content: flex-end}.header-nav-vertical-menu .header-item:nth-child(3) .header-icons-top{text-align: right}.header-nav-vertical-menu .header-item:nth-child(2) .header-icons-top{text-align: center}.scrolled-past-header .header-nav-vertical-menu .header-icons {padding: 4px 0}.vertical-menu__style_3 .header__menu-vertical{opacity: 0;visibility: hidden;transform: translateY(30px)}.vertical-menu__style_3:hover .header__menu-vertical {opacity: 1;visibility: visible;transform: translateY(0)}.header__menu-vertical .menu-lv-1__action .icon-img{min-width: 22px;text-align: center;margin-right: 5px;position: relative;display: inline-block;vertical-align: middle;margin-top: -3px}}
    @media (min-width:1281px) and (max-width:1399px){.header__menu-vertical .has-megamenu .menu-dropdown{min-width:calc(100vw - 470px)}}
    @media screen and (min-width:1440px){.header__menu-vertical .has-megamenu .menu-dropdown{min-width:calc(100vw - 560px)}.section-header-navigation:not(.scrolled-past-header) .header-nav-vertical-menu .customer-service-text+.icons-top-right:not(.ml-0){margin-left:35px}}
    @media screen and (min-width:1700px){.header__menu-vertical .has-megamenu .menu-dropdown{min-width:1100px}}
    
</style>

<style>
@media only screen and (max-width: 1441px) {
    .menubar{
        /*width: 100%!important;*/
        margin-right: 5% !important;
        margin-left: 5% !important;
    }
}
@media only screen and (max-width: 426px) {
    .menubar{
        /*width: 100%!important;*/
        margin-right: 0% !important;
        margin-left: 0% !important;
    }
}
</style>
<sticky-header data-sticky-type="on_scroll" class="header-navigation-wrapper">
<div class="header-navigation header-nav-vertical-menu" style="--header_navigation_rgb: 0, 0, 0">
    <div class="menubar container container-1570 d-flex flex-jc-between flex-align-center p-static o-unset sticky-container-full"><div class="main-menu d-flex w-100 header-item p-static ">
                <div class="p-static container container-1570 o-unset">
                    <div class="main-menu--wrapper d-flex flex-align-center  flex-jc-start gap-30" id="HeaderNavigation" style="--lv_1_color: #202020;--lv_1_color_hover: #202020;--lv_2_color: #202020;--lv_2_color_hover: #202020;--lv_3_color: #505050;--lv_3_color_hover: #505050;--menu_margin_left: -12px;--menu_top_spacing: 14px;--menu_top_spacing_sticky: -15px;--menu_bottom_spacing: 14px;--grid_gap_menu_item: 12px;--bg_mega_menu: #ffffff;--sale_item_color: #ea4226;--new_label_color: #ffffff;--new_label_border: #06bfe2;--new_label_bg: #06bfe2;--sale_label_color: #ffffff;
                       --sale_label_border: #ef6454;--sale_label_bg: #ef6454;--hot_label_color: #ffffff;--hot_label_border: #ffbb49;--hot_label_bg: #ffbb49">
                        <div class="vertical-menu p-relative sticky_effect vertical-menu__style_3 zi-1" style="width: 330px!important;">
                                <div class="categories-title d-flex flex-wrap flex-jc-between categories-title__style_3 w-100" style="--title_categories_color: #202020;--icon_title_categories_color: #fd6506;--title_categories_bg: rgba(0,0,0,0);--title_categories_font_size: 16px;--title_categories_line_height:24px;--view_all_font_size: 12px;--view_all_link_color: #848484;--title_categories_border_color: #dedede">
                                    <div class="categories-title__button p-relative pr-5">
                                        <span class="icon-grid d-inline-block">
                                            <svg viewBox="0 0 26 26" class="icon icon-grid w-h-17" id="icon-grid" style="color: #000000!important;">
                                                <g><circle cx="13" cy="13" width="5" height="5" r="4"></circle><rect x="12" y="12" width="2" height="2" fill="#000"></rect>
                                                <circle cx="4" cy="4" width="5" height="5" r="4"></circle><rect x="3" y="3" width="2" height="2" fill="#000"></rect>
                                                <circle cx="13" cy="22" width="5" height="5" r="4"></circle><rect x="12" y="21" width="2" height="2" fill="#000"></rect>
                                                <circle cx="4" cy="13" width="5" height="5" r="4"></circle><rect x="3" y="12" width="2" height="2" fill="#000"></rect>
                                                <circle cx="4" cy="22" width="5" height="5" r="4"></circle><rect x="3" y="21" width="2" height="2" fill="#000"></rect>
                                                <circle cx="22" cy="4" width="5" height="5" r="4"></circle><rect x="21" y="3" width="2" height="2" fill="#000"></rect>
                                                <circle cx="13" cy="4" width="5" height="5" r="4"></circle><rect x="12" y="3" width="2" height="2" fill="#000"></rect>
                                                <circle cx="22" cy="13" width="5" height="5" r="4"></circle><rect x="21" y="12" width="2" height="2" fill="#000"></rect>
                                                <circle cx="22" cy="22" width="5" height="5" r="4"></circle><rect x="21" y="21" width="2" height="2" fill="#000"></rect>
                                                </g></svg>
                                            </span>
                                                <h3 class="title d-inline-block m-zero" style="text-transform:uppercase!important;">Categories</h3>
                                            <!--<span class="icon icon--dropdown d-inline-block p-relative"></span>-->
                                        </div>
                                    </div>
                                    <?php /*
                                <nav class="header__menu-vertical p-absolute left-0 right-0 top-100 opacity-1" role="navigation" style="--vertical_menu_bg: #ffffff;--vertical_menu_lv1_color:#000000;--vertical_menu_lv1_color_hover:#000000;--vertical_menu_lv1_hover_bg:#ffffff">
                                    <ul class="list-menu p-relative" role="list">
                                        <?php $cats=\DB::table('cats')->where('parent','0')->get();?>
                                            @foreach($cats as $cat)
                                            <?php $subcats=\DB::table('cats')->where('parent',$cat->id)->get();?>
                                                <li class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--">
                                                    <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect" 
                                                    href="{{URL::to('/')}}/shop/cat/{{$cat->id}}">
                                                        <!--<span class="icon-img">-->
                                                        <!--<img src="{{URL::to('/')}}/public/template/electronics.png" alt="Electronics" onerror="style.display = &#39;none&#39;;">-->
                                                        <!--</span>-->
                                                                                <span class="text header__active-menu-item p-relative"> {{$cat->name}}</span>
                                                                                <span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a><div class="menu-dropdown custom-scrollbar megamenu_style_1 p-absolute top-auto left-0 w-100 zi-10 o-x-hidden o-y-auto text-left opacity-0">
                                                                                    <div class="container" style="--container_size: px">
                                                                                        <div class="menu-dropdown__wrapper d-flex flex-wrap flex-align-stretch flex-jc-between">
                                                                                            <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span>Electronics</div>
                                                                                            <div class="site-nav navigation_all_mobile d-none">
                                                                                                <div class="site-nav-list "><a href="https://new-ella-demo.myshopify.com/" class="site-nav-title menu-lv-2"><span>Go to Electronics</span></a></div>
                                                                                            </div>
                                                                                            <div class="menu-dropdown__column menu-dropdown__column-3 w-auto " data-masonry="{ &quot;itemSelector&quot;: &quot;[data-gridItem]&quot;, &quot;columnWidth&quot;: &quot;.grid-sizer&quot; }" style="position: relative; height: 488px;">
                                                                                                <div class="grid-sizer"></div>
                                                                                                @if(count($subcats)>0)
                                                                                                    <div class="site-nav dropdown menu-lv-blink" data-griditem="" style="position: absolute; left: 0px; top: 0px;">
                                                                                                        <div class="site-nav-list">
                                                                                                            <!--<a href="https://new-ella-demo.myshopify.com/" class="site-nav-title menu_mobile_link_2" aria-current="page">-->
                                                                                                                <!--<span class="text site-nav-active">Harum Quidem</span><span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span>
                                                                                                                </a>-->
                                                                                                                <!--<div class="site-nav-sub">-->
                                                                                                                    <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Harum Quidem</div>
                                                                                                                    <ul class="list-unstyled">
                                                                                                                        <!--<li class="site-nav-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link-underline link--text focus-inset link-effect caption-large"><span class="text p-relative">Go to Harum Quidem</span></a></li>-->
                                                                                                                            @foreach($subcats as $subcat)
                                                                                                                            <li class="site-nav-item menu-lv-3 text-left">
                                                                                                                                <a href="{{URL::to('/')}}/shop/cat/{{$subcat->id}}" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page">
                                                                                                                                    <span class="text site-nav-active p-relative">- {{$subcat->name}}</span>
                                                                                                                                </a>
                                                                                                                            </li>
                                                                                                                            @endforeach
                                                                                                                            <!--<li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Suitó</span></a></li>-->
                                                                                                                            <!--<li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Milancélos</span></a></li>-->
                                                                                                                            <!--<li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Blazéro</span></a></li>-->
                                                                                                                            <!--<li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Glamos</span></a></li>-->
                                                                                                                            <!--<li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Metropolis</span></a></li>-->
                                                                                                                    </ul>
                                                                                                                </div></div>
                                                                                                    </div>
                                                                                                    
                                                                                                    <!--<div class="site-nav dropdown menu-lv-blink" data-griditem="" style="position: absolute; left: 181.025px; top: 0px;">-->
                                                                                                    <!--    <div class="site-nav-list">-->
                                                                                                    <!--        <a href="https://new-ella-demo.myshopify.com/" class="site-nav-title menu_mobile_link_2" aria-current="page">-->
                                                                                                    <!--            <span class="text site-nav-active">Possimus</span><span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a><div class="site-nav-sub">-->
                                                                                                    <!--                <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Possimus</div>-->
                                                                                                    <!--                <ul class="list-unstyled">-->
                                                                                                    <!--                    <li class="site-nav-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link-underline link--text focus-inset link-effect caption-large"><span class="text p-relative">Go to Possimus</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Cosmopolis</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Suitó</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Milancélos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Blazéro</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Glamos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Metropolis</span></a></li></ul>-->
                                                                                                    <!--            </div></div>-->
                                                                                                    <!--</div>-->
                                                                                                    <!--<div class="site-nav dropdown menu-lv-blink" data-griditem="" style="position: absolute; left: 362.05px; top: 0px;">-->
                                                                                                    <!--    <div class="site-nav-list">-->
                                                                                                    <!--        <a href="https://new-ella-demo.myshopify.com/" class="site-nav-title menu_mobile_link_2" aria-current="page">-->
                                                                                                    <!--            <span class="text site-nav-active">Necessitatibus</span><span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a><div class="site-nav-sub">-->
                                                                                                    <!--                <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Necessitatibus</div>-->
                                                                                                    <!--                <ul class="list-unstyled">-->
                                                                                                    <!--                    <li class="site-nav-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link-underline link--text focus-inset link-effect caption-large"><span class="text p-relative">Go to Necessitatibus</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Cosmopolis</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Suitó</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Milancélos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Blazéro</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Glamos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Metropolis</span></a></li></ul>-->
                                                                                                    <!--            </div></div>-->
                                                                                                    <!--</div>-->
                                                                                                    <!--<div class="site-nav dropdown menu-lv-blink" data-griditem="" style="position: absolute; left: 0px; top: 244px;">-->
                                                                                                    <!--    <div class="site-nav-list">-->
                                                                                                    <!--        <a href="https://new-ella-demo.myshopify.com/" class="site-nav-title menu_mobile_link_2" aria-current="page">-->
                                                                                                    <!--            <span class="text site-nav-active">Nullam Eleifend</span><span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a><div class="site-nav-sub">-->
                                                                                                    <!--                <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Nullam Eleifend</div>-->
                                                                                                    <!--                <ul class="list-unstyled">-->
                                                                                                    <!--                    <li class="site-nav-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link-underline link--text focus-inset link-effect caption-large"><span class="text p-relative">Go to Nullam Eleifend</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Cosmopolis</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Suitó</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Milancélos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Blazéro</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Glamos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Metropolis</span></a></li></ul>-->
                                                                                                    <!--            </div></div>-->
                                                                                                    <!--</div>-->
                                                                                                    <!--<div class="site-nav dropdown menu-lv-blink" data-griditem="" style="position: absolute; left: 181.025px; top: 244px;">-->
                                                                                                    <!--    <div class="site-nav-list">-->
                                                                                                    <!--        <a href="https://new-ella-demo.myshopify.com/" class="site-nav-title menu_mobile_link_2" aria-current="page">-->
                                                                                                    <!--            <span class="text site-nav-active">Pharetra</span><span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a><div class="site-nav-sub">-->
                                                                                                    <!--                <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Pharetra</div>-->
                                                                                                    <!--                <ul class="list-unstyled">-->
                                                                                                    <!--                    <li class="site-nav-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link-underline link--text focus-inset link-effect caption-large"><span class="text p-relative">Go to Pharetra</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Cosmopolis</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Suitó</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Milancélos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Blazéro</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Glamos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Metropolis</span></a></li></ul>-->
                                                                                                    <!--            </div></div>-->
                                                                                                    <!--</div>-->
                                                                                                    <!--<div class="site-nav dropdown menu-lv-blink" data-griditem="" style="position: absolute; left: 362.05px; top: 244px;">-->
                                                                                                    <!--    <div class="site-nav-list">-->
                                                                                                    <!--        <a href="https://new-ella-demo.myshopify.com/" class="site-nav-title menu_mobile_link_2" aria-current="page">-->
                                                                                                    <!--            <span class="text site-nav-active">Suspendisse</span><span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a><div class="site-nav-sub">-->
                                                                                                    <!--                <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Suspendisse</div>-->
                                                                                                    <!--                <ul class="list-unstyled">-->
                                                                                                    <!--                    <li class="site-nav-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link-underline link--text focus-inset link-effect caption-large"><span class="text p-relative">Go to Suspendisse</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Cosmopolis</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Suitó</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Milancélos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Blazéro</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Glamos</span></a></li>-->
                                                                                                    <!--                        <li class="site-nav-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="site-nav-link m-zero link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text site-nav-active p-relative">Metropolis</span></a></li></ul>-->
                                                                                                    <!--            </div></div>-->
                                                                                                    <!--</div></div>-->
                                                                                                    <!--Featured Products in menu-->
                                                                                                    <div class="menu-dropdown__banner clearfix ">
                                                                                                        <div class="site-nav-banner d-flex ft-0 ls-0 flex-jc-end"><div class="menu-dropdown__product col-left">
                                                                                                                    <h3 class="menu-dropdown__block--title text-center p-relative"><span class="text d-inline-block ver-alg-top w-auto p-zero p-relative zi-2">Featured Products</span></h3>
                                                                                                                    <div class="menu-dropdown__block--content">
                                                                                                                        <div class="site-nav-product">
                                                                            <div class="product-item enable_custom_layout_card" data-product-id="6679624646746" data-json-product="{&quot;id&quot;:6679624646746,&quot;title&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale&quot;,&quot;handle&quot;:&quot;lementum-de-cras-hamo-praneu-homuir&quot;,&quot;description&quot;:&quot;\u003cp class=\&quot;tab-des\&quot;\u003eNam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla in mi vel arcu convallis molestie et eget nulla. Donec laoreet daugue sit amet ornare rhoncus elit nisi luctus.\u003c\/p\u003e\n\u003cdiv class=\&quot;description-sample-container\&quot;\u003e\n    \u003cdiv class=\&quot;halo-block halo-banner image-banner style_bg--none is-load\&quot; id=\&quot;halo-image-banner-description\&quot;\u003e\n        \u003cdiv class=\&quot;container-full\&quot;\u003e\n            \u003cdiv class=\&quot;halo-block-content\&quot;\u003e\n                \u003cdiv class=\&quot;halo-banner-wrapper\&quot;\u003e\n                    \u003cdiv class=\&quot;item item-banner\&quot;\u003e\n                        \u003cdiv class=\&quot;flex-box__banner\&quot;\u003e\n                            \u003cdiv class=\&quot;banner-item\&quot;\u003e\n                                \u003cdiv class=\&quot;img-box img-box--mobile\&quot;\u003e\n                                    \u003ca class=\&quot;image-adapt image-zoom\&quot; href=\&quot;\&quot;\u003e\n                                        \u003cimg role=\&quot;presentation\&quot; alt=\&quot;\&quot; src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0081\/3305\/0458\/files\/blog1.jpg?v=1658999226\&quot; class=\&quot;zoomImg\&quot; title=\&quot;Dinterdum pretium condimento example 1\&quot;\u003e\n                                        \u003cspan class=\&quot;data-lazy-loading\&quot;\u003e\u003c\/span\u003e\n                                    \u003c\/a\u003e\n                                \u003c\/div\u003e\n                            \u003c\/div\u003e\n                            \u003cdiv class=\&quot;banner-content\&quot;\u003e\n                                \u003cdiv class=\&quot;content-box text-center\&quot;\u003e\n                                    \u003cp class=\&quot;banner-sub-title\&quot;\u003e\n                                        \u003cspan\u003eNew Collection\u003c\/span\u003e\n                                    \u003c\/p\u003e\n                                    \u003ch4 class=\&quot;banner-heading\&quot;\u003e\n                                        #METROPOLIS\n                                    \u003c\/h4\u003e\n                                    \u003cspan class=\&quot;banner-text\&quot;\u003e\n                                        Nullam daliquet vestibulum augue non varius cras de cosmopolis congue melito duis tristique.\n                                    \u003c\/span\u003e\n                                    \u003ca href=\&quot;#\&quot; class=\&quot;banner-button button\&quot;\u003e\n                                        \u003cspan\u003eShop The Look\u003c\/span\u003e\n                                    \u003c\/a\u003e\n                                \u003c\/div\u003e\n                            \u003c\/div\u003e\n                        \u003c\/div\u003e\n                    \u003c\/div\u003e\n                    \u003cdiv class=\&quot;item item-banner\&quot;\u003e\n                        \u003cdiv class=\&quot;flex-box__banner row-reverse\&quot;\u003e\n                            \u003cdiv class=\&quot;banner-item\&quot;\u003e\n                                \u003cdiv class=\&quot;img-box img-box--mobile\&quot;\u003e\n                                    \u003ca class=\&quot;image-adapt image-zoom\&quot; href=\&quot;\&quot;\u003e\n                                        \u003cimg role=\&quot;presentation\&quot; alt=\&quot;\&quot; src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0081\/3305\/0458\/files\/blog2.jpg?v=1658999226\&quot; class=\&quot;zoomImg\&quot; title=\&quot;Dinterdum pretium condimento example 1\&quot;\u003e\n                                        \u003cspan class=\&quot;data-lazy-loading\&quot;\u003e\u003c\/span\u003e\n                                    \u003c\/a\u003e\n                                    \u003cdiv class=\&quot;video-open-popup\&quot; https:=\&quot;\&quot; www.youtube.com=\&quot;\&quot; watch\u003e\n                                        \u003ca data-type=\&quot;youtube\&quot; data-src=\&quot;_9VUPq3SxOc\&quot; aspect_ratio=\&quot;56%\&quot; href=\&quot;javascript:void(0)\&quot; style=\&quot;--color: #fff;--bg_color: rgba(0, 0, 0, 0.4)\&quot;\u003e\n                                            \u003csvg xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot; xmlns:xlink=\&quot;http:\/\/www.w3.org\/1999\/xlink\&quot; viewbox=\&quot;0 0 512 512\&quot; xml:space=\&quot;preserve\&quot; aria-hidden=\&quot;true\&quot; focusable=\&quot;false\&quot; role=\&quot;presentation\&quot; class=\&quot;icon icon-video\&quot;\u003e\n                                                \u003cpath d=\&quot;M256,20C125.872,20,20,125.872,20,256s105.872,236,236,236s236-105.872,236-236S386.128,20,256,20z   M156.64,387.712V124.288l246.72,131.72L156.64,387.712z\&quot;\u003e\u003c\/path\u003e\n                                                \u003cpath fill=\&quot;#302f2f\&quot; d=\&quot;M512,256C512,114.616,397.384,0,256,0S0,114.616,0,256s114.616,256,256,256S512,397.384,512,256z   M256,492C125.872,492,20,386.128,20,256S125.872,20,256,20s236,105.872,236,236S386.128,492,256,492z\&quot;\u003e\u003c\/path\u003e\n                                                \u003cpolygon fill=\&quot;#302f2f\&quot; points=\&quot;156.64,387.712 403.36,256.008 156.64,124.288 \&quot;\u003e\u003c\/polygon\u003e\n                                            \u003c\/svg\u003e\n                                        \u003c\/a\u003e\n                                    \u003c\/div\u003e\n                                \u003c\/div\u003e\n                            \u003c\/div\u003e\n                            \u003cdiv class=\&quot;banner-content\&quot;\u003e\n                                \u003cdiv class=\&quot;content-box text-center\&quot;\u003e\n                                    \u003cp class=\&quot;banner-sub-title\&quot;\u003e\n                                        \u003cspan\u003eNew Collection\u003c\/span\u003e\n                                    \u003c\/p\u003e\n                                    \u003ch4 class=\&quot;banner-heading\&quot;\u003e\n                                        #Milance\n                                    \u003c\/h4\u003e\n                                    \u003cspan class=\&quot;banner-text\&quot;\u003e\n                                        Nullam daliquet vestibulum augue non varius cras de cosmopolis congue melito duis tristique.\n                                    \u003c\/span\u003e\n                                    \u003ca href=\&quot;#\&quot; class=\&quot;banner-button button\&quot;\u003e\n                                        \u003cspan\u003eShop The Look\u003c\/span\u003e\n                                    \u003c\/a\u003e\n                                \u003c\/div\u003e\n                            \u003c\/div\u003e\n                        \u003c\/div\u003e\n                    \u003c\/div\u003e\n                \u003c\/div\u003e\n            \u003c\/div\u003e\n        \u003c\/div\u003e\n    \u003c\/div\u003e\n    \u003cdiv class=\&quot;sample-lists\&quot;\u003e\n        \u003cdiv class=\&quot;item\&quot;\u003e\n            \u003ch4\u003eSample Unordered List\u003c\/h4\u003e\n            \u003cul\u003e\n                \u003cli\u003eComodous in tempor ullamcorper miaculis.\u003c\/li\u003e\n                \u003cli\u003ePellentesque vitae neque mollis urna mattis laoreet.\u003c\/li\u003e\n                \u003cli\u003eDivamus sit amet purus justo.\u003c\/li\u003e\n                \u003cli\u003eProin molestie egestas orci ac suscipit risus posuere.\u003c\/li\u003e\n            \u003c\/ul\u003e\n        \u003c\/div\u003e\n        \u003cdiv class=\&quot;item\&quot;\u003e\n            \u003ch4\u003eSample Ordered List\u003c\/h4\u003e\n            \u003col\u003e\n                \u003cli\u003eComodous in tempor ullamcorper miaculis.\u003c\/li\u003e\n                \u003cli\u003ePellentesque vitae neque mollis urna mattis laoreet.\u003c\/li\u003e\n                \u003cli\u003eDivamus sit amet purus justo.\u003c\/li\u003e\n                \u003cli\u003eProin molestie egestas orci ac suscipit risus posuere loremous.\u003c\/li\u003e\n            \u003c\/ol\u003e\n        \u003c\/div\u003e\n    \u003c\/div\u003e\n    \u003cblockquote class=\&quot;quote\&quot;\u003e\n        \u003ch4\u003eSample Block Quote\u003c\/h4\u003e\n        \u003cp\u003ePraesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis est. Cras felis nunc commodo eu convallis vitae interdum non nisl. Maecenas ac est sit amet augue pharetra convallis, nec danos dui vestibulum sit amet auctor ipsum.\u003c\/p\u003e\n    \u003c\/blockquote\u003e\n    \u003cdiv class=\&quot;sample-text-block\&quot;\u003e\n        \u003ch4\u003eSample Paragraph Text\u003c\/h4\u003e\n        \u003cp\u003ePraesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis est. Cras felis nunc commodo eu convallis vitae interdum non nisl. Maecenas ac est sit amet augue pharetra convallis nec danos dui. Cras suscipit quam et turpis eleifend vitae malesuada magna congue. Damus id ullamcorper neque. Sed vitae mi a mi pretium aliquet ac sed elitos. Pellentesque nulla eros accumsan quis justo at tincidunt lobortis denimes, suspendisse vestibulum lectus in lectus volutpate.\u003c\/p\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e&quot;,&quot;published_at&quot;:&quot;2021-12-24T03:22:12-05:00&quot;,&quot;created_at&quot;:&quot;2021-12-24T03:22:15-05:00&quot;,&quot;vendor&quot;:&quot;Ella - Halothemes&quot;,&quot;type&quot;:&quot;&quot;,&quot;tags&quot;:[&quot;Black&quot;,&quot;Classic&quot;,&quot;Coco Lee&quot;,&quot;Cosmopolis&quot;,&quot;Dincidunteros&quot;,&quot;Flash&quot;,&quot;gray&quot;,&quot;L&quot;,&quot;Less than $100&quot;,&quot;M&quot;,&quot;Mango&quot;,&quot;Mobile&quot;,&quot;S&quot;,&quot;Solutmades&quot;,&quot;Tomorrow&quot;,&quot;white&quot;,&quot;XL&quot;,&quot;XS&quot;],&quot;price&quot;:4900,&quot;price_min&quot;:4900,&quot;price_max&quot;:4900,&quot;available&quot;:true,&quot;price_varies&quot;:false,&quot;compare_at_price&quot;:null,&quot;compare_at_price_min&quot;:0,&quot;compare_at_price_max&quot;:0,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:39724521783386,&quot;title&quot;:&quot;XS \/ Black&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856384020570,&quot;product_id&quot;:6679624646746,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:22:16-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:22:16-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-1.jpg?v=1640334136&quot;,&quot;variant_ids&quot;:[39724521783386]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - XS \/ Black&quot;,&quot;public_title&quot;:&quot;XS \/ Black&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108912939098,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-1.jpg?v=1640334136&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724521816154,&quot;title&quot;:&quot;XS \/ Beige&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856384053338,&quot;product_id&quot;:6679624646746,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:22:16-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:22:16-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-2.jpg?v=1640334136&quot;,&quot;variant_ids&quot;:[39724521816154]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - XS \/ Beige&quot;,&quot;public_title&quot;:&quot;XS \/ Beige&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108912971866,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-2.jpg?v=1640334136&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724521848922,&quot;title&quot;:&quot;XS \/ Slategray&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856384086106,&quot;product_id&quot;:6679624646746,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:22:16-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:22:16-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-3.jpg?v=1640334136&quot;,&quot;variant_ids&quot;:[39724521848922]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - XS \/ Slategray&quot;,&quot;public_title&quot;:&quot;XS \/ Slategray&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108913004634,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-3.jpg?v=1640334136&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724521881690,&quot;title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856384118874,&quot;product_id&quot;:6679624646746,&quot;position&quot;:4,&quot;created_at&quot;:&quot;2021-12-24T03:22:16-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:22:16-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-4.jpg?v=1640334136&quot;,&quot;variant_ids&quot;:[39724521881690]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - XS \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108913037402,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-4.jpg?v=1640334136&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724521914458,&quot;title&quot;:&quot;S \/ Black&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - S \/ Black&quot;,&quot;public_title&quot;:&quot;S \/ Black&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724521947226,&quot;title&quot;:&quot;S \/ Beige&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - S \/ Beige&quot;,&quot;public_title&quot;:&quot;S \/ Beige&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724521979994,&quot;title&quot;:&quot;S \/ Slategray&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - S \/ Slategray&quot;,&quot;public_title&quot;:&quot;S \/ Slategray&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522012762,&quot;title&quot;:&quot;S \/ Sandybrown&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - S \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;S \/ Sandybrown&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522045530,&quot;title&quot;:&quot;M \/ Black&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - M \/ Black&quot;,&quot;public_title&quot;:&quot;M \/ Black&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522078298,&quot;title&quot;:&quot;M \/ Beige&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - M \/ Beige&quot;,&quot;public_title&quot;:&quot;M \/ Beige&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522111066,&quot;title&quot;:&quot;M \/ Slategray&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - M \/ Slategray&quot;,&quot;public_title&quot;:&quot;M \/ Slategray&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522143834,&quot;title&quot;:&quot;M \/ Sandybrown&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - M \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;M \/ Sandybrown&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522176602,&quot;title&quot;:&quot;L \/ Black&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - L \/ Black&quot;,&quot;public_title&quot;:&quot;L \/ Black&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522209370,&quot;title&quot;:&quot;L \/ Beige&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - L \/ Beige&quot;,&quot;public_title&quot;:&quot;L \/ Beige&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522242138,&quot;title&quot;:&quot;L \/ Slategray&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - L \/ Slategray&quot;,&quot;public_title&quot;:&quot;L \/ Slategray&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522274906,&quot;title&quot;:&quot;L \/ Sandybrown&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - L \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;L \/ Sandybrown&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522307674,&quot;title&quot;:&quot;XL \/ Black&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - XL \/ Black&quot;,&quot;public_title&quot;:&quot;XL \/ Black&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522340442,&quot;title&quot;:&quot;XL \/ Beige&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - XL \/ Beige&quot;,&quot;public_title&quot;:&quot;XL \/ Beige&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522373210,&quot;title&quot;:&quot;XL \/ Slategray&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - XL \/ Slategray&quot;,&quot;public_title&quot;:&quot;XL \/ Slategray&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724522405978,&quot;title&quot;:&quot;XL \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58836&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 5) Sample - Computers \u0026 Accessories For Sale - XL \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XL \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-1.jpg?v=1640334136&quot;,&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-2.jpg?v=1640334136&quot;,&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-3.jpg?v=1640334136&quot;,&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-4.jpg?v=1640334136&quot;],&quot;featured_image&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-1.jpg?v=1640334136&quot;,&quot;options&quot;:[&quot;Size&quot;,&quot;Color&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:23108912939098,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-1.jpg?v=1640334136&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-1.jpg?v=1640334136&quot;,&quot;width&quot;:870},{&quot;alt&quot;:null,&quot;id&quot;:23108912971866,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-2.jpg?v=1640334136&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-2.jpg?v=1640334136&quot;,&quot;width&quot;:870},{&quot;alt&quot;:null,&quot;id&quot;:23108913004634,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-3.jpg?v=1640334136&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-3.jpg?v=1640334136&quot;,&quot;width&quot;:870},{&quot;alt&quot;:null,&quot;id&quot;:23108913037402,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-4.jpg?v=1640334136&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-3-4.jpg?v=1640334136&quot;,&quot;width&quot;:870}],&quot;requires_selling_plan&quot;:false,&quot;selling_plan_groups&quot;:[],&quot;content&quot;:&quot;\u003cp class=\&quot;tab-des\&quot;\u003eNam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla in mi vel arcu convallis molestie et eget nulla. Donec laoreet daugue sit amet ornare rhoncus elit nisi luctus.\u003c\/p\u003e\n\u003cdiv class=\&quot;description-sample-container\&quot;\u003e\n    \u003cdiv class=\&quot;halo-block halo-banner image-banner style_bg--none is-load\&quot; id=\&quot;halo-image-banner-description\&quot;\u003e\n        \u003cdiv class=\&quot;container-full\&quot;\u003e\n            \u003cdiv class=\&quot;halo-block-content\&quot;\u003e\n                \u003cdiv class=\&quot;halo-banner-wrapper\&quot;\u003e\n                    \u003cdiv class=\&quot;item item-banner\&quot;\u003e\n                        \u003cdiv class=\&quot;flex-box__banner\&quot;\u003e\n                            \u003cdiv class=\&quot;banner-item\&quot;\u003e\n                                \u003cdiv class=\&quot;img-box img-box--mobile\&quot;\u003e\n                                    \u003ca class=\&quot;image-adapt image-zoom\&quot; href=\&quot;\&quot;\u003e\n                                        \u003cimg role=\&quot;presentation\&quot; alt=\&quot;\&quot; src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0081\/3305\/0458\/files\/blog1.jpg?v=1658999226\&quot; class=\&quot;zoomImg\&quot; title=\&quot;Dinterdum pretium condimento example 1\&quot;\u003e\n                                        \u003cspan class=\&quot;data-lazy-loading\&quot;\u003e\u003c\/span\u003e\n                                    \u003c\/a\u003e\n                                \u003c\/div\u003e\n                            \u003c\/div\u003e\n                            \u003cdiv class=\&quot;banner-content\&quot;\u003e\n                                \u003cdiv class=\&quot;content-box text-center\&quot;\u003e\n                                    \u003cp class=\&quot;banner-sub-title\&quot;\u003e\n                                        \u003cspan\u003eNew Collection\u003c\/span\u003e\n                                    \u003c\/p\u003e\n                                    \u003ch4 class=\&quot;banner-heading\&quot;\u003e\n                                        #METROPOLIS\n                                    \u003c\/h4\u003e\n                                    \u003cspan class=\&quot;banner-text\&quot;\u003e\n                                        Nullam daliquet vestibulum augue non varius cras de cosmopolis congue melito duis tristique.\n                                    \u003c\/span\u003e\n                                    \u003ca href=\&quot;#\&quot; class=\&quot;banner-button button\&quot;\u003e\n                                        \u003cspan\u003eShop The Look\u003c\/span\u003e\n                                    \u003c\/a\u003e\n                                \u003c\/div\u003e\n                            \u003c\/div\u003e\n                        \u003c\/div\u003e\n                    \u003c\/div\u003e\n                    \u003cdiv class=\&quot;item item-banner\&quot;\u003e\n                        \u003cdiv class=\&quot;flex-box__banner row-reverse\&quot;\u003e\n                            \u003cdiv class=\&quot;banner-item\&quot;\u003e\n                                \u003cdiv class=\&quot;img-box img-box--mobile\&quot;\u003e\n                                    \u003ca class=\&quot;image-adapt image-zoom\&quot; href=\&quot;\&quot;\u003e\n                                        \u003cimg role=\&quot;presentation\&quot; alt=\&quot;\&quot; src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0081\/3305\/0458\/files\/blog2.jpg?v=1658999226\&quot; class=\&quot;zoomImg\&quot; title=\&quot;Dinterdum pretium condimento example 1\&quot;\u003e\n                                        \u003cspan class=\&quot;data-lazy-loading\&quot;\u003e\u003c\/span\u003e\n                                    \u003c\/a\u003e\n                                    \u003cdiv class=\&quot;video-open-popup\&quot; https:=\&quot;\&quot; www.youtube.com=\&quot;\&quot; watch\u003e\n                                        \u003ca data-type=\&quot;youtube\&quot; data-src=\&quot;_9VUPq3SxOc\&quot; aspect_ratio=\&quot;56%\&quot; href=\&quot;javascript:void(0)\&quot; style=\&quot;--color: #fff;--bg_color: rgba(0, 0, 0, 0.4)\&quot;\u003e\n                                            \u003csvg xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot; xmlns:xlink=\&quot;http:\/\/www.w3.org\/1999\/xlink\&quot; viewbox=\&quot;0 0 512 512\&quot; xml:space=\&quot;preserve\&quot; aria-hidden=\&quot;true\&quot; focusable=\&quot;false\&quot; role=\&quot;presentation\&quot; class=\&quot;icon icon-video\&quot;\u003e\n                                                \u003cpath d=\&quot;M256,20C125.872,20,20,125.872,20,256s105.872,236,236,236s236-105.872,236-236S386.128,20,256,20z   M156.64,387.712V124.288l246.72,131.72L156.64,387.712z\&quot;\u003e\u003c\/path\u003e\n                                                \u003cpath fill=\&quot;#302f2f\&quot; d=\&quot;M512,256C512,114.616,397.384,0,256,0S0,114.616,0,256s114.616,256,256,256S512,397.384,512,256z   M256,492C125.872,492,20,386.128,20,256S125.872,20,256,20s236,105.872,236,236S386.128,492,256,492z\&quot;\u003e\u003c\/path\u003e\n                                                \u003cpolygon fill=\&quot;#302f2f\&quot; points=\&quot;156.64,387.712 403.36,256.008 156.64,124.288 \&quot;\u003e\u003c\/polygon\u003e\n                                            \u003c\/svg\u003e\n                                        \u003c\/a\u003e\n                                    \u003c\/div\u003e\n                                \u003c\/div\u003e\n                            \u003c\/div\u003e\n                            \u003cdiv class=\&quot;banner-content\&quot;\u003e\n                                \u003cdiv class=\&quot;content-box text-center\&quot;\u003e\n                                    \u003cp class=\&quot;banner-sub-title\&quot;\u003e\n                                        \u003cspan\u003eNew Collection\u003c\/span\u003e\n                                    \u003c\/p\u003e\n                                    \u003ch4 class=\&quot;banner-heading\&quot;\u003e\n                                        #Milance\n                                    \u003c\/h4\u003e\n                                    \u003cspan class=\&quot;banner-text\&quot;\u003e\n                                        Nullam daliquet vestibulum augue non varius cras de cosmopolis congue melito duis tristique.\n                                    \u003c\/span\u003e\n                                    \u003ca href=\&quot;#\&quot; class=\&quot;banner-button button\&quot;\u003e\n                                        \u003cspan\u003eShop The Look\u003c\/span\u003e\n                                    \u003c\/a\u003e\n                                \u003c\/div\u003e\n                            \u003c\/div\u003e\n                        \u003c\/div\u003e\n                    \u003c\/div\u003e\n                \u003c\/div\u003e\n            \u003c\/div\u003e\n        \u003c\/div\u003e\n    \u003c\/div\u003e\n    \u003cdiv class=\&quot;sample-lists\&quot;\u003e\n        \u003cdiv class=\&quot;item\&quot;\u003e\n            \u003ch4\u003eSample Unordered List\u003c\/h4\u003e\n            \u003cul\u003e\n                \u003cli\u003eComodous in tempor ullamcorper miaculis.\u003c\/li\u003e\n                \u003cli\u003ePellentesque vitae neque mollis urna mattis laoreet.\u003c\/li\u003e\n                \u003cli\u003eDivamus sit amet purus justo.\u003c\/li\u003e\n                \u003cli\u003eProin molestie egestas orci ac suscipit risus posuere.\u003c\/li\u003e\n            \u003c\/ul\u003e\n        \u003c\/div\u003e\n        \u003cdiv class=\&quot;item\&quot;\u003e\n            \u003ch4\u003eSample Ordered List\u003c\/h4\u003e\n            \u003col\u003e\n                \u003cli\u003eComodous in tempor ullamcorper miaculis.\u003c\/li\u003e\n                \u003cli\u003ePellentesque vitae neque mollis urna mattis laoreet.\u003c\/li\u003e\n                \u003cli\u003eDivamus sit amet purus justo.\u003c\/li\u003e\n                \u003cli\u003eProin molestie egestas orci ac suscipit risus posuere loremous.\u003c\/li\u003e\n            \u003c\/ol\u003e\n        \u003c\/div\u003e\n    \u003c\/div\u003e\n    \u003cblockquote class=\&quot;quote\&quot;\u003e\n        \u003ch4\u003eSample Block Quote\u003c\/h4\u003e\n        \u003cp\u003ePraesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis est. Cras felis nunc commodo eu convallis vitae interdum non nisl. Maecenas ac est sit amet augue pharetra convallis, nec danos dui vestibulum sit amet auctor ipsum.\u003c\/p\u003e\n    \u003c\/blockquote\u003e\n    \u003cdiv class=\&quot;sample-text-block\&quot;\u003e\n        \u003ch4\u003eSample Paragraph Text\u003c\/h4\u003e\n        \u003cp\u003ePraesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis est. Cras felis nunc commodo eu convallis vitae interdum non nisl. Maecenas ac est sit amet augue pharetra convallis nec danos dui. Cras suscipit quam et turpis eleifend vitae malesuada magna congue. Damus id ullamcorper neque. Sed vitae mi a mi pretium aliquet ac sed elitos. Pellentesque nulla eros accumsan quis justo at tincidunt lobortis denimes, suspendisse vestibulum lectus in lectus volutpate.\u003c\/p\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e&quot;}">
                                                                                <div class="card b-zero">
                                                                                    <div class="card-product">
                                                                                        <div class="card-product__wrapper"><a class="card-media card-media-- m-lr-auto media--hover-effect1 adaptive_height animated-loading1" href="https://new-ella-demo.myshopify.com/products/lementum-de-cras-hamo-praneu-homuir?variant=39724521783386"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-3-1_165x.jpg?v=1640334136 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-3-1_360x.jpg?v=1640334136 360w" sizes="(min-width: 1100px) 360px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 5) Sample - Computers &amp; Accessories For Sale" loading="lazy" class="motion-reduce ls-is-cached lazyloaded" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-3-1_165x.jpg?v=1640334136 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-3-1_360x.jpg?v=1640334136 360w"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-3-2_165x.jpg?v=1640334136 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-3-2_360x.jpg?v=1640334136 360w" sizes="(min-width: 1100px) 360px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 5) Sample - Computers &amp; Accessories For Sale" loading="lazy" class="motion-reduce ls-is-cached lazyloaded" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-3-2_165x.jpg?v=1640334136 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-3-2_360x.jpg?v=1640334136 360w"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-information">
                                                                                        <div class="card-information__wrapper text-center"><a class="card-title link-underline card-title-ellipsis card-title-change" href="https://new-ella-demo.myshopify.com/products/lementum-de-cras-hamo-praneu-homuir?variant=39724521783386" data-product-title="(Product 5) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/lementum-de-cras-hamo-praneu-homuir"><span class="text">(Product 5) Sample - Computers &amp; Accessories For Sale<span data-change-title=""> - Black</span></span></a>
                                                                                            <div class="card-price"><div class="price d-block">
                                                                                <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$49.00</span></span></dd>
                                                                                    </div>
                                                                                    <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money" data-currency-usd="$49.00">$49.00</span></span></dd></div>
                                                                                    <small class="unit-price caption hidden">
                                                                                        <dt class="visually-hidden">Unit price</dt>
                                                                                        <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
                                                                                    </small>
                                                                                </dl>
                                                                            </div>
                                                                            </div><div class="card-swatch text-left clearfix" id="product-swatch-6679624646746">
                                                                                    <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label is-active" data-value="black" data-variant-id="39724521783386" title="Black" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-3-1_800x.jpg?v=1640334136"><span class="pattern" style="background-color: black; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span>black</label><span class="tooltip">Black
                                                                            </span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="beige" data-variant-id="39724521816154" title="Beige" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-3-2_800x.jpg?v=1640334136"><span class="pattern" style="background-color: beige; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123050)"></span>beige</label><span class="tooltip">Beige
                                                                            </span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="slategray" data-variant-id="39724521848922" title="Slategray" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-3-3_800x.jpg?v=1640334136"><span class="pattern" style="background-color: slategray; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span>slategray</label><span class="tooltip">Slategray
                                                                            </span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="sandybrown" data-variant-id="39724521881690" title="Sandybrown" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-3-4_800x.jpg?v=1640334136"><span class="pattern" style="background-color: sandybrown; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span>sandybrown</label><span class="tooltip">Sandybrown
                                                                            </span></div></li></ul>
                                                                                </div></div><div class="card-action text-center p-relative opacity-1">
                                                                                                <form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="-6679624646746-" data-product-id="6679624646746" enctype="multipart/form-data">
                                                                                                    <a class="button button-ATC w-auto d-inline-block minw-auto" href="https://new-ella-demo.myshopify.com/products/lementum-de-cras-hamo-praneu-homuir?variant=39724521783386">Shop Now</a>
                                                                                                </form>
                                                                                            </div></div>
                                                                                </div>
                                                                            </div></div>
                                                                                                                    </div>
                                                                                                                </div><div class="site-nav-banner--item site-nav-banner-item--right d-inline-block ver-alg-top w-100">    
                                                                                                                    <div class="banner d-block">
                                                                                                                        <a role="link" aria-disabled="true" class="image adaptive_height image-zoom w-100 text-center" style="padding-top: 200.85470085470084%" title="new-ella-demo"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/files/home-20-mega-1.jpg?v=1646184258, //new-ella-demo.myshopify.com/cdn/shop/files/home-20-mega-1@2x.jpg?v=1646184258" loading="lazy" alt="new-ella-demo" class=" ls-is-cached lazyloaded" srcset="//new-ella-demo.myshopify.com/cdn/shop/files/home-20-mega-1.jpg?v=1646184258, //new-ella-demo.myshopify.com/cdn/shop/files/home-20-mega-1@2x.jpg?v=1646184258"><span class="data-lazy-loading"></span>
                                                                            </a>
                                                                                                                    </div>
                                                                                                                </div></div>
                                                                                                    <!--Featured Products in menu-->
                                                                                                    @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                            </li>
                                            @endforeach
                                    </ul>
                                </nav>    
                                */ ?>
                            </div>
                            <nav class="header__inline-menu header__inline-menu-ver" data-navigation="" role="navigation">
                                <ul class="list-menu list-menu--inline text-left" role="list" style="width:auto;">
                                    <?php $pages=\DB::table('pages')->where('parent_page','0')->orderBy('sorts','asc')->get();?>
                                    @foreach($pages as $page)
                                    <li class="menu-lv-item menu-lv-1 text-center no-megamenu dropdown">
                                        <a class="menu-lv-1__action  header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect" 
                                        @if($page->links!='')
                                        href="{{$page->links}}"
                                        @else
                                        href="{{URL::to('/')}}/page/{{$page->slug}}"
                                        @endif
                                        >
                                            <span class="text p-relative" style="text-transform:uppercase!important;">{{$page->name}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                    <!--<li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a class="menu-lv-1__action  header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect" href="https://new-ella-demo.myshopify.com/?preview_theme_id="><span class="text header__active-menu-item p-relative">Pages</span>-->
                                    <!--        <span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a>-->
                                    <!--    <ul class="header__submenu list-menu list-menu--disclosure list-menu--disclosure-1 caption-large motion-reduce" role="list">-->
                                    <!--        <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span>Pages</div>-->
                                    <!--        <li class="menu-lv-item menu-lv-2 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/?preview_theme_id=" class="menu-lv-2__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text header__active-menu-item p-relative">Go to Pages</span></a></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left  dropdown  menu-lv-blink"><div class="site-nav-list-dropdown">-->
                                    <!--                        <a class="menu-lv-2__action header__menu-item link link--text list-menu__item focus-inset caption-large menu_mobile_link_2 has-icon link-effect" href="https://new-ella-demo.myshopify.com/pages/about-us-1"><span class="text p-relative">About Us</span>-->
                                    <!--                            <span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a>-->
                                    <!--                        <ul class="header__submenu list-menu--disclosure list-menu--disclosure-2 list-menu motion-reduce">-->
                                    <!--                            <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Pages</div>-->
                                    <!--                            <li class="menu-lv-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/pages/about-us-1" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large"><span class="text">Go to About Us</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/about-us-1" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">About Us 1</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/about-us-2" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">About Us 2</span></a></li></ul>-->
                                    <!--                    </div></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left   menu-lv-blink"><a href="https://new-ella-demo.myshopify.com/pages/brands" class="menu-lv-2__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Brands</span></a></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left   menu-lv-blink"><a href="https://new-ella-demo.myshopify.com/pages/bulk-editor" class="menu-lv-2__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Bulk Editor</span></a></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left  dropdown  menu-lv-blink"><div class="site-nav-list-dropdown">-->
                                    <!--                        <a class="menu-lv-2__action header__menu-item link link--text list-menu__item focus-inset caption-large menu_mobile_link_2 has-icon link-effect" href="https://new-ella-demo.myshopify.com/pages/contact-us-1"><span class="text p-relative">Contact Us</span>-->
                                    <!--                            <span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a>-->
                                    <!--                        <ul class="header__submenu list-menu--disclosure list-menu--disclosure-2 list-menu motion-reduce">-->
                                    <!--                            <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Pages</div>-->
                                    <!--                            <li class="menu-lv-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/pages/contact-us-1" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large"><span class="text">Go to Contact Us</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/contact-us-1" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Contact Us 1</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/contact-us-2" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Contact Us 2</span></a></li></ul>-->
                                    <!--                    </div></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left   menu-lv-blink"><a href="https://new-ella-demo.myshopify.com/pages/faqs" class="menu-lv-2__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Faqs</span></a></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left  dropdown  menu-lv-blink"><div class="site-nav-list-dropdown">-->
                                    <!--                        <a class="menu-lv-2__action header__menu-item link link--text list-menu__item focus-inset caption-large menu_mobile_link_2 has-icon link-effect" href="https://new-ella-demo.myshopify.com/"><span class="text list-menu__item--active p-relative">Landing Pages</span>-->
                                    <!--                            <span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a>-->
                                    <!--                        <ul class="header__submenu list-menu--disclosure list-menu--disclosure-2 list-menu motion-reduce">-->
                                    <!--                            <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Pages</div>-->
                                    <!--                            <li class="menu-lv-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large"><span class="text">Go to Landing Pages</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/landing-2/?fts=0&amp;preview_theme_id=123126317146" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Landing Page 1</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/landing-3/?fts=0&amp;preview_theme_id=123126317146" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Landing Page 2</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/landing-page-1/?fts=0&amp;preview_theme_id=123127464026" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Landing Page 3</span></a></li></ul>-->
                                    <!--                    </div></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left  dropdown  menu-lv-blink"><div class="site-nav-list-dropdown">-->
                                    <!--                        <a class="menu-lv-2__action header__menu-item link link--text list-menu__item focus-inset caption-large menu_mobile_link_2 has-icon link-effect" href="https://new-ella-demo.myshopify.com/pages/lookbook"><span class="text p-relative">Lookbook</span>-->
                                    <!--                            <span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a>-->
                                    <!--                        <ul class="header__submenu list-menu--disclosure list-menu--disclosure-2 list-menu motion-reduce">-->
                                    <!--                            <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Pages</div>-->
                                    <!--                            <li class="menu-lv-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/pages/lookbook" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large"><span class="text">Go to Lookbook</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/lookbook" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Lookbook 1</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text list-menu__item--active p-relative">Lookbook 2</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect" aria-current="page"><span class="text list-menu__item--active p-relative">Lookbook 3</span></a></li></ul>-->
                                    <!--                    </div></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left  dropdown  menu-lv-blink"><div class="site-nav-list-dropdown">-->
                                    <!--                        <a class="menu-lv-2__action header__menu-item link link--text list-menu__item focus-inset caption-large menu_mobile_link_2 has-icon link-effect" href="https://new-ella-demo.myshopify.com/pages/portfolio-1"><span class="text p-relative">Portfolio</span>-->
                                    <!--                            <span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a>-->
                                    <!--                        <ul class="header__submenu list-menu--disclosure list-menu--disclosure-2 list-menu motion-reduce">-->
                                    <!--                            <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Pages</div>-->
                                    <!--                            <li class="menu-lv-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/pages/portfolio-1" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large"><span class="text">Go to Portfolio</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/portfolio-1" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Portfolio 1</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/portfolio-2" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Portfolio 2</span></a></li></ul>-->
                                    <!--                    </div></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left  dropdown  menu-lv-blink"><div class="site-nav-list-dropdown">-->
                                    <!--                        <a class="menu-lv-2__action header__menu-item link link--text list-menu__item focus-inset caption-large menu_mobile_link_2 has-icon link-effect" href="https://new-ella-demo.myshopify.com/pages/wish-list"><span class="text p-relative">Wishlist</span>-->
                                    <!--                            <span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span><span class="label new-label">New</span></a>-->
                                    <!--                        <ul class="header__submenu list-menu--disclosure list-menu--disclosure-2 list-menu motion-reduce">-->
                                    <!--                            <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span> Pages</div>-->
                                    <!--                            <li class="menu-lv-item menu-lv-3 text-left navigation_all_mobile d-none"><a href="https://new-ella-demo.myshopify.com/pages/wish-list" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large"><span class="text">Go to Wishlist</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo.myshopify.com/pages/wish-list//?fts=0&amp;preview_theme_id=123127857242" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Wishlist (List View)</span></a></li>-->
                                    <!--                                <li class="menu-lv-item menu-lv-3 text-left"><a href="https://new-ella-demo-11.myshopify.com/pages/wish-list//?fts=0&amp;preview_theme_id=124318384179" class="menu-lv-3__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Wishlist (Grid view)</span></a></li></ul>-->
                                    <!--                    </div></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left   menu-lv-blink"><a href="https://new-ella-demo-11.myshopify.com/pages/find-a-store//?fts=0&amp;preview_theme_id=124318384179" class="menu-lv-2__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Store Locator</span><span class="label hot-label">Hot</span></a></li></ul></li>-->
                                    <!--<li class="menu-lv-item menu-lv-1 text-left no-megamenu"><a href="https://new-ella-demo.myshopify.com/" class="menu-lv-1__action header__menu-item header__menu-item list-menu__item link link--text focus-inset link-effect" aria-current="page"><span class="text header__active-menu-item p-relative">New in</span></a></li>-->
                                    <!--<li class="menu-lv-item menu-lv-1 text-left no-megamenu"><a href="https://new-ella-demo.myshopify.com/" class="menu-lv-1__action header__menu-item header__menu-item list-menu__item link link--text focus-inset link-effect" aria-current="page"><span class="text header__active-menu-item p-relative">Trend</span></a></li>-->
                                    <!--<li class="menu-lv-item menu-lv-1 text-left no-megamenu"><a href="https://new-ella-demo.myshopify.com/collections" class="menu-lv-1__action header__menu-item header__menu-item list-menu__item link link--text focus-inset link-effect"><span class="text p-relative">Collections</span></a></li>-->
                                    <!--<li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown menu-sale"><a class="menu-lv-1__action  header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect" href="https://1.envato.market/dokaB2"><span class="text p-relative">Buy Ella</span>-->
                                    <!--        <span class="icon-dropdown" data-toggle-menu-mb=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span></a>-->
                                    <!--    <ul class="header__submenu list-menu list-menu--disclosure list-menu--disclosure-1 caption-large motion-reduce" role="list">-->
                                    <!--        <div class="nav-title-mobile text-center"><span class="icon-dropdown"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></span>Buy Ella</div>-->
                                    <!--        <li class="menu-lv-item menu-lv-2 text-left navigation_all_mobile d-none"><a href="https://1.envato.market/dokaB2" class="menu-lv-2__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Go to Buy Ella</span></a></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left   menu-lv-blink"><a href="https://halosoft.gitbook.io/ella-documentation/" class="menu-lv-2__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Documentation</span></a></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left   menu-lv-blink"><a href="https://shopify.pxf.io/Jry3Ve" class="menu-lv-2__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Open a Store for FREE</span></a></li>-->
                                    <!--            <li class="menu-lv-item menu-lv-2 text-left   menu-lv-blink"><a href="https://halosoft.ticksy.com/" class="menu-lv-2__action header__menu-item list-menu__item link link--text focus-inset caption-large link-effect"><span class="text p-relative">Get Support</span></a></li></ul></li>-->
                                </ul>
                            </nav></div>
                </div>
            </div><div class="header-icons header-item header-item--side d-flex flex-align-center flex-wrap fs-0 pt-2 pb-5" style="--header_icons_color: #202020;--header_icons_color_hover: #202020;--cart_count_bubble_bg: #fd6506;--cart_count_bubble_color: #ffffff;--cart_count_bubble_font_size:  12px;--text_font_size: 14px;--icon_help_color: #fd6506;--icon_help_border_color: #dedede">
                <div class="header-icons-top d-inline-block"><div class="icons-top-right d-inline-block p-relative zi-1">
                    <!--<div class="help-item d-inline-block sticky_effect help-item-has-border p-relative pr-20">-->
                    <!--            <a role="link" aria-disabled="true">-->
                    <!--                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-headset" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user-headset fa-w-14 fa-3x w-h-18 mr-5"><path fill="currentColor" d="M320 352h-23.1a174.08 174.08 0 0 1-145.8 0H128A128 128 0 0 0 0 480a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32 128 128 0 0 0-128-128zM48 224a16 16 0 0 0 16-16v-16c0-88.22 71.78-160 160-160s160 71.78 160 160v16a80.09 80.09 0 0 1-80 80h-32a32 32 0 0 0-32-32h-32a32 32 0 0 0 0 64h96a112.14 112.14 0 0 0 112-112v-16C416 86.13 329.87 0 224 0S32 86.13 32 192v16a16 16 0 0 0 16 16zm160 0h32a64 64 0 0 1 55.41 32H304a48.05 48.05 0 0 0 48-48v-16a128 128 0 0 0-256 0c0 40.42 19.1 76 48.35 99.47-.06-1.17-.35-2.28-.35-3.47a64.07 64.07 0 0 1 64-64z" class=""></path></svg><span class="d-inline-block">Help</span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                            <div class="header-language_currency language_currency_style_2 d-inline-block show-main-menu">
                                <div class="top-language-currency d-flex flex-align-center sticky_effect enable-currency">
                                    <div class="halo-top-language">
    <!--<div class="btn-group disclosure">-->
        
        
        <!--<button type="button" class="disclosure__button dropdown-toggle dropdown-label localization-form__select localization-selector link link--text caption-large" aria-controls="HeaderLanguageList" aria-describedby="HeaderLanguageLabel" aria-label="en">-->
<!--            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">-->
<!--<circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"></circle>-->
<!--<g>-->
<!--	<path style="fill:#0052B4;" d="M52.92,100.142c-20.109,26.163-35.272,56.318-44.101,89.077h133.178L52.92,100.142z"></path>-->
<!--	<path style="fill:#0052B4;" d="M503.181,189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075,89.076H503.181z"></path>-->
<!--	<path style="fill:#0052B4;" d="M8.819,322.784c8.83,32.758,23.993,62.913,44.101,89.075l89.074-89.075L8.819,322.784L8.819,322.784   z"></path>-->
<!--	<path style="fill:#0052B4;" d="M411.858,52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177L411.858,52.921z"></path>-->
<!--	<path style="fill:#0052B4;" d="M100.142,459.079c26.163,20.109,56.318,35.272,89.076,44.102V370.005L100.142,459.079z"></path>-->
<!--	<path style="fill:#0052B4;" d="M189.217,8.819c-32.758,8.83-62.913,23.993-89.075,44.101l89.075,89.075V8.819z"></path>-->
<!--	<path style="fill:#0052B4;" d="M322.783,503.181c32.758-8.83,62.913-23.993,89.075-44.101l-89.075-89.075V503.181z"></path>-->
<!--	<path style="fill:#0052B4;" d="M370.005,322.784l89.075,89.076c20.108-26.162,35.272-56.318,44.101-89.076H370.005z"></path>-->
<!--</g>-->
<!--<g>-->
<!--	<path style="fill:#D80027;" d="M509.833,222.609h-220.44h-0.001V2.167C278.461,0.744,267.317,0,256,0   c-11.319,0-22.461,0.744-33.391,2.167v220.44v0.001H2.167C0.744,233.539,0,244.683,0,256c0,11.319,0.744,22.461,2.167,33.391   h220.44h0.001v220.442C233.539,511.256,244.681,512,256,512c11.317,0,22.461-0.743,33.391-2.167v-220.44v-0.001h220.442   C511.256,278.461,512,267.319,512,256C512,244.683,511.256,233.539,509.833,222.609z"></path>-->
<!--	<path style="fill:#D80027;" d="M322.783,322.784L322.783,322.784L437.019,437.02c5.254-5.252,10.266-10.743,15.048-16.435   l-97.802-97.802h-31.482V322.784z"></path>-->
<!--	<path style="fill:#D80027;" d="M189.217,322.784h-0.002L74.98,437.019c5.252,5.254,10.743,10.266,16.435,15.048l97.802-97.804   V322.784z"></path>-->
<!--	<path style="fill:#D80027;" d="M189.217,189.219v-0.002L74.981,74.98c-5.254,5.252-10.266,10.743-15.048,16.435l97.803,97.803   H189.217z"></path>-->
<!--	<path style="fill:#D80027;" d="M322.783,189.219L322.783,189.219L437.02,74.981c-5.252-5.254-10.743-10.266-16.435-15.047   l-97.802,97.803V189.219z"></path>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--</svg></span> -->
<!--<span class="text text-language">en</span>-->
<!--<svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 551.13 551.13" height="512" viewBox="0 0 551.13 551.13" width="512"><path d="m275.565 361.679-223.897-223.896h-51.668l275.565 275.565 275.565-275.565h-51.668z"></path></svg></button>-->
<!--    </div>-->
<!--    <div class="dropdown-language"><div class="halo-language">-->
<!--  <link rel="stylesheet" href="{{URL::to('/')}}/public/template/disclosure.css" media="all" onload="this.media=&#39;all&#39;">-->
<!--  <noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/disclosure.css?v=39954821399009248211658317978" rel="stylesheet" type="text/css" media="all" /></noscript><noscript><form method="post" action="/localization" id="HeaderLanguageFormNoScript" accept-charset="UTF-8" class="localization-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/?fts=0" /><div class="localization-form__select">-->
<!--          <h2 class="visually-hidden" id="HeaderLanguageLabelNoScript">Language</h2>-->
<!--          <select class="localization-selector link" name="locale_code" aria-labelledby="HeaderLanguageLabelNoScript"><option value="en" lang="en" selected>-->
<!--                  English-->
<!--              </option>-->
              <!--<option value="de" lang="de">-->
              <!--    Deutsch-->
              <!--</option>-->
<!--              </select>-->
<!--      </div>-->
<!--      <button class="button button--tertiary">Update language</button></form></noscript>-->
<!--  <localization-form><form method="post" action="https://new-ella-demo.myshopify.com/localization" id="HeaderLanguageForm" accept-charset="UTF-8" class="localization-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization"><input type="hidden" name="utf8" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden" name="return_to" value="/?fts=0"><div class="no-js-hidden">-->
<!--          <div class="disclosure">-->
<!--              <p class="title text-left" id="HeaderLanguageLabel">Language</p>-->
<!--              <ul id="HeaderLanguageList" role="list" class="disclosure__list list-unstyled custom-scrollbar d-flex flex-align-center flex-wrap">-->
<!--<li class="disclosure__item" tabindex="-1"><a class="link link--text disclosure__link d-flex flex-align-center disclosure__link--active focus-inset" href="https://new-ella-demo.myshopify.com/?fts=0#" hreflang="en" lang="en" aria-current="true" data-value="en"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">-->
<!--<circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"></circle>-->
<!--<g>-->
<!--	<path style="fill:#0052B4;" d="M52.92,100.142c-20.109,26.163-35.272,56.318-44.101,89.077h133.178L52.92,100.142z"></path>-->
<!--	<path style="fill:#0052B4;" d="M503.181,189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075,89.076H503.181z"></path>-->
<!--	<path style="fill:#0052B4;" d="M8.819,322.784c8.83,32.758,23.993,62.913,44.101,89.075l89.074-89.075L8.819,322.784L8.819,322.784   z"></path>-->
<!--	<path style="fill:#0052B4;" d="M411.858,52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177L411.858,52.921z"></path>-->
<!--	<path style="fill:#0052B4;" d="M100.142,459.079c26.163,20.109,56.318,35.272,89.076,44.102V370.005L100.142,459.079z"></path>-->
<!--	<path style="fill:#0052B4;" d="M189.217,8.819c-32.758,8.83-62.913,23.993-89.075,44.101l89.075,89.075V8.819z"></path>-->
<!--	<path style="fill:#0052B4;" d="M322.783,503.181c32.758-8.83,62.913-23.993,89.075-44.101l-89.075-89.075V503.181z"></path>-->
<!--	<path style="fill:#0052B4;" d="M370.005,322.784l89.075,89.076c20.108-26.162,35.272-56.318,44.101-89.076H370.005z"></path>-->
<!--</g>-->
<!--<g>-->
<!--	<path style="fill:#D80027;" d="M509.833,222.609h-220.44h-0.001V2.167C278.461,0.744,267.317,0,256,0   c-11.319,0-22.461,0.744-33.391,2.167v220.44v0.001H2.167C0.744,233.539,0,244.683,0,256c0,11.319,0.744,22.461,2.167,33.391   h220.44h0.001v220.442C233.539,511.256,244.681,512,256,512c11.317,0,22.461-0.743,33.391-2.167v-220.44v-0.001h220.442   C511.256,278.461,512,267.319,512,256C512,244.683,511.256,233.539,509.833,222.609z"></path>-->
<!--	<path style="fill:#D80027;" d="M322.783,322.784L322.783,322.784L437.019,437.02c5.254-5.252,10.266-10.743,15.048-16.435   l-97.802-97.802h-31.482V322.784z"></path>-->
<!--	<path style="fill:#D80027;" d="M189.217,322.784h-0.002L74.98,437.019c5.252,5.254,10.743,10.266,16.435,15.048l97.802-97.804   V322.784z"></path>-->
<!--	<path style="fill:#D80027;" d="M189.217,189.219v-0.002L74.981,74.98c-5.254,5.252-10.266,10.743-15.048,16.435l97.803,97.803   H189.217z"></path>-->
<!--	<path style="fill:#D80027;" d="M322.783,189.219L322.783,189.219L437.02,74.981c-5.252-5.254-10.743-10.266-16.435-15.047   l-97.802,97.803V189.219z"></path>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--</svg></span><span class="text">en</span></a></li>-->
<!--<li class="disclosure__item" tabindex="-1"><a class="link link--text disclosure__link d-flex flex-align-center focus-inset" href="https://new-ella-demo.myshopify.com/?fts=0#" hreflang="de" lang="de" data-value="de"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">-->
<!--<path style="fill:#FFDA44;" d="M15.923,345.043C52.094,442.527,145.929,512,256,512s203.906-69.473,240.077-166.957L256,322.783  L15.923,345.043z"></path>-->
<!--<path d="M256,0C145.929,0,52.094,69.472,15.923,166.957L256,189.217l240.077-22.261C459.906,69.472,366.071,0,256,0z"></path>-->
<!--<path style="fill:#D80027;" d="M15.923,166.957C5.633,194.69,0,224.686,0,256s5.633,61.31,15.923,89.043h480.155  C506.368,317.31,512,287.314,512,256s-5.632-61.31-15.923-89.043H15.923z"></path>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--</svg></span><span class="text">de</span></a></li></ul>-->
<!--          </div>-->
<!--          <input type="hidden" name="locale_code" value="en">-->
<!--      </div></form></localization-form><script src="{{URL::to('/')}}/public/template/halo-languages.js" defer="defer"></script>-->
<!--</div></div>-->
<!--</div>-->
<!--                                    <div class="halo-top-currency"><div class="btn-group currency-dropdown">-->
<!--		<label class="dropdown-toggle dropdown-label" data-currency-label="">-->
<!--				                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">-->
<!--<circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"></circle>-->
<!--<g>-->
<!--	<path style="fill:#D80027;" d="M244.87,256H512c0-23.106-3.08-45.49-8.819-66.783H244.87V256z"></path>-->
<!--	<path style="fill:#D80027;" d="M244.87,122.435h229.556c-15.671-25.572-35.708-48.175-59.07-66.783H244.87V122.435z"></path>-->
<!--	<path style="fill:#D80027;" d="M256,512c60.249,0,115.626-20.824,159.356-55.652H96.644C140.374,491.176,195.751,512,256,512z"></path>-->
<!--	<path style="fill:#D80027;" d="M37.574,389.565h436.852c12.581-20.529,22.338-42.969,28.755-66.783H8.819   C15.236,346.596,24.993,369.036,37.574,389.565z"></path>-->
<!--</g>-->
<!--<path style="fill:#0052B4;" d="M118.584,39.978h23.329l-21.7,15.765l8.289,25.509l-21.699-15.765L85.104,81.252l7.16-22.037  C73.158,75.13,56.412,93.776,42.612,114.552h7.475l-13.813,10.035c-2.152,3.59-4.216,7.237-6.194,10.938l6.596,20.301l-12.306-8.941  c-3.059,6.481-5.857,13.108-8.372,19.873l7.267,22.368h26.822l-21.7,15.765l8.289,25.509l-21.699-15.765l-12.998,9.444  C0.678,234.537,0,245.189,0,256h256c0-141.384,0-158.052,0-256C205.428,0,158.285,14.67,118.584,39.978z M128.502,230.4  l-21.699-15.765L85.104,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822l-21.7,15.765L128.502,230.4z   M120.213,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822  L120.213,130.317z M220.328,230.4l-21.699-15.765L176.93,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822  l-21.7,15.765L220.328,230.4z M212.039,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822  l8.288-25.509l8.288,25.509h26.822L212.039,130.317z M212.039,55.743l8.289,25.509l-21.699-15.765L176.93,81.252l8.289-25.509  l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822L212.039,55.743z"></path>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--<g>-->
<!--</g>-->
<!--</svg></span> -->
<!--<span class="text">BDT</span>-->
<!--<svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 551.13 551.13" height="512" viewBox="0 0 551.13 551.13" width="512"><path d="m275.565 361.679-223.897-223.896h-51.668l275.565 275.565 275.565-275.565h-51.668z"></path></svg></label>-->
	</div><div class="dropdown-currency">
<div class="halo-currency">
	<link rel="stylesheet" href="{{URL::to('/')}}/public/template/currency.css" media="all" onload="this.media=&#39;all&#39;">
	<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/currency.css?v=143709740278318524021658317978" rel="stylesheet" type="text/css" media="all" /></noscript><div class="currency-block">
		    <div class="btn-group currency-dropdown">
		    	<p class="title"> Currency</p>
		        <div class="dropdown-menu currency-menu custom-scrollbar d-flex flex-align-center flex-wrap" id="currencies"><a class="dropdown-item active " href="https://new-ella-demo.myshopify.com/?fts=0#" data-currency="USD">
				                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
<circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"></circle>
<g>
	<path style="fill:#D80027;" d="M244.87,256H512c0-23.106-3.08-45.49-8.819-66.783H244.87V256z"></path>
	<path style="fill:#D80027;" d="M244.87,122.435h229.556c-15.671-25.572-35.708-48.175-59.07-66.783H244.87V122.435z"></path>
	<path style="fill:#D80027;" d="M256,512c60.249,0,115.626-20.824,159.356-55.652H96.644C140.374,491.176,195.751,512,256,512z"></path>
	<path style="fill:#D80027;" d="M37.574,389.565h436.852c12.581-20.529,22.338-42.969,28.755-66.783H8.819   C15.236,346.596,24.993,369.036,37.574,389.565z"></path>
</g>
<path style="fill:#0052B4;" d="M118.584,39.978h23.329l-21.7,15.765l8.289,25.509l-21.699-15.765L85.104,81.252l7.16-22.037  C73.158,75.13,56.412,93.776,42.612,114.552h7.475l-13.813,10.035c-2.152,3.59-4.216,7.237-6.194,10.938l6.596,20.301l-12.306-8.941  c-3.059,6.481-5.857,13.108-8.372,19.873l7.267,22.368h26.822l-21.7,15.765l8.289,25.509l-21.699-15.765l-12.998,9.444  C0.678,234.537,0,245.189,0,256h256c0-141.384,0-158.052,0-256C205.428,0,158.285,14.67,118.584,39.978z M128.502,230.4  l-21.699-15.765L85.104,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822l-21.7,15.765L128.502,230.4z   M120.213,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822  L120.213,130.317z M220.328,230.4l-21.699-15.765L176.93,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822  l-21.7,15.765L220.328,230.4z M212.039,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822  l8.288-25.509l8.288,25.509h26.822L212.039,130.317z M212.039,55.743l8.289,25.509l-21.699-15.765L176.93,81.252l8.289-25.509  l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822L212.039,55.743z"></path>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></span> <span class="text">USD</span><svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 551.13 551.13" height="512" viewBox="0 0 551.13 551.13" width="512"><path d="m275.565 361.679-223.897-223.896h-51.668l275.565 275.565 275.565-275.565h-51.668z"></path></svg></a><a class="dropdown-item" href="https://new-ella-demo.myshopify.com/?fts=0#" data-currency="EUR">
				                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
<circle style="fill:#0052B4;" cx="256" cy="256" r="256"></circle>
<g>
	<polygon style="fill:#FFDA44;" points="256.001,100.174 264.29,125.683 291.11,125.683 269.411,141.448 277.7,166.957    256.001,151.191 234.301,166.957 242.59,141.448 220.891,125.683 247.712,125.683  "></polygon>
	<polygon style="fill:#FFDA44;" points="145.814,145.814 169.714,157.99 188.679,139.026 184.482,165.516 208.381,177.693    181.89,181.889 177.694,208.381 165.517,184.482 139.027,188.679 157.992,169.714  "></polygon>
	<polygon style="fill:#FFDA44;" points="100.175,256 125.684,247.711 125.684,220.89 141.448,242.59 166.958,234.301 151.191,256    166.958,277.699 141.448,269.411 125.684,291.11 125.684,264.289  "></polygon>
	<polygon style="fill:#FFDA44;" points="145.814,366.186 157.991,342.286 139.027,323.321 165.518,327.519 177.693,303.62    181.89,330.111 208.38,334.307 184.484,346.484 188.679,372.974 169.714,354.009  "></polygon>
	<polygon style="fill:#FFDA44;" points="256.001,411.826 247.711,386.317 220.891,386.317 242.591,370.552 234.301,345.045    256.001,360.809 277.7,345.045 269.411,370.552 291.11,386.317 264.289,386.317  "></polygon>
	<polygon style="fill:#FFDA44;" points="366.187,366.186 342.288,354.01 323.322,372.975 327.519,346.483 303.622,334.307    330.112,330.111 334.308,303.62 346.484,327.519 372.974,323.321 354.009,342.288  "></polygon>
	<polygon style="fill:#FFDA44;" points="411.826,256 386.317,264.289 386.317,291.11 370.552,269.41 345.045,277.699 360.81,256    345.045,234.301 370.553,242.59 386.317,220.89 386.317,247.712  "></polygon>
	<polygon style="fill:#FFDA44;" points="366.187,145.814 354.01,169.714 372.975,188.679 346.483,184.481 334.308,208.38    330.112,181.889 303.622,177.692 327.519,165.516 323.322,139.027 342.289,157.991  "></polygon>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></span> <span class="text">EUR</span><svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 551.13 551.13" height="512" viewBox="0 0 551.13 551.13" width="512"><path d="m275.565 361.679-223.897-223.896h-51.668l275.565 275.565 275.565-275.565h-51.668z"></path></svg></a><a class="dropdown-item" href="https://new-ella-demo.myshopify.com/?fts=0#" data-currency="GBP">
				                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
<circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"></circle>
<g>
	<path style="fill:#0052B4;" d="M52.92,100.142c-20.109,26.163-35.272,56.318-44.101,89.077h133.178L52.92,100.142z"></path>
	<path style="fill:#0052B4;" d="M503.181,189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075,89.076H503.181z"></path>
	<path style="fill:#0052B4;" d="M8.819,322.784c8.83,32.758,23.993,62.913,44.101,89.075l89.074-89.075L8.819,322.784L8.819,322.784   z"></path>
	<path style="fill:#0052B4;" d="M411.858,52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177L411.858,52.921z"></path>
	<path style="fill:#0052B4;" d="M100.142,459.079c26.163,20.109,56.318,35.272,89.076,44.102V370.005L100.142,459.079z"></path>
	<path style="fill:#0052B4;" d="M189.217,8.819c-32.758,8.83-62.913,23.993-89.075,44.101l89.075,89.075V8.819z"></path>
	<path style="fill:#0052B4;" d="M322.783,503.181c32.758-8.83,62.913-23.993,89.075-44.101l-89.075-89.075V503.181z"></path>
	<path style="fill:#0052B4;" d="M370.005,322.784l89.075,89.076c20.108-26.162,35.272-56.318,44.101-89.076H370.005z"></path>
</g>
<g>
	<path style="fill:#D80027;" d="M509.833,222.609h-220.44h-0.001V2.167C278.461,0.744,267.317,0,256,0   c-11.319,0-22.461,0.744-33.391,2.167v220.44v0.001H2.167C0.744,233.539,0,244.683,0,256c0,11.319,0.744,22.461,2.167,33.391   h220.44h0.001v220.442C233.539,511.256,244.681,512,256,512c11.317,0,22.461-0.743,33.391-2.167v-220.44v-0.001h220.442   C511.256,278.461,512,267.319,512,256C512,244.683,511.256,233.539,509.833,222.609z"></path>
	<path style="fill:#D80027;" d="M322.783,322.784L322.783,322.784L437.019,437.02c5.254-5.252,10.266-10.743,15.048-16.435   l-97.802-97.802h-31.482V322.784z"></path>
	<path style="fill:#D80027;" d="M189.217,322.784h-0.002L74.98,437.019c5.252,5.254,10.743,10.266,16.435,15.048l97.802-97.804   V322.784z"></path>
	<path style="fill:#D80027;" d="M189.217,189.219v-0.002L74.981,74.98c-5.254,5.252-10.266,10.743-15.048,16.435l97.803,97.803   H189.217z"></path>
	<path style="fill:#D80027;" d="M322.783,189.219L322.783,189.219L437.02,74.981c-5.252-5.254-10.743-10.266-16.435-15.047   l-97.802,97.803V189.219z"></path>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></span> 
<span class="text">GBP</span><svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 551.13 551.13" height="512" viewBox="0 0 551.13 551.13" width="512"><path d="m275.565 361.679-223.897-223.896h-51.668l275.565 275.565 275.565-275.565h-51.668z"></path></svg></a><a class="dropdown-item" href="https://new-ella-demo.myshopify.com/?fts=0#" data-currency="CHF">
				                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
<circle style="fill:#D80027;" cx="256" cy="256" r="256"></circle>
<polygon style="fill:#F0F0F0;" points="389.565,211.479 300.522,211.479 300.522,122.435 211.478,122.435 211.478,211.479   122.435,211.479 122.435,300.522 211.478,300.522 211.478,389.565 300.522,389.565 300.522,300.522 389.565,300.522 "></polygon>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></span> <span class="text">CHF</span><svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 551.13 551.13" height="512" viewBox="0 0 551.13 551.13" width="512"><path d="m275.565 361.679-223.897-223.896h-51.668l275.565 275.565 275.565-275.565h-51.668z"></path></svg></a></div>
		    </div>
		</div></div>

<script>
    window.show_auto_currency = false;
</script><script src="{{URL::to('/')}}/public/template/currencies.js" type="text/javascript"></script>

</div>
</div>
                                </div>
                            </div></div></div>
                <div class="header-icons-bottom d-flex flex-align-center gap-15 hide-main-menu"><details-modal class="header__iconItem header__search hide-main-menu">
                                <details class="search_details search_details--popup">
                                    <summary class="header__icon header__icon--search header__icon--summary link link--text focus-inset modal__toggle h-100" aria-haspopup="dialog" aria-label="Search" data-search-menu-sticky-form="" data-search-menu="">
                                        <!--<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1 modal__toggle-open icon icon-search w-h-28"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg></span>-->
                                    </summary>
                                    <div class="search-modal modal__content p-fixed top-0 bottom-0 left-0 right-0 w-100 h-100v zi-101 m-zero quickSearch" role="dialog" aria-modal="true" aria-label="Search">
                                        <div class="search-modal__content search-modal__content-bottom d-block p-relative m-lr-auto text-center" tabindex="-1">
                                            <button type="button" class="header-search-close button-effect search-modal__close-button link--text focus-inset text-left d-block" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="icon icon-close"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg></button><predictive-search class="search-modal__form w-100" data-loading-text="Loading..." data-product-to-show="3"><form action="https://new-ella-demo.myshopify.com/search" method="get" role="search" class="search search-modal__form w-100">
                                                <div class="field">
                                                    <form action="{{URL::to('/')}}/search" method="get">@csrf
                                                    <input class="search__input field__input form-input-placeholder" id="Search-In-Modal-Menu-Vertical" type="search" name="q" value="" placeholder="Search" autocomplete="off" role="combobox" aria-expanded="false" aria-owns="predictive-search-results-list" aria-controls="predictive-search-results-list" aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocapitalize="off" spellcheck="false" aria-activedescendant=""> 
                                                    <!--<input type="hidden" name="options[prefix]" value="last">-->
                                                    <!--<input type="hidden" name="type" value="product">-->
                                                    <label class="field__label hiddenLabels" for="Search-In-Modal-Menu-Vertical">Search</label>
                                                    <button class="button search__button field__button focus-inset" aria-label="Search"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg></button>
                                                    </form>
                                                </div>
<div class="quickSearchResultsBlock quickSearchResultsWidget quickSearchResultsWrap hidden" data-quick-trending-products="">
    <div class="quickSearchResults custom-scrollbar">
        <div class="container">
            <div class="search-block quickSearchTrending">
                <h3 class="search-block-title text-left">
                    <span class="text">Trending Now</span>
                    <button type="button" class="header-search-popup-close d-none button-effect" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="d-none"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>
                    </button>
                </h3>
                <!--<ul class="list-item list-unstyled clearfix">-->
                <!--    <li class="item"><a href="https://new-ella-demo.myshopify.com/search?q=dempus*&amp;type=product" class="link">-->
                <!--        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg>-->
                <!--        <span class="text">dempus</span></a></li>-->
                <!--        <li class="item"><a href="https://new-ella-demo.myshopify.com/search?q=sample*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg>-->
                <!--        <span class="text">sample</span></a></li>-->
                <!--        <li class="item"><a href="https://new-ella-demo.myshopify.com/search?q=magnis*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg>-->
                <!--        <span class="text">magnis</span></a></li>-->
                <!--        <li class="item"><a href="https://new-ella-demo.myshopify.com/search?q=loremous-saliduar*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg>-->
                <!--        <span class="text">loremous saliduar</span></a></li>-->
                <!--        <li class="item"><a href="https://new-ella-demo.myshopify.com/search?q=naminos*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg>-->
                <!--        <span class="text">naminos</span></a></li>-->
                <!--        <li class="item"><a href="https://new-ella-demo.myshopify.com/search?q=dinterdum*&amp;type=product" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg>-->
                <!--        <span class="text">dinterdum</span></a></li>-->
                <!--    </ul>-->
                </div>
                <div class="search-block quickSearchProduct">
                    <h3 class="search-block-title text-left">
                        <span class="text">Popular Products</span>
                    </h3>
                    <div class="search-block-content">
                        <div class="halo-block">
<!--                            <div class="products-grid column-3 disable-srollbar">-->
<!--                                <div class="product">-->
<!--                                    <div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625007194" data-json-product="{&quot;id&quot;: 6679625007194,&quot;handle&quot;: &quot;tele-kill-giother-nodels-coped-permi-unde-ona&quot;,&quot;media&quot;: null,&quot;variants&quot;: [{&quot;id&quot;:39724525486170,&quot;title&quot;:&quot;XS \/ Black&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856385822810,&quot;product_id&quot;:6679625007194,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-1.jpg?v=1640334199&quot;,&quot;variant_ids&quot;:[39724525486170]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XS \/ Black&quot;,&quot;public_title&quot;:&quot;XS \/ Black&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Black&quot;],&quot;price&quot;:5900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:9900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108914741338,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-1.jpg?v=1640334199&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525518938,&quot;title&quot;:&quot;XS \/ Slategray&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856385855578,&quot;product_id&quot;:6679625007194,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-2.jpg?v=1640334199&quot;,&quot;variant_ids&quot;:[39724525518938]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XS \/ Slategray&quot;,&quot;public_title&quot;:&quot;XS \/ Slategray&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Slategray&quot;],&quot;price&quot;:6900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108914774106,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-2.jpg?v=1640334199&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525551706,&quot;title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856385888346,&quot;product_id&quot;:6679625007194,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:19-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-3.jpg?v=1640334199&quot;,&quot;variant_ids&quot;:[39724525551706]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XS \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108914806874,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-loa-3.jpg?v=1640334199&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525584474,&quot;title&quot;:&quot;S \/ Black&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - S \/ Black&quot;,&quot;public_title&quot;:&quot;S \/ Black&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Black&quot;],&quot;price&quot;:8900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525617242,&quot;title&quot;:&quot;S \/ Slategray&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - S \/ Slategray&quot;,&quot;public_title&quot;:&quot;S \/ Slategray&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Slategray&quot;],&quot;price&quot;:5900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525650010,&quot;title&quot;:&quot;S \/ Sandybrown&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - S \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;S \/ Sandybrown&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525682778,&quot;title&quot;:&quot;M \/ Slategray&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:false,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - M \/ Slategray&quot;,&quot;public_title&quot;:&quot;M \/ Slategray&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525715546,&quot;title&quot;:&quot;M \/ Sandybrown&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - M \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;M \/ Sandybrown&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:6900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525748314,&quot;title&quot;:&quot;L \/ Slategray&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - L \/ Slategray&quot;,&quot;public_title&quot;:&quot;L \/ Slategray&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Slategray&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525781082,&quot;title&quot;:&quot;L \/ Sandybrown&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - L \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;L \/ Sandybrown&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:8900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724525813850,&quot;title&quot;:&quot;XL \/ Black&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 14) Sample - Computers \u0026 Accessories For Sale - XL \/ Black&quot;,&quot;public_title&quot;:&quot;XL \/ Black&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}]}">-->
<!--    <div class="card">-->
<!--        <div class="card-product">-->
<!--            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-50863691 date1-588" data-new-badge-number="30"><span class="badge sale-badge" aria-hidden="true">Sale-->
<!--</span></div>-->
<!--<div class="card-media card-media--adapt media--hover-effect" style="padding-bottom: 100.0%;">-->
<!--                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_165x.jpg?v=1640334199 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_170x.jpg?v=1640334199 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_185x.jpg?v=1640334199 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_198x.jpg?v=1640334199 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_210x.jpg?v=1640334199 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_220x.jpg?v=1640334199 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_245x.jpg?v=1640334199 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_270x.jpg?v=1640334199 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_290x.jpg?v=1640334199 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_320x.jpg?v=1640334199 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_355x.jpg?v=1640334199 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_360x.jpg?v=1640334199 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_370x.jpg?v=1640334199 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_420x.jpg?v=1640334199 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_430x.jpg?v=1640334199 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_460x.jpg?v=1640334199 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_470x.jpg?v=1640334199 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_510x.jpg?v=1640334199 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_523x.jpg?v=1640334199 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_533x.jpg?v=1640334199 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_534x.jpg?v=1640334199 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_570x.jpg?v=1640334199 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_640x.jpg?v=1640334199 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_665x.jpg?v=1640334199 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_670x.jpg?v=1640334199 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_720x.jpg?v=1640334199 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_775x.jpg?v=1640334199 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_785x.jpg?v=1640334199 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_870x.jpg?v=1640334199 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 14) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_800x.jpg?v=1640334199"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_165x.jpg?v=1640334199 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_170x.jpg?v=1640334199 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_185x.jpg?v=1640334199 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_198x.jpg?v=1640334199 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_210x.jpg?v=1640334199 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_220x.jpg?v=1640334199 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_245x.jpg?v=1640334199 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_270x.jpg?v=1640334199 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_290x.jpg?v=1640334199 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_320x.jpg?v=1640334199 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_355x.jpg?v=1640334199 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_360x.jpg?v=1640334199 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_370x.jpg?v=1640334199 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_420x.jpg?v=1640334199 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_430x.jpg?v=1640334199 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_460x.jpg?v=1640334199 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_470x.jpg?v=1640334199 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_510x.jpg?v=1640334199 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_523x.jpg?v=1640334199 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_533x.jpg?v=1640334199 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_534x.jpg?v=1640334199 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_570x.jpg?v=1640334199 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_640x.jpg?v=1640334199 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_665x.jpg?v=1640334199 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_670x.jpg?v=1640334199 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_720x.jpg?v=1640334199 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_775x.jpg?v=1640334199 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_785x.jpg?v=1640334199 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_870x.jpg?v=1640334199 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 14) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload"><span class="data-lazy-loading"></span>-->
<!--                    <a class="card-link" href="https://new-ella-demo.myshopify.com/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" title="(Product 14) Sample - Computers &amp; Accessories For Sale"></a>-->
<!--                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">-->
<!--                                <button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625007194" data-open-quick-view-popup="" data-product-handle="tele-kill-giother-nodels-coped-permi-unde-ona">-->
<!--                                    <span class="visually-hidden">Quick View</span>-->
<!--                                    <span class="text">-->
<!--                                        Quick View-->
<!--                                    </span>-->
<!--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>-->
<!--                                </button>-->
<!--                            </div></div>-->
<!--<div class="card-quickview">-->
<!--                        <button type="button" title="Quick View" class="quickview-button button" data-product-id="6679625007194" data-open-quick-view-popup="" data-product-handle="tele-kill-giother-nodels-coped-permi-unde-ona">-->
<!--                            <span class="visually-hidden">Quick View</span>-->
<!--                            Quick View-->
<!--                        </button>-->
<!--                    </div></div>-->
<!--        </div>-->
<!--        <div class="card-information">-->
<!--            <div class="card-information__wrapper text-left">-->
                
<!--                    <div class="wrapper-title-vendor  card-title-ellipsis">-->
                
<!--<a class="card-title link-underline card-title-ellipsis card-title-change" href="https://new-ella-demo.myshopify.com/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" data-product-title="(Product 14) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/tele-kill-giother-nodels-coped-permi-unde-ona">-->
<!--                    <span class="text">-->
<!--                        (Product 14) Sample - Computers &amp; Accessories For Sale-->
                        
<!--                            <span data-change-title=""> - Black</span>-->
                        
<!--                    </span>-->
<!--                </a>-->

                
<!--                    </div>-->
                
<!--<div class="card-review clearfix halo-productReview">-->
<!--                        <span class="spr-badge" id="spr_badge_6679625007194" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i></span><span class="spr-badge-caption">No reviews</span>-->
<!--</span>-->

<!--                    </div><div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>-->
<!--<div class="card-price">-->
<!--                        <div class="price  price--on-sale ">-->
<!--    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="text">From</span> <span class="money">$49.00</span></span></dd>-->
<!--        </div>-->
<!--        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"><span class="money">$99.00</span></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$59.00</span></span></dd></div>-->
<!--        <small class="unit-price caption hidden">-->
<!--            <dt class="visually-hidden">Unit price</dt>-->
<!--            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>-->
<!--        </small>-->
<!--    </dl>-->
<!--</div>-->

<!--                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625007194">-->
<!--        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label is-active" data-value="black" data-variant-id="39724525486170" title="Black" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-1_800x.jpg?v=1640334199"><span class="pattern" style="background-color: black; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span>black</label><span class="tooltip">Black-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="slategray" data-variant-id="39724525518938" title="Slategray" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-2_800x.jpg?v=1640334199"><span class="pattern" style="background-color: slategray; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span>slategray</label><span class="tooltip">Slategray-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="sandybrown" data-variant-id="39724525551706" title="Sandybrown" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-loa-3_800x.jpg?v=1640334199"><span class="pattern" style="background-color: sandybrown; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span>sandybrown</label><span class="tooltip">Sandybrown-->
<!--</span></div></li></ul>-->
<!--    </div>-->

<!--<div class="wrapper__card show-wishlist show-mb"><div class="card-action">-->
<!--                            <a class="button button-ATC" href="https://new-ella-demo.myshopify.com/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" data-quickshop-popup="" data-product-handle="tele-kill-giother-nodels-coped-permi-unde-ona">Quick Add-->
<!--</a><div class="variants-popup custom-scrollbar">-->
<!--                <script>window.quick_view_inven_array_6679625007194 = {'39724525486170': '9','39724525518938': '10','39724525551706': '10','39724525584474': '10','39724525617242': '10','39724525650010': '10','39724525682778': '0','39724525715546': '10','39724525748314': '10','39724525781082': '10','39724525813850': '9',};</script><a href="https://new-ella-demo.myshopify.com/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="swatch-form-6679625007194-list-result-" data-id="product-actions-6679625007194" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs unavailable" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625007194-list-result">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625007194-list-result">XS</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        


<!--<div class="swatch-element s unavailable" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625007194-list-result">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625007194-list-result">S</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        


<!--<div class="swatch-element m unavailable" data-value="M">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="M" id="SingleOptionSelector0-M-6679625007194-list-result" disabled="">-->
<!--                                <label class="single-label" title="M" for="SingleOptionSelector0-M-6679625007194-list-result">M</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        

<!--<div class="swatch-element l unavailable" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625007194-list-result">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625007194-list-result">L</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        

<!--<div class="swatch-element xl unavailable" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-result" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625007194-list-result">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625007194-list-result">XL</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1" style="display: none;">-->
<!--                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-result" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625007194-list-result">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625007194-list-result"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-result" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625007194-list-result">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625007194-list-result"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-result" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625007194-list-result">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625007194-list-result"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span></label>-->
<!--                            </div></div><select name="id" id="ProductSelect-6679625007194-list-result" class="selector-wrapper-hidden" style="display: none;"><option value="39724525486170" data-value="39724525486170">XS / Black</option><option value="39724525518938" data-value="39724525518938">XS / Slategray</option><option value="39724525551706" data-value="39724525551706">XS / Sandybrown</option><option value="39724525584474" data-value="39724525584474">S / Black</option><option value="39724525617242" data-value="39724525617242">S / Slategray</option><option value="39724525650010" data-value="39724525650010">S / Sandybrown</option><option disabled="disabled" data-value="39724525682778">M / Slategray - Sold out</option><option value="39724525715546" data-value="39724525715546">M / Sandybrown</option><option value="39724525748314" data-value="39724525748314">L / Slategray</option><option value="39724525781082" data-value="39724525781082">L / Sandybrown</option><option value="39724525813850" data-value="39724525813850">XL / Black</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625007194-list-result-">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--            </div>-->
<!--                        </div><div class="card-action__group card-list__hidden">-->
<!--    <div class="card-action">-->
<!--        <form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="form-6679625007194-list-resultlist" data-product-id="6679625007194" enctype="multipart/form-data"><a class="button button-ATC" href="https://new-ella-demo.myshopify.com/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" data-quickshop-popup="">Quick Add</a></form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card-action__group variants-popup card-list__hidden">-->
<!--    <div class="card-action variants-popup-form"><div class="custom-scrollbar">-->
<!--                        <script>window.quick_view_inven_array_6679625007194 = {'39724525486170': '9','39724525518938': '10','39724525551706': '10','39724525584474': '10','39724525617242': '10','39724525650010': '10','39724525682778': '0','39724525715546': '10','39724525748314': '10','39724525781082': '10','39724525813850': '9',};</script><a href="https://new-ella-demo.myshopify.com/products/tele-kill-giother-nodels-coped-permi-unde-ona?variant=39724525486170" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="swatch-form-6679625007194-list-result-list" data-id="product-actions-6679625007194list" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs unavailable" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625007194-list-resultlist">XS</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        


<!--<div class="swatch-element s unavailable" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625007194-list-resultlist">S</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        


<!--<div class="swatch-element m unavailable" data-value="M">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="M" id="SingleOptionSelector0-M-6679625007194-list-resultlist" disabled="">-->
<!--                                <label class="single-label" title="M" for="SingleOptionSelector0-M-6679625007194-list-resultlist">M</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        

<!--<div class="swatch-element l unavailable" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625007194-list-resultlist">L</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        

<!--<div class="swatch-element xl unavailable" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625007194-list-resultlist" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625007194-list-resultlist">XL</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1">-->
<!--                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-resultlist" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625007194-list-resultlist"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-resultlist" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625007194-list-resultlist"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625007194-list-resultlist" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625007194-list-resultlist">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625007194-list-resultlist"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span></label>-->
<!--                            </div></div><select name="id" id="ProductSelect-6679625007194-list-resultlist" class="selector-wrapper-hidden" style="display: none;"><option value="39724525486170" data-value="39724525486170">XS / Black</option><option value="39724525518938" data-value="39724525518938">XS / Slategray</option><option value="39724525551706" data-value="39724525551706">XS / Sandybrown</option><option value="39724525584474" data-value="39724525584474">S / Black</option><option value="39724525617242" data-value="39724525617242">S / Slategray</option><option value="39724525650010" data-value="39724525650010">S / Sandybrown</option><option disabled="disabled" data-value="39724525682778">M / Slategray - Sold out</option><option value="39724525715546" data-value="39724525715546">M / Sandybrown</option><option value="39724525748314" data-value="39724525748314">L / Slategray</option><option value="39724525781082" data-value="39724525781082">L / Sandybrown</option><option value="39724525813850" data-value="39724525813850">XL / Black</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625007194-list-result-list">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--                    </div></div>-->
<!--</div>-->
<!--<div class="card-product__group-item card-wishlist">-->
<!--                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="tele-kill-giother-nodels-coped-permi-unde-ona" data-product-id="6679625007194">-->
<!--                                <span class="visually-hidden">Add to wishlist</span>-->
<!--                                <span class="text">-->
<!--                                    Add to wishlist-->
<!--                                </span>-->
<!--                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>-->
<!--                            </button>-->
<!--                        </div></div></div>-->
<!--    </div>-->
<!--</div>-->

<!--</div>-->
<!--<div class="product">-->
<!--<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625236570" data-json-product="{&quot;id&quot;: 6679625236570,&quot;handle&quot;: &quot;home-tosmois-de-cras-hamo-dincidunts&quot;,&quot;media&quot;: null,&quot;variants&quot;: [{&quot;id&quot;:39724528402522,&quot;title&quot;:&quot;XS \/ Black&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386969690,&quot;product_id&quot;:6679625236570,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528402522]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Black&quot;,&quot;public_title&quot;:&quot;XS \/ Black&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Black&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:5900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915888218,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528435290,&quot;title&quot;:&quot;XS \/ Beige&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856387002458,&quot;product_id&quot;:6679625236570,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528435290]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Beige&quot;,&quot;public_title&quot;:&quot;XS \/ Beige&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:6900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915920986,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528468058,&quot;title&quot;:&quot;XS \/ Slategray&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856387035226,&quot;product_id&quot;:6679625236570,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_fb22dfcd-1532-40cd-9017-70c7cceed9e8.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528468058]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Slategray&quot;,&quot;public_title&quot;:&quot;XS \/ Slategray&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915953754,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_fb22dfcd-1532-40cd-9017-70c7cceed9e8.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528500826,&quot;title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XS&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856387067994,&quot;product_id&quot;:6679625236570,&quot;position&quot;:4,&quot;created_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:54-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2_50568174-f5b3-4d14-aaf3-d2b6f7ce1964.jpg?v=1640334234&quot;,&quot;variant_ids&quot;:[39724528500826]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XS \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XS \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XS&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915986522,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2_50568174-f5b3-4d14-aaf3-d2b6f7ce1964.jpg?v=1640334234&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528533594,&quot;title&quot;:&quot;S \/ Black&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Black&quot;,&quot;public_title&quot;:&quot;S \/ Black&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528566362,&quot;title&quot;:&quot;S \/ Beige&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Beige&quot;,&quot;public_title&quot;:&quot;S \/ Beige&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528599130,&quot;title&quot;:&quot;S \/ Slategray&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Slategray&quot;,&quot;public_title&quot;:&quot;S \/ Slategray&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528631898,&quot;title&quot;:&quot;S \/ Sandybrown&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - S \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;S \/ Sandybrown&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528664666,&quot;title&quot;:&quot;L \/ Black&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Black&quot;,&quot;public_title&quot;:&quot;L \/ Black&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528697434,&quot;title&quot;:&quot;L \/ Beige&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Beige&quot;,&quot;public_title&quot;:&quot;L \/ Beige&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528730202,&quot;title&quot;:&quot;L \/ Slategray&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Slategray&quot;,&quot;public_title&quot;:&quot;L \/ Slategray&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528762970,&quot;title&quot;:&quot;L \/ Sandybrown&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - L \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;L \/ Sandybrown&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528795738,&quot;title&quot;:&quot;XL \/ Black&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Black&quot;,&quot;public_title&quot;:&quot;XL \/ Black&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Black&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528828506,&quot;title&quot;:&quot;XL \/ Beige&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Beige&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Beige&quot;,&quot;public_title&quot;:&quot;XL \/ Beige&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Beige&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528861274,&quot;title&quot;:&quot;XL \/ Slategray&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Slategray&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Slategray&quot;,&quot;public_title&quot;:&quot;XL \/ Slategray&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Slategray&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724528894042,&quot;title&quot;:&quot;XL \/ Sandybrown&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Sandybrown&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;KJSU-58636&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 21) Sample - Computers \u0026 Accessories For Sale - XL \/ Sandybrown&quot;,&quot;public_title&quot;:&quot;XL \/ Sandybrown&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Sandybrown&quot;],&quot;price&quot;:4900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}]}">-->
<!--    <div class="card">-->
<!--        <div class="card-product">-->
<!--            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-50863656 date1-588" data-new-badge-number="30"></div>-->
<!--<div class="card-media card-media--adapt media--hover-effect" style="padding-bottom: 100.0%;">-->
<!--                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_165x.jpg?v=1640334234 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_170x.jpg?v=1640334234 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_185x.jpg?v=1640334234 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_198x.jpg?v=1640334234 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_210x.jpg?v=1640334234 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_220x.jpg?v=1640334234 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_245x.jpg?v=1640334234 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_270x.jpg?v=1640334234 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_290x.jpg?v=1640334234 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_320x.jpg?v=1640334234 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_355x.jpg?v=1640334234 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_360x.jpg?v=1640334234 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_370x.jpg?v=1640334234 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_420x.jpg?v=1640334234 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_430x.jpg?v=1640334234 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_460x.jpg?v=1640334234 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_470x.jpg?v=1640334234 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_510x.jpg?v=1640334234 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_523x.jpg?v=1640334234 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_533x.jpg?v=1640334234 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_534x.jpg?v=1640334234 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_570x.jpg?v=1640334234 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_640x.jpg?v=1640334234 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_665x.jpg?v=1640334234 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_670x.jpg?v=1640334234 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_720x.jpg?v=1640334234 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_775x.jpg?v=1640334234 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_785x.jpg?v=1640334234 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_870x.jpg?v=1640334234 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 21) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_800x.jpg?v=1640334234"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_165x.jpg?v=1640334234 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_170x.jpg?v=1640334234 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_185x.jpg?v=1640334234 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_198x.jpg?v=1640334234 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_210x.jpg?v=1640334234 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_220x.jpg?v=1640334234 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_245x.jpg?v=1640334234 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_270x.jpg?v=1640334234 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_290x.jpg?v=1640334234 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_320x.jpg?v=1640334234 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_355x.jpg?v=1640334234 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_360x.jpg?v=1640334234 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_370x.jpg?v=1640334234 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_420x.jpg?v=1640334234 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_430x.jpg?v=1640334234 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_460x.jpg?v=1640334234 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_470x.jpg?v=1640334234 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_510x.jpg?v=1640334234 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_523x.jpg?v=1640334234 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_533x.jpg?v=1640334234 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_534x.jpg?v=1640334234 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_570x.jpg?v=1640334234 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_640x.jpg?v=1640334234 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_665x.jpg?v=1640334234 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_670x.jpg?v=1640334234 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_720x.jpg?v=1640334234 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_775x.jpg?v=1640334234 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_785x.jpg?v=1640334234 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_870x.jpg?v=1640334234 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 21) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload"><span class="data-lazy-loading"></span>-->
<!--                    <a class="card-link" href="https://new-ella-demo.myshopify.com/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" title="(Product 21) Sample - Computers &amp; Accessories For Sale"></a>-->
<!--                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">-->
<!--                                <button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625236570" data-open-quick-view-popup="" data-product-handle="home-tosmois-de-cras-hamo-dincidunts">-->
<!--                                    <span class="visually-hidden">Quick View</span>-->
<!--                                    <span class="text">-->
<!--                                        Quick View-->
<!--                                    </span>-->
<!--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>-->
<!--                                </button>-->
<!--                            </div></div>-->
<!--<div class="card-quickview">-->
<!--                        <button type="button" title="Quick View" class="quickview-button button" data-product-id="6679625236570" data-open-quick-view-popup="" data-product-handle="home-tosmois-de-cras-hamo-dincidunts">-->
<!--                            <span class="visually-hidden">Quick View</span>-->
<!--                            Quick View-->
<!--                        </button>-->
<!--                    </div></div>-->
<!--        </div>-->
<!--        <div class="card-information">-->
<!--            <div class="card-information__wrapper text-left">-->
                
<!--                    <div class="wrapper-title-vendor  card-title-ellipsis">-->
                
<!--<a class="card-title link-underline card-title-ellipsis card-title-change" href="https://new-ella-demo.myshopify.com/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" data-product-title="(Product 21) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/home-tosmois-de-cras-hamo-dincidunts">-->
<!--                    <span class="text">-->
<!--                        (Product 21) Sample - Computers &amp; Accessories For Sale-->
                        
<!--                            <span data-change-title=""> - Black</span>-->
                        
<!--                    </span>-->
<!--                </a>-->

                
<!--                    </div>-->
                
<!--<div class="card-review clearfix halo-productReview">-->
<!--                        <span class="spr-badge" id="spr_badge_6679625236570" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i><i class="spr-icon spr-icon-star" aria-hidden="true"></i></span><span class="spr-badge-caption">1 review</span>-->
<!--</span>-->

<!--                    </div><div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>-->
<!--<div class="card-price">-->
<!--                        <div class="price  price--on-sale ">-->
<!--    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$79.00</span></span></dd>-->
<!--        </div>-->
<!--        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"><span class="money">$59.00</span></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="text">From</span> <span class="money">$49.00</span></span></dd></div>-->
<!--        <small class="unit-price caption hidden">-->
<!--            <dt class="visually-hidden">Unit price</dt>-->
<!--            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>-->
<!--        </small>-->
<!--    </dl>-->
<!--</div>-->

<!--                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625236570">-->
<!--        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label is-active" data-value="black" data-variant-id="39724528402522" title="Black" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-4_23546feb-c1d6-4645-819e-10afcda659f6_800x.jpg?v=1640334234"><span class="pattern" style="background-color: black; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span>black</label><span class="tooltip">Black-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="beige" data-variant-id="39724528435290" title="Beige" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-3_275905fd-215f-4522-9570-bae7c4f3ac3c_800x.jpg?v=1640334234"><span class="pattern" style="background-color: beige; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123050)"></span>beige</label><span class="tooltip">Beige-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="slategray" data-variant-id="39724528468058" title="Slategray" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_fb22dfcd-1532-40cd-9017-70c7cceed9e8_800x.jpg?v=1640334234"><span class="pattern" style="background-color: slategray; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span>slategray</label><span class="tooltip">Slategray-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="sandybrown" data-variant-id="39724528500826" title="Sandybrown" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_50568174-f5b3-4d14-aaf3-d2b6f7ce1964_800x.jpg?v=1640334234"><span class="pattern" style="background-color: sandybrown; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span>sandybrown</label><span class="tooltip">Sandybrown-->
<!--</span></div></li></ul>-->
<!--    </div>-->

<!--<div class="wrapper__card show-wishlist show-mb"><div class="card-action">-->
<!--                            <form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="form-6679625236570-list-result" data-product-id="6679625236570" enctype="multipart/form-data"><a class="button button-ATC" href="https://new-ella-demo.myshopify.com/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" data-quickshop-popup="" data-product-handle="home-tosmois-de-cras-hamo-dincidunts">Quick Add-->
<!--</a></form><div class="variants-popup custom-scrollbar">-->
<!--                <script>window.quick_view_inven_array_6679625236570 = {'39724528402522': '9','39724528435290': '10','39724528468058': '10','39724528500826': '10','39724528533594': '10','39724528566362': '10','39724528599130': '10','39724528631898': '10','39724528664666': '10','39724528697434': '10','39724528730202': '10','39724528762970': '10','39724528795738': '10','39724528828506': '10','39724528861274': '10','39724528894042': '10',};</script><a href="https://new-ella-demo.myshopify.com/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="swatch-form-6679625236570-list-result-" data-id="product-actions-6679625236570" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs unavailable" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625236570-list-result">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625236570-list-result">XS</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element s unavailable" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625236570-list-result">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625236570-list-result">S</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element l unavailable" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625236570-list-result">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625236570-list-result">L</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element xl unavailable" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-result" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625236570-list-result">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625236570-list-result">XL</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1" style="display: none;">-->
<!--                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625236570-list-result">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625236570-list-result"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element beige available" data-value="Beige">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Beige" id="SingleOptionSelector1-Beige-6679625236570-list-result">-->
<!--                                <label class="single-label" title="Beige" for="SingleOptionSelector1-Beige-6679625236570-list-result"><span class="pattern" style="background-color: beige;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625236570-list-result">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625236570-list-result"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-result" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625236570-list-result">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625236570-list-result"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span></label>-->
<!--                            </div></div><select name="id" id="ProductSelect-6679625236570-list-result" class="selector-wrapper-hidden" style="display: none;"><option value="39724528402522" data-value="39724528402522">XS / Black</option><option value="39724528435290" data-value="39724528435290">XS / Beige</option><option value="39724528468058" data-value="39724528468058">XS / Slategray</option><option value="39724528500826" data-value="39724528500826">XS / Sandybrown</option><option value="39724528533594" data-value="39724528533594">S / Black</option><option value="39724528566362" data-value="39724528566362">S / Beige</option><option value="39724528599130" data-value="39724528599130">S / Slategray</option><option value="39724528631898" data-value="39724528631898">S / Sandybrown</option><option value="39724528664666" data-value="39724528664666">L / Black</option><option value="39724528697434" data-value="39724528697434">L / Beige</option><option value="39724528730202" data-value="39724528730202">L / Slategray</option><option value="39724528762970" data-value="39724528762970">L / Sandybrown</option><option value="39724528795738" data-value="39724528795738">XL / Black</option><option value="39724528828506" data-value="39724528828506">XL / Beige</option><option value="39724528861274" data-value="39724528861274">XL / Slategray</option><option value="39724528894042" data-value="39724528894042">XL / Sandybrown</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625236570-list-result-">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--            </div>-->
<!--                        </div><div class="card-action__group card-list__hidden">-->
<!--    <div class="card-action">-->
<!--        <form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="form-6679625236570-list-resultlist" data-product-id="6679625236570" enctype="multipart/form-data"><a class="button button-ATC" href="https://new-ella-demo.myshopify.com/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" data-quickshop-popup="">Quick Add</a></form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card-action__group variants-popup card-list__hidden">-->
<!--    <div class="card-action variants-popup-form"><div class="custom-scrollbar">-->
<!--                        <script>window.quick_view_inven_array_6679625236570 = {'39724528402522': '9','39724528435290': '10','39724528468058': '10','39724528500826': '10','39724528533594': '10','39724528566362': '10','39724528599130': '10','39724528631898': '10','39724528664666': '10','39724528697434': '10','39724528730202': '10','39724528762970': '10','39724528795738': '10','39724528828506': '10','39724528861274': '10','39724528894042': '10',};</script><a href="https://new-ella-demo.myshopify.com/products/home-tosmois-de-cras-hamo-dincidunts?variant=39724528402522" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="swatch-form-6679625236570-list-result-list" data-id="product-actions-6679625236570list" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-1">XS</span></label><div class="swatch-element xs unavailable" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="XS" id="SingleOptionSelector0-XS-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector0-XS-6679625236570-list-resultlist">XS</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element s unavailable" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="S" id="SingleOptionSelector0-S-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector0-S-6679625236570-list-resultlist">S</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element l unavailable" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="L" id="SingleOptionSelector0-L-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector0-L-6679625236570-list-resultlist">L</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--<div class="swatch-element xl unavailable" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625236570-list-resultlist" data-index="option1" value="XL" id="SingleOptionSelector0-XL-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector0-XL-6679625236570-list-resultlist">XL</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        



<!--</div><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="1">-->
<!--                    <label class="form-label">Color: <span class="label-value-2">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Black" id="SingleOptionSelector1-Black-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector1-Black-6679625236570-list-resultlist"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element beige available" data-value="Beige">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Beige" id="SingleOptionSelector1-Beige-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="Beige" for="SingleOptionSelector1-Beige-6679625236570-list-resultlist"><span class="pattern" style="background-color: beige;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Slategray" id="SingleOptionSelector1-Slategray-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector1-Slategray-6679625236570-list-resultlist"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625236570-list-resultlist" data-index="option2" value="Sandybrown" id="SingleOptionSelector1-Sandybrown-6679625236570-list-resultlist">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector1-Sandybrown-6679625236570-list-resultlist"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span></label>-->
<!--                            </div></div><select name="id" id="ProductSelect-6679625236570-list-resultlist" class="selector-wrapper-hidden" style="display: none;"><option value="39724528402522" data-value="39724528402522">XS / Black</option><option value="39724528435290" data-value="39724528435290">XS / Beige</option><option value="39724528468058" data-value="39724528468058">XS / Slategray</option><option value="39724528500826" data-value="39724528500826">XS / Sandybrown</option><option value="39724528533594" data-value="39724528533594">S / Black</option><option value="39724528566362" data-value="39724528566362">S / Beige</option><option value="39724528599130" data-value="39724528599130">S / Slategray</option><option value="39724528631898" data-value="39724528631898">S / Sandybrown</option><option value="39724528664666" data-value="39724528664666">L / Black</option><option value="39724528697434" data-value="39724528697434">L / Beige</option><option value="39724528730202" data-value="39724528730202">L / Slategray</option><option value="39724528762970" data-value="39724528762970">L / Sandybrown</option><option value="39724528795738" data-value="39724528795738">XL / Black</option><option value="39724528828506" data-value="39724528828506">XL / Beige</option><option value="39724528861274" data-value="39724528861274">XL / Slategray</option><option value="39724528894042" data-value="39724528894042">XL / Sandybrown</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625236570-list-result-list">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--                    </div></div>-->
<!--</div>-->
<!--<div class="card-product__group-item card-wishlist">-->
<!--                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="home-tosmois-de-cras-hamo-dincidunts" data-product-id="6679625236570">-->
<!--                                <span class="visually-hidden">Add to wishlist</span>-->
<!--                                <span class="text">-->
<!--                                    Add to wishlist-->
<!--                                </span>-->
<!--                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>-->
<!--                            </button>-->
<!--                        </div></div></div>-->
<!--    </div>-->
<!--</div>-->

<!--</div><div class="product">-->
<!--<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625105498" data-json-product="{&quot;id&quot;: 6679625105498,&quot;handle&quot;: &quot;home-imperdiet-vellectus-eleifend-thiams&quot;,&quot;media&quot;: null,&quot;variants&quot;: [{&quot;id&quot;:39724526600282,&quot;title&quot;:&quot;DarkOrange&quot;,&quot;option1&quot;:&quot;DarkOrange&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;MKI-2661&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386314330,&quot;product_id&quot;:6679625105498,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2.jpg?v=1640334213&quot;,&quot;variant_ids&quot;:[39724526600282]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 17) Sample - Computers \u0026 Accessories For Sale - DarkOrange&quot;,&quot;public_title&quot;:&quot;DarkOrange&quot;,&quot;options&quot;:[&quot;DarkOrange&quot;],&quot;price&quot;:9900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:42900,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915232858,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-2.jpg?v=1640334213&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724526633050,&quot;title&quot;:&quot;LightCoral&quot;,&quot;option1&quot;:&quot;LightCoral&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;MKI-2661&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386347098,&quot;product_id&quot;:6679625105498,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1.jpg?v=1640334213&quot;,&quot;variant_ids&quot;:[39724526633050]},&quot;available&quot;:true,&quot;name&quot;:&quot;(Product 17) Sample - Computers \u0026 Accessories For Sale - LightCoral&quot;,&quot;public_title&quot;:&quot;LightCoral&quot;,&quot;options&quot;:[&quot;LightCoral&quot;],&quot;price&quot;:8900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915265626,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1.jpg?v=1640334213&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:39724526665818,&quot;title&quot;:&quot;Grey&quot;,&quot;option1&quot;:&quot;Grey&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;MKI-2661&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:30856386379866,&quot;product_id&quot;:6679625105498,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;updated_at&quot;:&quot;2021-12-24T03:23:33-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:870,&quot;height&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_c7fc75f2-735e-41a4-9d82-004fe8244483.jpg?v=1640334213&quot;,&quot;variant_ids&quot;:[39724526665818]},&quot;available&quot;:false,&quot;name&quot;:&quot;(Product 17) Sample - Computers \u0026 Accessories For Sale - Grey&quot;,&quot;public_title&quot;:&quot;Grey&quot;,&quot;options&quot;:[&quot;Grey&quot;],&quot;price&quot;:7900,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:23108915298394,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:870,&quot;width&quot;:870,&quot;src&quot;:&quot;\/\/new-ella-demo.myshopify.com\/cdn\/shop\/products\/product-app-1_c7fc75f2-735e-41a4-9d82-004fe8244483.jpg?v=1640334213&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[],&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}]}">-->
<!--    <div class="card">-->
<!--        <div class="card-product">-->
<!--            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-50863676 date1-588" data-new-badge-number="30"><span class="badge sale-badge" aria-hidden="true">Sale-->
<!--</span></div>-->
<!--<div class="card-media card-media--adapt media--hover-effect" style="padding-bottom: 100.0%;">-->
<!--                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_165x.jpg?v=1640334213 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_170x.jpg?v=1640334213 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_185x.jpg?v=1640334213 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_198x.jpg?v=1640334213 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_210x.jpg?v=1640334213 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_220x.jpg?v=1640334213 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_245x.jpg?v=1640334213 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_270x.jpg?v=1640334213 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_290x.jpg?v=1640334213 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_320x.jpg?v=1640334213 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_355x.jpg?v=1640334213 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_360x.jpg?v=1640334213 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_370x.jpg?v=1640334213 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_420x.jpg?v=1640334213 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_430x.jpg?v=1640334213 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_460x.jpg?v=1640334213 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_470x.jpg?v=1640334213 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_510x.jpg?v=1640334213 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_523x.jpg?v=1640334213 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_533x.jpg?v=1640334213 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_534x.jpg?v=1640334213 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_570x.jpg?v=1640334213 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_640x.jpg?v=1640334213 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_665x.jpg?v=1640334213 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_670x.jpg?v=1640334213 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_720x.jpg?v=1640334213 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_775x.jpg?v=1640334213 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_785x.jpg?v=1640334213 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_870x.jpg?v=1640334213 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 17) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload" srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_800x.jpg?v=1640334213"><img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_165x.jpg?v=1640334213 165w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_170x.jpg?v=1640334213 170w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_185x.jpg?v=1640334213 185w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_198x.jpg?v=1640334213 198w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_210x.jpg?v=1640334213 210w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_220x.jpg?v=1640334213 220w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_245x.jpg?v=1640334213 245w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_270x.jpg?v=1640334213 270w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_290x.jpg?v=1640334213 290w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_320x.jpg?v=1640334213 320w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_355x.jpg?v=1640334213 355w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_360x.jpg?v=1640334213 360w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_370x.jpg?v=1640334213 370w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_420x.jpg?v=1640334213 420w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_430x.jpg?v=1640334213 430w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_460x.jpg?v=1640334213 460w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_470x.jpg?v=1640334213 470w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_510x.jpg?v=1640334213 510w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_523x.jpg?v=1640334213 523w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_533x.jpg?v=1640334213 533w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_534x.jpg?v=1640334213 534w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_570x.jpg?v=1640334213 570w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_640x.jpg?v=1640334213 640w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_665x.jpg?v=1640334213 665w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_670x.jpg?v=1640334213 670w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_720x.jpg?v=1640334213 720w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_775x.jpg?v=1640334213 775w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_785x.jpg?v=1640334213 785w,//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_870x.jpg?v=1640334213 870w" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 17) Sample - Computers &amp; Accessories For Sale" size="870" loading="lazy" class="motion-reduce lazyload"><span class="data-lazy-loading"></span>-->
<!--                    <a class="card-link" href="https://new-ella-demo.myshopify.com/products/home-imperdiet-vellectus-eleifend-thiams?variant=39724526600282" title="(Product 17) Sample - Computers &amp; Accessories For Sale"></a>-->
<!--                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">-->
<!--                                <button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625105498" data-open-quick-view-popup="" data-product-handle="home-imperdiet-vellectus-eleifend-thiams">-->
<!--                                    <span class="visually-hidden">Quick View</span>-->
<!--                                    <span class="text">-->
<!--                                        Quick View-->
<!--                                    </span>-->
<!--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>-->
<!--                                </button>-->
<!--                            </div></div>-->
<!--<div class="card-quickview">-->
<!--                        <button type="button" title="Quick View" class="quickview-button button" data-product-id="6679625105498" data-open-quick-view-popup="" data-product-handle="home-imperdiet-vellectus-eleifend-thiams">-->
<!--                            <span class="visually-hidden">Quick View</span>-->
<!--                            Quick View-->
<!--                        </button>-->
<!--                    </div></div>-->
<!--        </div>-->
<!--        <div class="card-information">-->
<!--            <div class="card-information__wrapper text-left">-->
                
<!--                    <div class="wrapper-title-vendor  card-title-ellipsis">-->
                
<!--<a class="card-title link-underline card-title-ellipsis card-title-change" href="https://new-ella-demo.myshopify.com/products/home-imperdiet-vellectus-eleifend-thiams?variant=39724526600282" data-product-title="(Product 17) Sample - Computers &amp; Accessories For Sale" data-product-url="/products/home-imperdiet-vellectus-eleifend-thiams">-->
<!--                    <span class="text">-->
<!--                        (Product 17) Sample - Computers &amp; Accessories For Sale-->
                        
<!--                            <span data-change-title=""> - DarkOrange</span>-->
                        
<!--                    </span>-->
<!--                </a>-->

                
<!--                    </div>-->
                
<!--<div class="card-review clearfix halo-productReview">-->
<!--                        <span class="spr-badge" id="spr_badge_6679625105498" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i></span><span class="spr-badge-caption">No reviews</span>-->
<!--</span>-->

<!--                    </div><div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>-->
<!--<div class="card-price">-->
<!--                        <div class="price  price--on-sale ">-->
<!--    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="text">From</span> <span class="money">$79.00</span></span></dd>-->
<!--        </div>-->
<!--        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"><span class="money">$429.00</span></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$99.00</span></span></dd></div>-->
<!--        <small class="unit-price caption hidden">-->
<!--            <dt class="visually-hidden">Unit price</dt>-->
<!--            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>-->
<!--        </small>-->
<!--    </dl>-->
<!--</div>-->

<!--                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625105498">-->
<!--        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label data-with-one-option="39724526600282" data-quantity="1" class="swatch-label is-active" data-value="darkorange" data-variant-id="39724526600282" title="DarkOrange" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_800x.jpg?v=1640334213"><span class="pattern" style="background-color: darkorange; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/darkorange.png?123050)"></span>darkorange</label><span class="tooltip">DarkOrange-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label data-with-one-option="39724526633050" data-quantity="1" class="swatch-label" data-value="lightcoral" data-variant-id="39724526633050" title="LightCoral" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_800x.jpg?v=1640334213"><span class="pattern" style="background-color: lightcoral; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/lightcoral.png?123050)"></span>lightcoral</label><span class="tooltip">LightCoral-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label data-with-one-option="39724526665818" data-quantity="0" class="swatch-label" data-value="grey" data-variant-id="39724526665818" title="Grey" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-1_c7fc75f2-735e-41a4-9d82-004fe8244483_800x.jpg?v=1640334213"><span class="pattern" style="background-color: grey; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/grey.png?123050)"></span>grey</label><span class="tooltip">Grey-->
<!--</span></div></li></ul>-->
<!--    </div>-->

<!--<div class="wrapper__card show-wishlist show-mb"><div class="card-action">-->
<!--                            <form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="form-6679625105498-list-result" data-product-id="6679625105498" enctype="multipart/form-data"><input type="hidden" name="id" value="39724526600282">-->
<!--                    <input type="hidden" name="quantity" value="1">-->
<!--                    <button class="button button-ATC is-visible" type="submit" data-form-id="#form-6679625105498-list-result" data-btn-addtocart="">Add to cart</button></form>-->
<!--                        </div><div class="card-action__group card-list__hidden">-->
<!--    <div class="card-action">-->
<!--        <form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="form-6679625105498-list-resultlist" data-product-id="6679625105498" enctype="multipart/form-data"><input type="hidden" name="id" value="39724526600282">-->
<!--                            <input type="hidden" name="quantity" value="1">-->
<!--                            <button class="button button-ATC is-visible" type="submit" data-form-id="#form-6679625105498-list-resultlist" data-btn-addtocart="">Add to cart</button></form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card-action__group variants-popup card-list__hidden">-->
<!--    <div class="card-action variants-popup-form"></div>-->
<!--</div>-->
<!--<div class="card-product__group-item card-wishlist">-->
<!--                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="home-imperdiet-vellectus-eleifend-thiams" data-product-id="6679625105498">-->
<!--                                <span class="visually-hidden">Add to wishlist</span>-->
<!--                                <span class="text">-->
<!--                                    Add to wishlist-->
<!--                                </span>-->
<!--                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>-->
<!--                            </button>-->
<!--                        </div></div></div>-->
<!--    </div>-->
<!--</div>-->

<!--</div>-->
                        </div>
                    </div>
                    </div>
                </div></div>
    </div>
</div></form><div class="predictive-search predictive-search--header quickSearchResultsWrap" tabindex="-1" data-predictive-search="">
    <div class="predictive-search__loading-state"><svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle></svg></div>
</div>
<span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></predictive-search></div>
                                    </div>
                                </details>
                        </details-modal>
                        <!--<a href="https://new-ella-demo.myshopify.com/cart" class="header__icon header__icon--cart link link--text focus-inset cart-icon-bubble pr-10 h-100 stroke-icon hide-main-menu" data-cart-sidebar="">-->
                            <!--<svg viewBox="0 0 1024 1024" class="icon icon-cart w-h-26 stroke-w-10" xmlns="http://www.w3.org/2000/svg"><path class="path1" d="M409.6 1024c-56.464 0-102.4-45.936-102.4-102.4s45.936-102.4 102.4-102.4S512 865.136 512 921.6 466.064 1024 409.6 1024zm0-153.6c-28.232 0-51.2 22.968-51.2 51.2s22.968 51.2 51.2 51.2 51.2-22.968 51.2-51.2-22.968-51.2-51.2-51.2z"></path><path class="path2" d="M768 1024c-56.464 0-102.4-45.936-102.4-102.4S711.536 819.2 768 819.2s102.4 45.936 102.4 102.4S824.464 1024 768 1024zm0-153.6c-28.232 0-51.2 22.968-51.2 51.2s22.968 51.2 51.2 51.2 51.2-22.968 51.2-51.2-22.968-51.2-51.2-51.2z"></path><path class="path3" d="M898.021 228.688C885.162 213.507 865.763 204.8 844.8 204.8H217.954l-5.085-30.506C206.149 133.979 168.871 102.4 128 102.4H76.8c-14.138 0-25.6 11.462-25.6 25.6s11.462 25.6 25.6 25.6H128c15.722 0 31.781 13.603 34.366 29.112l85.566 513.395C254.65 736.421 291.929 768 332.799 768h512c14.139 0 25.6-11.461 25.6-25.6s-11.461-25.6-25.6-25.6h-512c-15.722 0-31.781-13.603-34.366-29.11l-12.63-75.784 510.206-44.366c39.69-3.451 75.907-36.938 82.458-76.234l34.366-206.194c3.448-20.677-1.952-41.243-14.813-56.424zm-35.69 48.006l-34.366 206.194c-2.699 16.186-20.043 32.221-36.39 33.645l-514.214 44.714-50.874-305.246h618.314c5.968 0 10.995 2.054 14.155 5.782 3.157 3.73 4.357 9.024 3.376 14.912z"></path></svg>-->
                            <!--<span class="visually-hidden">Cart</span>-->
                            <!--<div class="cart-count-bubble"><span class="text" aria-hidden="true" data-cart-count="">0</span><span class="visually-hidden">0 items</span>-->
                            <!--</div>-->
                        <!--</a>-->
                        </div>
            </div></div>
</div>
</sticky-header>


  

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "new-ella-demo",
        
        "sameAs": [
            "https:\/\/twitter.com\/shopify",
            "https:\/\/www.facebook.com\/shopify",
            "https:\/\/www.pinterest.com\/shopify\/",
            "https:\/\/www.instagram.com\/shopify\/",
            "",
            "https:\/\/www.snapchat.com\/add\/shopify",
            "",
            ""
        ],
        "url": "https:\/\/new-ella-demo.myshopify.com"
    }
</script>

<script>
    var clickMenuVertical = function() {
        if(!$('.vertical-menu').hasClass('vertical-menu__style_3')){
            $('.vertical-menu .categories-title__button').off('click.hideVertical').on('click.hideVertical', function() {
                $('.vertical-menu').toggleClass('vertical-menu__hide vertical-menu__open');
            });
        }
    }
    
    $(document).ready(function() {
        clickMenuVertical();
    });
</script> 
</div><div id="shopify-section-sections--14862425161818__header-mobile" class="shopify-section shopify-section-group-header-group section-header-mobile"><link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-menu-mobile.css" media="all" onload="this.media=&#39;all&#39;">
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-menu-mobile.css?v=142921020132518462881685700072" rel="stylesheet" type="text/css" media="all" /></noscript>

<sticky-header-mobile class="header-mobile" style="--bg-color: #ffffff; --p-top: 0px; --p-bottom: 0px">
    <div class="container">
        <div class="header-mobile__wrapper header-mobile--wrapper"><div class="header-mobile__item header-mobile__item--menu"><div class="header-mobile--icon item__mobile--hamburger" style="--i-color: #232323">
                                <button type="button" class="mobileMenu-toggle" data-mobile-menu="" aria-label="menu"><span class="mobileMenu-toggle__Icon"></span></button>
                            </div></div><div class="header-mobile__item header-mobile__item--search"><details-modal class="header__iconItem header__search" style="--i-color: #232323">
                                <details>
                                    <summary class="header__icon header__icon--search header__icon--summary link link--text focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Search" data-search-mobile="">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon-search-1 modal__toggle-open icon icon-search w-24 h-24"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="modal__toggle-close icon icon-close w-24 h-24"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg></span>
                                    </summary>
                                </details>
                            </details-modal>
                            </div>
                            <div class="header-mobile__item header-mobile__item--logo">
                                <div class="header-mobile--icon" style="--logo-font-size: 20px; --logo-font-weight: 900; --logo-color: #232323">
                                    <a href="https://new-ella-demo.myshopify.com/" class="header__heading-link focus-inset 2">
                                        <img src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->logo}}" loading="lazy" 
                                        width="65" height="14" class="header__heading-logo" alt="new-ella-demo" style="--width-logo-mb: 65px;"></a>
                                
                            </div></div><div class="header-mobile__item header-mobile__item--customer"><div class="header-mobile--icon" style="--i-color: #232323">
                                <a href="https://new-ella-demo.myshopify.com/account/login" class="header__icon header__icon--account link link--text focus-inset" data-open-auth-sidebar=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="presentation" class="icon icon-account"><path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 16 8 C 13.25 8 11 10.25 11 13 C 11 14.515625 11.707031 15.863281 12.78125 16.78125 C 10.53125 17.949219 9 20.300781 9 23 L 11 23 C 11 20.226563 13.226563 18 16 18 C 18.773438 18 21 20.226563 21 23 L 23 23 C 23 20.300781 21.46875 17.949219 19.21875 16.78125 C 20.292969 15.863281 21 14.515625 21 13 C 21 10.25 18.75 8 16 8 Z M 16 10 C 17.667969 10 19 11.332031 19 13 C 19 14.667969 17.667969 16 16 16 C 14.332031 16 13 14.667969 13 13 C 13 11.332031 14.332031 10 16 10 Z"></path></svg>
<span class="visually-hidden">Log in</span>
                                </a></div></div><div class="header-mobile__item header-mobile__item--cart"><div class="header-mobile--icon" style="--i-color: #232323; --color-bubble: #ffffff; --bg-bubble: #232323">
                                <a href="https://new-ella-demo.myshopify.com/cart" class="header__icon header__icon--cart link link--text focus-inset cart-icon-bubble" data-cart-sidebar=""><svg viewBox="0 0 30 30" class="icon icon-cart" enable-background="new 0 0 30 30"><g><g><path d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3    h2V8h6v3h2V8h4V28z"></path></g></g></svg>
<span class="visually-hidden">Cart</span>
                                    <div class="cart-count-bubble"><span class="text" aria-hidden="true" data-cart-count="">0</span><span class="visually-hidden">0 items</span>
                                    </div>
                                </a>
                            </div></div></div>
    </div>
</sticky-header-mobile>



</div>
<!-- END sections: header-group -->
            <h1 class="hidden">new-ella-demo</h1>
    
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "new-ella-demo",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https:\/\/new-ella-demo.myshopify.com\/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            },
            "url": "https:\/\/new-ella-demo.myshopify.com"
        }
    </script>

                
                <main id="MainContent" class="wrapper-body content-for-layout focus-none" role="main" tabindex="-1">
                    <div id="shopify-section-template--14613100560474__a118ae12-cc23-45be-9671-97c99fcc7fe8" class="shopify-section sections-rich-text"><link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-rte.css" media="all" onload="this.media=&#39;all&#39;">
<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-rich-text.css" media="all" onload="this.media=&#39;all&#39;">
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-rte.css?v=74468535300400368301673427934" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-rich-text.css?v=133778792104105756981685700097" rel="stylesheet" type="text/css" media="all" /></noscript>

<!--<div class="rich-text section-block-template--14613100560474__a118ae12-cc23-45be-9671-97c99fcc7fe8">-->
<!--  <div class="container">-->
<!--    <div class="rich-text__blocks text-center"><div class="rich-text__text rte" style="--color-text-style: #202020;--fontsize-text-style: 14px;--width-text-style: 800px;--margin-top-text-style: 0px"><div class="message">-->
<!--    <span style="display: inline-block; vertical-align: middle"><img src="{{URL::to('/')}}/public/template/icon-announcement-2.png" alt="BUY NOW, PAY LATER STARTING AT 0% APR" style="margin: -4px 16px 0 0;"></span>-->
<!--    <span style="display: inline-block; vertical-align: middle; font-weight: 500;">BUY NOW, PAY LATER STARTING AT 0% APR</span> <span class="btn" style="font-weight: 700; margin-left: 20px; padding: 2px 11px 2px 10px; border: 1px solid; letter-spacing: 0; color: #202020; background: #f5f5f5; border-color: #5f5f5f; border-radius: 3px; text-decoration: none;">LEARN MORE</span>-->
<!--</div></div></div>-->
<!--  </div>-->
<!--</div>-->
<style>.section-block-template--14613100560474__a118ae12-cc23-45be-9671-97c99fcc7fe8{background: #f5f5f5}@media (min-width: 1200px) {.section-block-template--14613100560474__a118ae12-cc23-45be-9671-97c99fcc7fe8 {padding-top: 25px;padding-bottom: 24px}}
    @media (min-width: 1025px) {}
    @media (min-width: 768px) and (max-width: 1199px) {.section-block-template--14613100560474__a118ae12-cc23-45be-9671-97c99fcc7fe8 {padding-top: 25px;padding-bottom: 25px}}
    @media (max-width: 767px) {.section-block-template--14613100560474__a118ae12-cc23-45be-9671-97c99fcc7fe8 {padding-top: 25px;padding-bottom: 25px}}
</style>
<script type="text/javascript">
    function homeMoreLess() {
        if ($('#rich-text__lessMore').length) {
            $('#rich-text__lessMore').on('click', function(){
                var moreText = $(this).data('more').trim();
                var lessText = $(this).data('less').trim();
                var _parent = $(this).parents('.rich-text__content');
                if ($(this).text().trim() == moreText) {
                    _parent.find('.rich-text__bottom').slideDown(200);
                    $(this).text(lessText);
                } else {
                    _parent.find('.rich-text__bottom').slideUp(200);
                    $(this).text(moreText);
                }
            })
        }
    }
    homeMoreLess();
</script>
</div>







@yield('content')












<!--<div class="rich-text section-block-template--14613100560474__1646796311fd63c1ac">-->
<!--  <div class="container">-->
<!--    <div class="rich-text__blocks text-center"><div class="rich-text__content rte" style="--color-content-style: #505050;--fontsize-content-style: 14px;--width-content-style: 1370px;--margin-top-content-style: 0px;--alignment-content-style: left;"><div class="rich-text__top"><p>Custom CMS Block - Phasellus volutpat magna id mauris sodales et ornare urna molestie. Mauris non sem tincidunt, hendrerit nisi quis honcus felis. Suspendisse tempus mi durna in mattis nisl egestas quis. Proin nisi justo consectetur sed lacus an bibendum commodo diam. Praesent vulputate arcu eros quis accumsan odio malesuada at. Nulla vel ante magna. Cras ultricies nulla porttitor metus cursus malesuada. Sed convallis tempor ante ac semperos.</p>-->
<!--<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis fermentum turpis diam, sed volutpat nibh sagittis eget. Phasellus eu justo est. Curabitur tortor magna, faucibus ut nunc euismod, placerat placerat arcu. Morbi vitae mauris consequat, feugiat velit suscipit, imperdiet nunc. Integer rhoncus sagittis tincidunt. Suspendisse finibus quam euismod est mollis, quis lobortis arcu consectetur. Mauris tincidunt ante molestie, tempor turpis vitae, fermentum magna. Vestibulum mattis hendrerit vulputate. Sed pulvinar accumsan ex, et vulputate eros sagittis sit amet. </p>-->
<!--<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p></div><div class="rich-text__bottom"><h5>What is Lorem Ipsum?</h5>-->
<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>-->
<!--                    <div class="btn--lessMore d-inline-block w-100" style="--margin_top_button-text-style: 40px;">-->
<!--                        <button type="button" class="button d-inline-block w-100" id="rich-text__lessMore" data-more="Read More" data-less="Read Less" style=" --fontsize-button-text-style: 14px;--fontweight-button-text-style:700;--color-button-text-style: #202020;--bg-button-text-style: #ffffff;--border-button-text-style: #a4a4a4;--color-button-text-hover-style: #202020;--bg-button-text-hover-style: #ffffff;--border-button-text-hover-style: #a4a4a4;--width-button-text-style: 175px;--padding_top_button-text-style: 7px;--padding_bottom_button-text-style: 7px">Read More</button>-->
<!--                    </div></div></div>-->
<!--  </div>-->
<!--</div>-->
<style>.section-block-template--14613100560474__1646796311fd63c1ac{background: #ffffff}@media (min-width: 1200px) {.section-block-template--14613100560474__1646796311fd63c1ac {padding-top: 35px;padding-bottom: 38px}}
    @media (min-width: 1025px) {}
    @media (min-width: 768px) and (max-width: 1199px) {.section-block-template--14613100560474__1646796311fd63c1ac {padding-top: 35px;padding-bottom: 38px}}
    @media (max-width: 767px) {.section-block-template--14613100560474__1646796311fd63c1ac {padding-top: 20px;padding-bottom: 23px}}
</style>
<script type="text/javascript">
    function homeMoreLess() {
        if ($('#rich-text__lessMore').length) {
            $('#rich-text__lessMore').on('click', function(){
                var moreText = $(this).data('more').trim();
                var lessText = $(this).data('less').trim();
                var _parent = $(this).parents('.rich-text__content');
                if ($(this).text().trim() == moreText) {
                    _parent.find('.rich-text__bottom').slideDown(200);
                    $(this).text(lessText);
                } else {
                    _parent.find('.rich-text__bottom').slideUp(200);
                    $(this).text(moreText);
                }
            })
        }
    }
    homeMoreLess();
</script>
</div>

                </main>
<div class="wrapper-footer"><!-- BEGIN sections: footer-group -->
<div id="shopify-section-sections--14862425227354__4c7f7df8-825b-408c-b60b-db088f7ff21d" class="shopify-section shopify-section-group-footer-group section-newsletter"><link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-newsletter-section.css" media="all" onload="this.media=&#39;all&#39;">
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-newsletter-section.css?v=150133467104030969531686016826" rel="stylesheet" type="text/css" media="all" /></noscript><style>
  @media (min-width: 1200px) {.section-block-sections--14862425227354__4c7f7df8-825b-408c-b60b-db088f7ff21d {padding-top: 45px;padding-bottom: 0px}}
  @media (min-width: 1025px) {}
  @media (min-width: 768px) and (max-width: 1199px) {.section-block-sections--14862425227354__4c7f7df8-825b-408c-b60b-db088f7ff21d {padding-top: 30px;padding-bottom: 0px}}
  @media (max-width: 767px) {.section-block-sections--14862425227354__4c7f7df8-825b-408c-b60b-db088f7ff21d {padding-top: 20px;padding-bottom: 0px}}
</style>
<div style="background-color:white; padding-bottom:50px; display:none;" class="newsletter-section section-block-sections--14862425227354__4c7f7df8-825b-408c-b60b-db088f7ff21d" id="newsletter-section-sections--14862425227354__4c7f7df8-825b-408c-b60b-db088f7ff21d" style="--footer-top-bg: #f5f5f5">
  <div class="container">
    <div class="section-content-wrapper" style="--justify-content: center">
          <div class="section-content  text-left flex-direction-column" style="--newsletter_form_justify_content: center"><h3 class="title text-left" style="--title-font-size: 20px;--title-font-size-mb: 16px;--title-font-weight: 700;--title-color: #191919;--title-margin-bottom: 0px;--title-margin-bottom-mb: 6px;--title-text-transform: none;--title-font-style: normal"><span class="text">SUBSCRIBE TO OUR NEWSLETTER</span></h3><div class="description text-left" style="--description-font-size: 14px;--description-font-size-mb: 14px;--description-color: #505050;--description-font-weight: 400;--description-margin-bottom: 23px;--description-line-height: 34px"><p>Get the latest updates on new products and upcoming sales</p></div><div class="section-form-wrapper text-left width-behavior-auto">
              <newsletter-form class="newsletter-section-form newsletter-section-block"><form method="post" action="https://new-ella-demo.myshopify.com/contact#NewsletterSection" id="NewsletterSection" accept-charset="UTF-8" class="newsletter-block newsletter-form"><input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="✓"><input type="hidden" name="contact[tags]" value="newsletter">
                  <div class="newsletter-form__field-wrapper" style="--placeholder-color: #b5b5b5;--input-background: #ffffff;--input-border-color: #d5d5d5;--form-gap: 15px;--input-max-width: 445px;--input-text-font-size: 13px;--input-border-radius: 30px"><div class="field">
                        <label class="field__label hiddenLabels" for="NewsletterForm--sections--14862425227354__4c7f7df8-825b-408c-b60b-db088f7ff21d">Your email</label>
                        <input id="NewsletterForm--sections--14862425227354__4c7f7df8-825b-408c-b60b-db088f7ff21d" type="email" name="contact[email]" class="field__input form-input-placeholder" value="" aria-required="true" autocorrect="off" autocapitalize="off" autocomplete="email" placeholder="enter your email address">
                      </div><button type="submit" class="button newsletter-form__button" name="commit" id="Subscribe-sections--14862425227354__4c7f7df8-825b-408c-b60b-db088f7ff21d" aria-label="Submit" style="--button-width: 180px;--button-font-size: 16px;--button-text-color: #ffffff;--button-border-color: #fd6506;--button-background: #fd6506;--button-text-color-hover: #ffffff;--button-border-color-hover: #232323;--button-background-hover: #232323;--button-text-transform: capitalize;--button-font-weight: 600">Subscribe</button>
                  </div>
                    <script>
                      $(document).ready(function () {
                        if (window.location.href.indexOf('newsletter&form_type=customer') > -1) {
                          var newsletterSuccessPopup = (function () {
                            var popup = $('.newsletter-success-modal');
                            var close = popup.find('.close');
                            var success = popup.find('.success');
                            var error = popup.find('.error');
                            var overlay = $('.background-overlay');
                            popup.show();
                            overlay.show();
                            error.show();
                            success.hide();
                            $.cookie('emailSubcribeModal', 'closed', {
                              expires: 1,
                              path: '/',
                            });
                            close.off('click').on('click', function () {
                              popup.fadeOut();
                              overlay.hide();
                            });
                            overlay.off('click').on('click', function () {
                              popup.fadeOut();
                              overlay.hide();
                            });
                          })();
                          var newURL = location.href.split('?')[0];
                          window.history.pushState('object', document.title, newURL);
                        }
                      });
                    </script></form></newsletter-form>
            </div>
          </div></div>
  </div>
</div>
<script>
  document.querySelectorAll('[data-open-newsletter-popup]').forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      document.body.classList.add("newsletter-show");
      setTimeout(() => {
        document.body.classList.add("show-newsletter-image");
      }, 700);
    })
  })
</script>

</div><div id="shopify-section-sections--14862425227354__footer-5" class="shopify-section shopify-section-group-footer-group"><link href="{{URL::to('/')}}/public/template/section-footer.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-list-payment.css" media="all" onload="this.media=&#39;all&#39;">
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-list-payment.css?v=14796597056156653981658317978" rel="stylesheet" type="text/css" media="all" /></noscript><style>.footer {--footer-heading-font-family: var(--font-family-2);--footer-heading-font-size : 16px;
      --footer-heading-font-weight : 700;
      --footer-heading-line-height : 26px;
      --footer-heading-letter-spacing : .02em;
      --footer-heading-text-transform : uppercase;--footer-link-font-family: var(--font-family-1);--footer-link-font-size : 14px;
      --footer-link-font-weight : 400;
      --footer-link-line-height : 34px;
      --footer-link-letter-spacing : .02em;
      --footer-link-text-transform : capitalize
    }
  .footer-block__item {margin-bottom: var(--block-margin-bottom)}
  .footer__content-top {padding-top: 50px;padding-bottom: 55px;}
  .footer-1 .list-social__item {margin-bottom: 15px}
  .footer-1 .footer-block__list-social .list-social {margin-left: 0}
  .footer-02 .footer__content-top {padding-top: 50px;padding-bottom: 55px}
  .footer-7 .footer__content-top {}
  .footer-7 .footer__content-text {background: }
  .footer-7 .footer__content-text .footer_text-wrapper p {color: }
  .footer-7 .footer__content-text .footer_text-wrapper a.button {color: ;border: 1px solid ;background-color: }
  .footer-7 .footer-block__details .rte h3,.footer-7 .footer-block__newsletter .footer-block__subheading .icon {fill: #202020}.footer__content-top{background: #f5f5f5}.footer-block__column .footer-block__heading,.footer-block__newsletter .footer-block__heading,.footer-block__newsletter .footer-block__subheading .text-store {color: #202020}.list-menu__item--link,.footer-block__details,.footer-block__details a,.footer-block__newsletter .footer-block__subheading,.footer-block__newsletter .footer-block__subheading a {color: #505050}@media (max-width: 767px){.footer-block__mobile .footer-block__heading{border-color: #202020}
        .footer-block__mobile .footer-block__heading:before,.footer-block__mobile .footer-block__heading:after{background-color: #202020}}
  @media (max-width: 550px){.footer-block__mobile .footer-block__heading{border-color: #202020}
              .footer-block__mobile .footer-block__heading:before,.footer-block__mobile .footer-block__heading:after{background-color: #202020}}
  @media (min-width: 1025px){
    .footer .container-full {padding-left: var(--spacing-l-r);padding-right: var(--spacing-l-r)}.list-menu__item--link:hover{color: #202020}.footer__content-top.footer__content-bg{background-attachment: fixed}.footer-7 .footer__content-text .footer_text-wrapper a.button:hover {color: ;border: 1px solid ;background-color: ;}
  }
  @media (min-width: 1800px){}
  @media (min-width: 767px) {
      .footer-7 .footer-block__newsletter .footer-block__subheading {margin-top: px}
  }
</style>


<style>
    @media only screen and (max-width: 1024px) {
        .contactus{
            width: 100% !important;
            margin-bottom: 30px !important;
        }
        .ourproducts{
            width: 100% !important;
            margin-bottom: 30px !important;
        }
        .linkusonfacebook{
            width: 100% !important;
            margin-bottom: 30px !important;
        }
        .ourlocation{
            width: 100% !important;
            margin-bottom: 30px !important;
        }
    }
    
    @media only screen and (max-width: 425px) {
        .footerdiv{
            margin-left: 0% !important;
            margin-right:0% !important;
    }
</style>


<footer class="footer footer-5" style="--spacing-l-r: 0px;">
    <div class="footer__content-top" style="background: #000!important;">
        <div class="container-fluid footerdiv" style="margin-left: 5%; margin-right: 5%;">
        <div class="halo-row column-6">
            <!--<div class="footer-block__item footer-block__column footer-block__link_list text-left " style="--block-custom-width: 25%;--block-margin-bottom: 0px">-->
            <!--  <div class="footer-block__mobile"><h2 class="footer-block__heading" data-toggle-column-footer="">Further Info.</h2><div class="footer-block__list">-->
            <!--        <ul class="list-unstyled"><li><a href="https://new-ella-demo.myshopify.com/pages/about-us-1" class="link link-underline list-menu__item--link"><span class="text">About</span></a></li><li><a href="https://new-ella-demo.myshopify.com/?fts=0#" class="link link-underline list-menu__item--link"><span class="text">Customer Service</span></a></li><li><a href="https://new-ella-demo.myshopify.com/?fts=0#" class="link link-underline list-menu__item--link"><span class="text">Reward Program</span></a></li><li><a href="https://new-ella-demo.myshopify.com/?fts=0#" class="link link-underline list-menu__item--link"><span class="text">Shipping &amp; Returns</span></a></li><li><a href="https://new-ella-demo.myshopify.com/?fts=0#" class="link link-underline list-menu__item--link"><span class="text">Privacy Policy</span></a></li><li><a href="https://new-ella-demo.myshopify.com/?fts=0#" class="link link-underline list-menu__item--link"><span class="text">Terms &amp; Conditions</span></a></li><li><a href="https://new-ella-demo.myshopify.com/blogs/blog-default" class="link link-underline list-menu__item--link"><span class="text">Blog</span></a></li></ul>-->
            <!--      </div></div>-->
            <!--</div>-->
                
            <style>
  .footer-block__text[style^="--block-custom-width: 100%"] > div {text-align: center}
  .footer-block__text[style^="--block-custom-width: 100%"] .image_logo {width: max-content;margin-left: auto;margin-right: auto}@media (max-width: 1200px) {.footer-block__newsletter .newsletter-form__field-wrapper {flex-wrap: wrap}
  }
  @media (max-width: 1024px) {.footer-block__newsletter .newsletter-form__field-wrapper {flex-wrap: nowrap}}
  @media (max-width: 767px) {.footer-block__text{margin-bottom:30px}.footer-block__text:not(.block__text_first){margin-top:25px}}
  @media (min-width: 768px) and (max-width: 1200px) {.column-5 .footer-block__item.footer-block__text{width:100%}.column-5 .footer-block__item.footer-block__text.block__text_first{width:34%}}
  .icon {
    fill: #ffffff!important;
    stroke: transparent!important;
}
</style>
    
            <div class="contactus footer-block__item footer-block__column footer-block__text block_text-- " style="--block-custom-width: 30%;--block-margin-bottom: 0px">
          <div class=""><div class="footer-block__details has-content-piece" style="--icon-color: ; --icon-size: 16px; --content-spacing: 12px">
              
              <!--CONTACT WITH US-->
              <div class="footer-block__mobile"><h2 class="footer-block__heading" data-toggle-column-footer="" style="color:white;">Contact with us</h2></div>
              
              <!--FOOTER LOGO & COMPANY NAME-->
              <div>
                <table border="0" style="margin-bottom: 20px !important; padding-left: 0px !important;">
                    <tr>
                        <td>
                            <img 
                                src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->icon}}" 
                                alt="{{$settings->name}}" 
                                height="50" 
                                class="header__heading-logo" style="margin: 0 auto!important;"
                            >
                        </td>
                        <td style="vertical-align: middle;">
                            <p style="font-size:25px!important; color:white!important; font-weight: bold; font-family: Monotype Corsiva; font-style: italic!important;">
                                {{$settings->name}}
                            </p> 
                        </td>
                    </tr>
                </table>
              </div>
      
      
      <!--<div class="image_logo" style="--margin-bottom: 15px">-->
      <!--    <img  class="ls-is-cached lazyloaded" alt="new-ella-demo" width="180" src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->altlogo}}">-->
      <!--  </div>-->
        <div class="rte">
            
            <div class="address-wrapper content-piece 12">
                <span class="icon" style="color:white!important; font-family: open sans !important; font-size: 16px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path>
                    </svg>
                </span>
                <div style="color:white; margin-left:15px;">
                    Address: <br><p style="color:white;">{!!$settings->address!!}</p>
                </div>
            </div>
            
            <div class="phone-wrapper content-piece">
                <span class="icon" style="color:white!important;">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" style="color:white!important;" role="img" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-7x">
                        <path fill="#000000" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
                    </svg>
                </span>
                <div>
                    <p style="color:white;">Telephone:&nbsp;<a href="tel+88{{$settings->tel}}" style="text-decoration:none !important; color:white;">{{$settings->tel}}</a></p>
                </div>
            </div>
            
            <div class="phone-wrapper content-piece">
                <span class="icon" style="color:white!important;">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" style="color:white!important;" role="img" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-7x">
                        <path fill="#000000" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
                    </svg>
                </span>
                <div>
                    <p style="text-decoration:none  !important; color:white;">Mobile:&nbsp;<a href="tel+88{{$settings->mobile}}" style="text-decoration:none !important; color:white;">{{$settings->mobile}}</a></p>
                </div>
            </div>
            
            <div class="phone-wrapper content-piece">
                <span class="icon" style="color:white!important;">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-7x">
                        <path fill="#000000" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path>
                    </svg>
                </span>
                <div>
                    <p style="text-decoration:none  !important; color:white;">Webmail:&nbsp;<a href="#" style="text-decoration:none !important; color:white;"> {{$settings->webmail}}</a></p>
                </div>
            </div>
            
            <div class="email-wrapper content-piece">
                <span class="icon" style="color:white!important;">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-7x">
                        <path fill="#000000" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path>
                    </svg>
                </span>
                <div>
                    <p style="color:white;">Email: <a href="mailto:{{$settings->email}}" style="text-decoration:none !important; ">
                        <span style="text-decoration:none  !important; color:white;">{{$settings->email}}</span></a></p>
                </div>
             </div>
             
            <div class="email-wrapper content-piece">
                <span class="icon" style="color:white!important;">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" style="color:white!important;" role="img" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-7x">
                        <path fill="#000000" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
                    </svg>
                </span>
                <div>
                    <p style="color:white;">Hotline: <a href="#" style="text-decoration:none !important;">
                        <span style="text-decoration:none; color:white;">{{$settings->hotline}}</span></a></p>
                </div>
             </div>
             
             
        </div>
    </div>
  </div>
<style>
    .footer-block__list-social.enable_bg_social .list-social__link.icon-facebook{background:#385a9a!important}.footer-block__list-social.enable_bg_social .list-social__link.icon-instagram{background:#3e739d!important}.footer-block__list-social.enable_bg_social .list-social__link.icon-pinterest,.footer-block__list-social.enable_bg_social .list-social__link.icon-tumblr,.footer-block__list-social.enable_bg_social .list-social__link.icon-youtube{background:#ec2327!important}.footer-block__list-social.enable_bg_social .list-social__link.icon-tiktok{background:#000!important}.footer-block__list-social.enable_bg_social .list-social__link.icon-snapchat{background:#e3da6d!important}.footer-block__list-social.enable_bg_social .list-social__link.icon-twitter{background:#31b1df!important}.footer-block__list-social.enable_bg_social .list-social__link.icon-vimeo{background:#4593d7!important}
    .footer-block__list-social .list-social__item{margin-right: 15px}   
    .footer-block__list-social .list-social__link:before {box-shadow: 0 0 0 2px #ffffff}

    .footer-block__list-social .list-social__link {color: #4b4b4b !important;background: #f5f5f5;border: 1px solid #c2c2c2;padding: 10px}

    .footer-block__list-social .list-social__link svg {fill: #4b4b4b !important;width: 16px !important;height: 16px !important}@media (min-width: 1025px){
        .footer-block__list-social .list-social__link:hover{color: #282828;border-color: #ffffff;background: #ffffff}
        .footer-block__list-social .list-social__link:hover svg{fill: #282828 !important}
    }
    @media (max-width: 1024px){}
</style>
</div>
    
    
            <!--OUR PRODUCTS-->
            <div class="ourproducts footer-block__item footer-block__column footer-block__link_list text-left " style="--block-custom-width: 20%;--block-margin-bottom: 0px">
          <div class="footer-block__mobile"><h2 class="footer-block__heading" data-toggle-column-footer="" style="color:white;">Our Products</h2>
          <div class="footer-block__list">
            <ul class="list-unstyled">
                <?php $cats=DB::table('cats')->where('parent','0')->get();?>
                @foreach($cats as $cat)
                <ul><li style="color: white;"><a href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" class="link link-underline list-menu__item--link"><span class="text" style="color:white;" style="font-family: Open Sans !important; font-size: 16px;">{{$cat->name}}</span></a></li></ul>
                @endforeach
            </ul>
            </div>
            </div>
        </div>
              
                
            <!--LIKE US ON FACEBOOK-->         
            <div class="linkusonfacebook footer-block__item footer-block__column footer-block__link_list text-left " style="--block-custom-width: 25%;--block-margin-bottom: 0px">
          <div class="footer-block__mobile"><h2 class="footer-block__heading" data-toggle-column-footer="" style="color:white;">Like us on Facebook</h2>
                <div class="footer-block__list">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbttexaccess&tabs=timeline&width=340&height=350&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=647568156406270" width="340" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    
    
            <!--OUR LOCATION-->
            <div class="ourlocation footer-block__item footer-block__column footer-block__link_list text-left " style="--block-custom-width: 25%;--block-margin-bottom: 0px">
            <div class="footer-block__mobile"><h2 class="footer-block__heading" data-toggle-column-footer="" style="color:white;">Our Location</h2>
                <div class="footer-block__list">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.24695761283917!2d90.40772173143576!3d23.749115220951044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b95028098fb1%3A0x7cb151444a0227a6!2sB.T.%20Tex.%20Access.!5e0!3m2!1sen!2sbd!4v1694245580054!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
            </div>
        </div>
    
            <style>
               .list-social__link .icon {
                fill: #000!important;
                stroke: transparent!important;
            }
            </style>
            
            <!--FOLLOW US & PAYMENT METHODS-->
            <div style="width:100%!important;">
                <div class="col-12 col-md-12 col-lg-12" footer-block__list-social" style="--margin-top: 80px">
                    <div class="item clearfix" style="text-align:center!important;">
                    <h3 class="footer-block__heading" style="color:white; text-transform: uppercase;">Follow us</h3>
                    <ul class="list-unstyled list-social clearfix" role="list">
                        <li class="list-social__item"><a href="{{$settings->link1}}" class="link link--text list-social__link icon-facebook"n style="color:black!important;">
                        <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="icon icon-facebook"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                        <span class="visually-hidden">Facebook</span></a></li>
                        <li class="list-social__item"><a href="{{$settings->link2}}" class="link link--text list-social__link icon-instagram"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram"><g><path d="M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152   c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M437,0H75C33.6,0,0,33.6,0,75v362   c0,41.4,33.6,75,75,75h362c41.4,0,75-33.6,75-75V75C512,33.6,478.4,0,437,0z M256,392c-74.399,0-135-60.601-135-135   c0-74.401,60.601-135,135-135s135,60.599,135,135C391,331.399,330.399,392,256,392z M421,122c-16.5,0-30-13.5-30-30s13.5-30,30-30   s30,13.5,30,30S437.5,122,421,122z M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z    M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152c-57.9,0-105,47.1-105,105   s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z"></path></g></svg><span class="visually-hidden">Instagram</span></a></li>
                        <li class="list-social__item"><a href="{{$settings->link3}}" class="link link--text list-social__link icon-pinterest"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 17 18"><path d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z"></path></svg>
                        <span class="visually-hidden">Pinterest</span></a></li>
                        <li class="list-social__item"><a href="{{$settings->link4}}" class="link link--text list-social__link icon-snapchat"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-snapchat" viewBox="0 0 50 50"><path d="M 46.773438 35.078125 C 40.96875 34.121094 38.316406 28.109375 38.230469 27.914063 C 38.21875 27.878906 38.191406 27.816406 38.175781 27.78125 C 38 27.429688 37.824219 26.933594 37.972656 26.582031 C 38.226563 25.980469 39.433594 25.597656 40.15625 25.367188 C 40.410156 25.285156 40.652344 25.210938 40.839844 25.136719 C 42.59375 24.441406 43.46875 23.535156 43.449219 22.433594 C 43.433594 21.546875 42.753906 20.734375 41.753906 20.382813 C 41.40625 20.234375 41.007813 20.160156 40.605469 20.160156 C 40.332031 20.160156 39.917969 20.199219 39.519531 20.382813 C 38.851563 20.695313 38.265625 20.863281 37.847656 20.882813 C 37.757813 20.878906 37.679688 20.871094 37.613281 20.859375 L 37.65625 20.171875 C 37.851563 17.0625 38.097656 13.1875 37.046875 10.832031 C 33.945313 3.890625 27.375 3.351563 25.433594 3.351563 L 24.550781 3.359375 C 22.613281 3.359375 16.054688 3.898438 12.960938 10.835938 C 11.910156 13.191406 12.152344 17.0625 12.351563 20.175781 L 12.359375 20.292969 C 12.371094 20.484375 12.382813 20.675781 12.394531 20.859375 C 11.960938 20.9375 11.113281 20.792969 10.234375 20.382813 C 9.039063 19.824219 6.886719 20.5625 6.589844 22.125 C 6.457031 22.816406 6.617188 24.128906 9.164063 25.132813 C 9.355469 25.210938 9.59375 25.285156 9.851563 25.367188 C 10.570313 25.597656 11.777344 25.976563 12.03125 26.582031 C 12.179688 26.933594 12.003906 27.429688 11.796875 27.855469 C 11.6875 28.109375 9.050781 34.121094 3.234375 35.078125 C 2.492188 35.199219 1.964844 35.855469 2.003906 36.613281 C 2.015625 36.8125 2.066406 37.011719 2.148438 37.207031 C 2.675781 38.445313 4.59375 39.296875 8.171875 39.878906 C 8.234375 40.089844 8.304688 40.402344 8.34375 40.574219 C 8.417969 40.929688 8.5 41.289063 8.609375 41.664063 C 8.714844 42.019531 9.078125 42.84375 10.210938 42.84375 C 10.554688 42.84375 10.929688 42.769531 11.332031 42.691406 C 11.925781 42.574219 12.667969 42.429688 13.621094 42.429688 C 14.152344 42.429688 14.699219 42.476563 15.25 42.566406 C 16.265625 42.734375 17.183594 43.386719 18.25 44.136719 C 19.914063 45.316406 21.800781 46.648438 24.726563 46.648438 C 24.804688 46.648438 24.882813 46.644531 24.957031 46.640625 C 25.0625 46.644531 25.171875 46.648438 25.28125 46.648438 C 28.207031 46.648438 30.09375 45.3125 31.761719 44.136719 C 32.777344 43.414063 33.738281 42.738281 34.757813 42.566406 C 35.308594 42.476563 35.855469 42.429688 36.386719 42.429688 C 37.304688 42.429688 38.03125 42.546875 38.679688 42.675781 C 39.140625 42.765625 39.507813 42.808594 39.847656 42.808594 C 40.605469 42.808594 41.1875 42.375 41.398438 41.648438 C 41.507813 41.28125 41.585938 40.925781 41.664063 40.566406 C 41.695313 40.433594 41.769531 40.097656 41.835938 39.875 C 45.414063 39.292969 47.332031 38.441406 47.855469 37.214844 C 47.941406 37.019531 47.988281 36.816406 48.003906 36.605469 C 48.042969 35.859375 47.515625 35.203125 46.773438 35.078125 Z"></path></svg><span class="visually-hidden">Snapchat</span></a></li>
                        <li class="list-social__item"><a href="#" class="link link--text list-social__link icon-twitter"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 18 15"><path d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z"></path></svg>
                        <span class="visually-hidden">Twitter</span></a></li>
                    </ul>
                </div> 
                <div class="item clearfix" style="margin-top:30px; text-align:center!important;">
                    <h3 class="footer-block__heading" data-toggle-column-footer="" style="color:white; text-transform: uppercase;">Payment Methods</h3>
                    <img src="{{URL::to('/')}}/public/template/payment-logo.png" width="600" height="60" style="margin:0 auto;">
                </div>
            </div>
        </div>

        </div>
        </div>
    </div>
    
    <style>
        .footer__content-bottom{background: #000}
        .footer__content-bottom {padding-top: 14px;padding-bottom: 35px;}
        .copyright__content{color: #fff}
    </style>
    
    <div class="footer__content-bottom">
        <!--<div class="container container-370">-->
        <!--<div class="footer-block__bottom  "><div class="footer__column-item footer__copyright">-->
        <div class="copyright__content container-fluid copyrighttext" style="--font-size: 14px; --text-color: #232323">
          <center><p style="color:white!important; font-family: Open Sans !important; font-size: 16px;">{{$settings->copyright}}<br>Developed By <a href="https://hostrare.com/" target="_blank" title="https://hostrare.com/"  style="color:white!important;">Hostrare Limited</a></p></center>
        </div>
        <!--</div><div class="footer__column footer__column--info">-->
        <!--<div class="footer-block__list-payment footer__column-item footer__payment" style="--margin-top: 0px"><span class="visually-hidden">Payment methods</span>-->
        <!--  <ul class="list list-payment clearfix" role="list">-->
        <!--<li class="list-payment__item visa"><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path></svg></li><li class="list-payment__item master"><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><circle fill="#EB001B" cx="15" cy="12" r="7"></circle><circle fill="#F79E1B" cx="23" cy="12" r="7"></circle><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path></svg></li><li class="list-payment__item american_express"><svg class="icon icon--full-color" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express"><title id="pi-american_express">American Express</title><g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"></path><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"></path></g></svg>-->
        <!--</li><li class="list-payment__item apple_pay"><svg class="icon icon--full-color" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0" width="38" height="24" viewBox="0 0 165.521 105.965" xml:space="preserve" aria-labelledby="pi-apple_pay"><title id="pi-apple_pay">Apple Pay</title><path fill="#000" d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z"></path><path fill="#FFF" d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875"></path><g><g><path fill="#000" d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858"></path><path fill="#000" d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048"></path></g><g><path fill="#000" d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z"></path><path fill="#000" d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z"></path><path fill="#000" d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z"></path></g></g></svg>-->
        <!--</li><li class="list-payment__item discover"><svg class="icon icon--full-color" viewBox="0 0 38 24" width="38" height="24" role="img" aria-labelledby="pi-discover" fill="none" xmlns="http://www.w3.org/2000/svg"><title id="pi-discover">Discover</title><path fill="#000" opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z" fill="#fff"></path><path d="M3.57 7.16H2v5.5h1.57c.83 0 1.43-.2 1.96-.63.63-.52 1-1.3 1-2.11-.01-1.63-1.22-2.76-2.96-2.76zm1.26 4.14c-.34.3-.77.44-1.47.44h-.29V8.1h.29c.69 0 1.11.12 1.47.44.37.33.59.84.59 1.37 0 .53-.22 1.06-.59 1.39zm2.19-4.14h1.07v5.5H7.02v-5.5zm3.69 2.11c-.64-.24-.83-.4-.83-.69 0-.35.34-.61.8-.61.32 0 .59.13.86.45l.56-.73c-.46-.4-1.01-.61-1.62-.61-.97 0-1.72.68-1.72 1.58 0 .76.35 1.15 1.35 1.51.42.15.63.25.74.31.21.14.32.34.32.57 0 .45-.35.78-.83.78-.51 0-.92-.26-1.17-.73l-.69.67c.49.73 1.09 1.05 1.9 1.05 1.11 0 1.9-.74 1.9-1.81.02-.89-.35-1.29-1.57-1.74zm1.92.65c0 1.62 1.27 2.87 2.9 2.87.46 0 .86-.09 1.34-.32v-1.26c-.43.43-.81.6-1.29.6-1.08 0-1.85-.78-1.85-1.9 0-1.06.79-1.89 1.8-1.89.51 0 .9.18 1.34.62V7.38c-.47-.24-.86-.34-1.32-.34-1.61 0-2.92 1.28-2.92 2.88zm12.76.94l-1.47-3.7h-1.17l2.33 5.64h.58l2.37-5.64h-1.16l-1.48 3.7zm3.13 1.8h3.04v-.93h-1.97v-1.48h1.9v-.93h-1.9V8.1h1.97v-.94h-3.04v5.5zm7.29-3.87c0-1.03-.71-1.62-1.95-1.62h-1.59v5.5h1.07v-2.21h.14l1.48 2.21h1.32l-1.73-2.32c.81-.17 1.26-.72 1.26-1.56zm-2.16.91h-.31V8.03h.33c.67 0 1.03.28 1.03.82 0 .55-.36.85-1.05.85z" fill="#231F20"></path><path d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z" fill="url(#pi-paint0_linear)"></path><path opacity=".65" d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z" fill="url(#pi-paint1_linear)"></path><path d="M36.57 7.506c0-.1-.07-.15-.18-.15h-.16v.48h.12v-.19l.14.19h.14l-.16-.2c.06-.01.1-.06.1-.13zm-.2.07h-.02v-.13h.02c.06 0 .09.02.09.06 0 .05-.03.07-.09.07z" fill="#231F20"></path><path d="M36.41 7.176c-.23 0-.42.19-.42.42 0 .23.19.42.42.42.23 0 .42-.19.42-.42 0-.23-.19-.42-.42-.42zm0 .77c-.18 0-.34-.15-.34-.35 0-.19.15-.35.34-.35.18 0 .33.16.33.35 0 .19-.15.35-.33.35z" fill="#231F20"></path><path d="M37 12.984S27.09 19.873 8.976 23h26.023a2 2 0 002-1.984l.024-3.02L37 12.985z" fill="#F48120"></path><defs><lineargradient id="pi-paint0_linear" x1="21.657" y1="12.275" x2="19.632" y2="9.104" gradientUnits="userSpaceOnUse"><stop stop-color="#F89F20"></stop><stop offset=".25" stop-color="#F79A20"></stop><stop offset=".533" stop-color="#F68D20"></stop><stop offset=".62" stop-color="#F58720"></stop><stop offset=".723" stop-color="#F48120"></stop><stop offset="1" stop-color="#F37521"></stop></lineargradient><lineargradient id="pi-paint1_linear" x1="21.338" y1="12.232" x2="18.378" y2="6.446" gradientUnits="userSpaceOnUse"><stop stop-color="#F58720"></stop><stop offset=".359" stop-color="#E16F27"></stop><stop offset=".703" stop-color="#D4602C"></stop><stop offset=".982" stop-color="#D05B2E"></stop></lineargradient></defs></svg></li><li class="list-payment__item paypal"><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal"><title id="pi-paypal">PayPal</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"></path><path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"></path><path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"></path></svg></li><li class="list-payment__item shopify_pay"><svg class="icon icon--full-color" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-shopify_pay"><title id="pi-shopify_pay">Shop Pay</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000"></path><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z" fill="#5A31F4"></path><path d="M21.382 9.713c0 1.668-1.177 2.858-2.821 2.858h-1.549a.133.133 0 00-.12.08.127.127 0 00-.01.049v2.192a.129.129 0 01-.13.129h-1.084a.13.13 0 01-.13-.13V6.986a.127.127 0 01.08-.12.129.129 0 01.05-.01h2.9c1.637 0 2.814 1.19 2.814 2.858v-.001zm-1.352 0c0-.958-.658-1.658-1.55-1.658h-1.468a.13.13 0 00-.13.13v3.05a.127.127 0 00.038.092.129.129 0 00.092.038h1.468c.892.005 1.55-.695 1.55-1.652zm1.674 3.791a1.527 1.527 0 01.647-1.317c.423-.316 1.084-.48 2.055-.514l1.033-.036v-.303c0-.607-.41-.863-1.068-.863-.658 0-1.075.231-1.17.61a.127.127 0 01-.125.09h-1.022a.13.13 0 01-.126-.092.125.125 0 01-.004-.055c.152-.898.904-1.58 2.494-1.58 1.692 0 2.303.783 2.303 2.276v3.172a.13.13 0 01-.132.129h-1.03a.13.13 0 01-.13-.13v-.236a.096.096 0 00-.061-.091.1.1 0 00-.107.022c-.31.334-.808.575-1.607.575-1.175 0-1.95-.607-1.95-1.657zm3.735-.687v-.246l-1.339.07c-.705.036-1.115.326-1.115.816 0 .444.376.69 1.034.69.893 0 1.42-.48 1.42-1.33zm2.316 4.6v-.919a.13.13 0 01.049-.1.132.132 0 01.108-.027c.158.029.318.044.479.044a1.229 1.229 0 001.245-.876l.067-.211a.133.133 0 000-.088l-2.145-5.471a.13.13 0 01.06-.165.13.13 0 01.062-.015h1.04a.132.132 0 01.123.085l1.456 3.859a.131.131 0 00.125.088.133.133 0 00.125-.088l1.265-3.848a.13.13 0 01.126-.09h1.076a.134.134 0 01.132.116.134.134 0 01-.008.063l-2.295 6.076c-.528 1.413-1.433 1.773-2.43 1.773a1.959 1.959 0 01-.561-.066.132.132 0 01-.1-.14h.001zM8.57 6.4a5.363 5.363 0 00-3.683 1.427.231.231 0 00-.029.31l.618.839a.236.236 0 00.362.028 3.823 3.823 0 012.738-1.11c2.12 0 3.227 1.584 3.227 3.15 0 1.7-1.163 2.898-2.835 2.921-1.292 0-2.266-.85-2.266-1.974a1.908 1.908 0 01.713-1.48.231.231 0 00.033-.324l-.65-.815a.236.236 0 00-.339-.034 3.43 3.43 0 00-.942 1.183 3.39 3.39 0 00-.337 1.47c0 1.935 1.655 3.452 3.775 3.464h.03c2.517-.032 4.337-1.884 4.337-4.415 0-2.247-1.667-4.64-4.752-4.64z" fill="#fff"></path></svg></li></ul>-->
        <!--</div>-->
    </div>
    
</footer>

    <script type="text/javascript">
  function initDropdownColumnsFooter() {
    var footerColumnTitle = document.querySelectorAll('.footer-5 [data-toggle-column-footer]');
    if (footerColumnTitle.length > 0) {
      for (i = 0; i < footerColumnTitle.length; i++) {
        (function (i) {
          footerColumnTitle[i].addEventListener('click', function (event) {
            var $this = event.target;
            if ($this.classList.contains('is-clicked')) {
              $this.classList.remove('is-clicked');
            } else {
              $this.classList.add('is-clicked');
            }
          });
        })(i);
      }
    }
  }
  initDropdownColumnsFooter();
</script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/public/template/slick/slick.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.brandslider').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 0,
          centerMode: true,
          centerPadding: '60px',
          speed:2000,
          cssEase: 'linear',
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 6
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2
              }
            }
          ]
        });
        
        $('.slider-for').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          fade: true,
          autoplay: true,
          autoplaySpeed: 2000,
          asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.slider-for',
          dots: false,
          centerMode: true,
          focusOnSelect: true
        });
        
        $('.relatedproduct').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          centerMode: true,
          centerPadding: '60px',
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 6
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2
              }
            }
          ]
        });
    });
  </script>
    <script>
        $(document).ready(function () {
        $("#floatingcart").hide();
      $("#quotation, #floatingcart").mouseenter(function(){
        $("#floatingcart").show(); 
      });
    
      $("#quotation, #floatingcart").mouseleave(function(){
        $("#floatingcart").hide(); 
      });
    });
    </script>
 

<!--</div>-->
<!-- END sections: footer-group -->
<!--</div>-->

</body>
</html>

