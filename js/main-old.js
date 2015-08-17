// Google Analytics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38108268-1']);
  _gaq.push(['_setDomainName', 'resmancloud.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


// Hubspot Analytics Tracking Code
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/423830.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);


// Kissmetrics Tracking Code
var _kmq = _kmq || [];
var _kmk = _kmk || 'ca997539ef796c14f72ac0659bd82e789792192c';
function _kms(u){
  setTimeout(function(){
    var d = document, f = d.getElementsByTagName('script')[0],
    s = d.createElement('script');
    s.type = 'text/javascript'; s.async = true; s.src = u;
    f.parentNode.insertBefore(s, f);
  }, 1);
}
_kms('//i.kissmetrics.com/i.js');
_kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');


// Olark Tracking Code
/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('1667-572-10-9104');/*]]>*/


// Hotjar Tracking Code
    (function(f,b){
        var c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:17016, hjsv:3};
        c=b.createElement("script");c.async=1;
        c.src="//static.hotjar.com/c/hotjar-17016.js?sv=3";
        b.getElementsByTagName("head")[0].appendChild(c);
    })(window,document);



// Woopra Tracking Code
(function(){
        var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call","trackForm","trackClick"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/w.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
})("woopra");

woopra.config({
    domain: 'resmancloud.com'
});
woopra.track();





// STUFF
function init() {

    // CAROUSEL
    $('#carousel').carousel({
        interval: 7000
    });

    $('#tour-carousel').carousel({
        interval: false
    });

    $('#tour-carousel-5').carousel({
        interval: false
    });

    $('.middle-button').popover({
        trigger: 'hover'
    })

    $('.section.tour-banner img').popover({
        trigger: 'hover'
    })

    $('#about-group img').tooltip();

}

// CONTEST FORM
function sendContestRequest() {

    var data = {},
        button = $('form button');
    data.name = $('#formName');
    data.email = $('#formEmail');
    data.phone = $('#formPhone');
    data.units = $('#formUnits');
    data.company = $('#formCompany');
    data.role = $('#formRole');
    data.software = $('#formSoftware');
    data.needs = $('#formNeeds');

    button.html('<img src="../img/loader.GIF">');

    if (validateForm(data)) {
        var send = {
            'name': data.name.val(),
            'email': data.email.val(),
            'phone': data.phone.val(),
            'units': data.units.val(),
            'company': data.company.val(),
            'role': data.role.val(),
            'software': data.software.val(),
            'needs': data.needs.val()
        };

         $.post('../php/contest-registration.php', send, function(response) {
             $('.well-content').html('<h1 class="light text-center">' +
                     'Thank You!' +
                     '</h1>' +
                     '<p class="lead text-center">' +
                     'Make sure you stop by the ResMan booth (booth 1415) to pick up your registration code!</p>')

                 .parent().css({
                     height: 655
                 }).animate({
                     height: 275
                 }, 400);
             $('.required-fields').css('display', 'none');

         })
         .fail(function(XMLHttpRequest, textStatus, errorThrown) {
            alert(errorThrown);
         });
    } else {
        button.html('Submit');
    }
}

// REQUEST DEMO FORM
function sendRequest() {

    var data = {},
        button = $('form button');
    data.name = $('#formName');
    data.email = $('#formEmail');
    data.phone = $('#formPhone');
    data.units = $('#formUnits');
    data.company = $('#formCompany');
    data.role = $('#formRole');
    data.software = $('#formSoftware');
    data.needs = $('#formNeeds');

    button.html('<img src="../img/loader.GIF">');

    if (validateForm(data)) {
        var send = {
            'name': data.name.val(),
            'email': data.email.val(),
            'phone': data.phone.val(),
            'units': data.units.val(),
            'company': data.company.val(),
            'role': data.role.val(),
            'software': data.software.val(),
            'needs': data.needs.val()
        };

         $.post('../php/request-demo.php', send, function(response) {
             $('.well-content').html('<h1 class="light text-center">' +
                     'Thank You!' +
                     '</h1>' +
                     '<p class="lead text-center">' +
                     'We\'ll get in contact with you within 24 hours.  Watch a short demo of ResMan while you wait:</p>' +
                     '<h2 class="text-center">' +
                     '<a class="fancybox-media" href="https://vimeo.com/90149880">Click here to see the demo</a>' +
                     '</h2>')

                 .parent().css({
                     height: 755
                 }).animate({
                     height: 275
                 }, 400);
             $('.required-fields').css('display', 'none');

         })
         .fail(function(XMLHttpRequest, textStatus, errorThrown) {
            alert(errorThrown);
         });
    } else {
        button.html('Submit');
    }
}

var validateForm = function(data) {

    data.name.error = false;
    data.email.error = false;
    data.phone.error = false;
    data.units.error = false;
    data.company.error = false;

    // name
    if (data.name.val().length >= 2) {
        data.name.parent().removeClass('has-error');
        data.name.siblings('.error-message').css('display', 'none')
        data.name.error = false;
    } else {
        data.name.parent().addClass('has-error');
        data.name.siblings('.error-message').css('display', 'block')
        data.name.error = true;
    }

    // email
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(data.email.val())) {
        data.email.parent().removeClass('has-error');
        data.email.siblings('.error-message').css('display', 'none');
        data.email.error = false;
    } else {
        data.email.parent().addClass('has-error');
        data.email.siblings('.error-message').css('display', 'block');
        data.email.error = true;
    }

    // phone
    var test_phone = data.phone.val().replace(/\D/g,'');
    if (test_phone.length >= 10) {
        data.phone.parent().removeClass('has-error');
        data.phone.siblings('.error-message').css('display', 'none');
        data.phone.error = false;
    } else {
        data.phone.parent().addClass('has-error');
        data.phone.siblings('.error-message').css('display', 'block');
        data.phone.error = true;
    }

    // units
    if (data.units.val().length > 0 && data.units.val() >= 0) {
        data.units.parent().removeClass('has-error');
        data.units.siblings('.error-message').css('display', 'none');
        data.units.error = false;
    } else {
        data.units.parent().addClass('has-error');
        data.units.siblings('.error-message').css('display', 'block');
        data.units.error = true;
    }

    // company
    if (data.company.val().length >= 2) {
        data.company.parent().removeClass('has-error');
        data.company.siblings('.error-message').css('display', 'none');
        data.company.error = false;
    } else {
        data.company.parent().addClass('has-error');
        data.company.siblings('.error-message').css('display', 'block');
        data.company.error = true;
    }

    if (data.name.error ||
        data.email.error ||
        data.phone.error ||
        data.units.error ||
        data.company.error) {
        $('.master-error').css('display', 'block');
        return false;
    } else {
        $('.master-error').css('display', 'none');
        return true;
    }
}

// BROWSER VERIFICATION
var $buoop = {
    vs: {i:6,i:7,i:8},
    test: false };

$buoop.ol = window.onload;
window.onload=function(){
    try {if ($buoop.ol) $buoop.ol();}catch (e) {}
    var e = document.createElement("script");
    e.setAttribute("type", "text/javascript");
    e.setAttribute("src", "//browser-update.org/update.js");
    document.body.appendChild(e);
}


// NOTY NOTIFICATION SUPPORT

//if (top.location.pathname === '/'){
//    var n = noty({
//        layout: 'bottom',
//        type: 'warning',
//        text: '<a href="http://blog.resmancloud.com/resman-congratulates-our-naa-give-away-winner/" style="text-decoration:none; color:#B88716;">And the winner of the NAA 2014 3D Printer Contest is...</a>', // can be html or string
//        timeout: false,
//        animation: {
//            open: {height: 'toggle'},
//            close: {height: 'toggle'},
//            easing: 'swing',
//            template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
//            speed: 700 // opening & closing animation speed
//        },
//        closeWith: ['button'],
//
//    });
//}




$(document).ready(function() {
    init();
});
