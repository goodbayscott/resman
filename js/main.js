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


// Hotjar Tracking Code
    (function(f,b){
        var c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:17016, hjsv:3};
        c=b.createElement("script");c.async=1;
        c.src="//static.hotjar.com/c/hotjar-17016.js?sv=3";
        b.getElementsByTagName("head")[0].appendChild(c);
    })(window,document);


// Zopim chat

    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="//v2.zopim.com/?3CkVXnsLspb6if1LPCdCZN2aIzh5QBme";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

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


// MASON

$(document).ready(function() {
    $("#grid-a").mason({
        itemSelector: '.boxy',
        ratio: 2,
        sizes: [
            [1,1],
            //[2,2],
            //[2,1]
        ],
        promoted: [
            ['large', 2, 2],
            ['tall', 1, 3],
            ['small', 1, 1],
            ['medium', 1, 2],
            ['fill', 2, 1]
        ],
        columns: [
            [0,480,5],
            // [480,780,2],
            // [780,1080,3],
            // [1080,1320,4],
            //[1320,1680,5]
        ],
        filler: {
            itemSelector: '.filler',
            filler_class: 'mason-filler'
        },
        gutter: 5,
        layout: 'fluid'
        },function(){
    console.log("COMPLETE!")
    });
});

//INTEGRATION MENU

$(document).ready(function(){
    //initialize the isotope
    var $container = $('.isotope-active');

    $.extend( $.Isotope.prototype, {

        _categoryRowsReset : function() {
          this.categoryRows = {
            x : 0,
            y : 0,
            height : 0,
            currentCategory : null
          };
        },

        _categoryRowsLayout : function( $elems ) {
          var instance = this,
              containerWidth = this.element.width(),
              sortBy = this.options.sortBy,
              props = this.categoryRows;

          $elems.each( function() {
            var $this = $(this),
                atomW = $this.outerWidth(true),
                atomH = $this.outerHeight(true),
                category = $.data( this, 'isotope-sort-data' )[ sortBy ],
                x, y;

            if ( category !== props.currentCategory ) {
              // new category, new row
              props.x = 0;
              props.height += props.currentCategory ? instance.options.categoryRows.gutter : 0;
              props.y = props.height;
              props.currentCategory = category;
            } else if ( props.x !== 0 && atomW + props.x > containerWidth ) {
              // if this element cannot fit in the current row
              props.x = 0;
              props.y = props.height;
            }

            // position the atom
            instance._pushPosition( $this, props.x, props.y );

            props.height = Math.max( props.y + atomH, props.height );
            props.x += atomW;

          });
        },

        _categoryRowsGetContainerSize : function () {
          return { height : this.categoryRows.height };
        },

        _categoryRowsResizeChanged : function() {
          return true;
        }

      });

    $container.isotope({
        itemSelector: '.box-tile',
        layoutMode: 'fitRows',
        animationEngine: 'jquery',
        transformsEnabled: false,
        categoryRows: {
            gutter: 20
        },
        getSortData: {
            category: function($elem){
                return $($elem).attr('data-category');
            }
        },
        sortBy: 'category',
    });

    //this code handles the search functionality
    var qsRegex;
    var filters = {};
    var allAnchors = $('.nav-list a.category');
    var $quicksearch = $('.form-control').keyup( $.debounce(200,function(){
        qsRegex = new RegExp(
            $quicksearch.val(), 'gi');
            $('.isotope-active').isotope({filter: function(){
                return qsRegex ? $(this).text().match( qsRegex ) : true;
            }});
    }));


    //this code handles the hash changes
    $('.nav-list a.category').on('click',function(){
        var $this = $(this);
        var group = $('.nav-list').attr('data-group');
        var filterGroup = filters[group];
        if(!filterGroup){
            filterGroup = filters[group] = [];
        }
        //check if All is pressed
        var isAll = $this.hasClass('all');
        if(isAll) {
            allAnchors.removeClass('pressed');
            $this.siblings().removeClass('pressed');
            Array.prototype.remove = function(from, to){
                var rest = this.slice((to || from) + 1 || this.length);
                this.length = from < 0 ? this.length + from : from;
                return this.push.apply(this, rest);
            };
            filters[group].remove(0,-1);
        }
        //check if category is already clicked
        var index = $.inArray('.'+$this.attr('data-sort'), filterGroup);
        //if it isn't, push it to the array
        if(!isAll && index == -1){
            $('.nav-list a.category.all').removeClass('pressed');
            filters[group].push('.'+$this.attr('data-sort'));
        } else if(!isAll){  //if it is, splice it out
            filters[group].splice(index, 1);
        }

        //check if it has been clicked
        if($this.hasClass('pressed')){
            $this.removeClass('pressed');
        } else {
            $this.addClass('pressed');
        }

        var filterValue = concatValues(filters);
        var comboFilter = getComboFilter(filters);

        //ISOTOPE COMBINATION FILTER!
        $container.isotope({filter: comboFilter});

        return false;
    });

    function concatValues( obj ) {
      var value = '';
      for ( var prop in obj ) {
        value += obj[ prop ];
      }
      return value;
    }

    function getComboFilter( filters ) {
        var i = 0;
        var comboFilters = [];
        var message = [];
        for ( var prop in filters ) {
            message.push( filters[ prop ].join(' ') );
            var filterGroup = filters[ prop ];
            // skip to next filter group if it doesn't have any values
            if ( !filterGroup.length ) {
                continue;
            }
            if ( i === 0 ) {
                // copy to new array
                comboFilters = filterGroup.slice(0);
            }
            else {
                var filterSelectors = [];
                // copy to fresh array
                var groupCombo = comboFilters.slice(0); // [ A, B ]
                // merge filter Groups
                for (var k=0, len3 = filterGroup.length; k < len3; k++) {
                    for (var j=0, len2 = groupCombo.length; j < len2; j++) {
                        filterSelectors.push( groupCombo[j] + filterGroup[k] ); // [ 1, 2 ]
                    }
                }
                // apply filter selectors to combo filters for next group
                comboFilters = filterSelectors;
            }
            i++;
        }
        comboFilters.sort();
        var comboFilter = comboFilters.join(', ');
        return comboFilter;
    }

    //on page load
    // $(window).load(function(){
    //     window.location.hash = '#all';
    //     $(window).trigger('hashchange');
    // })

    //add/remove class from checkbox
    // $('.nav-list a.category').click(function(){
    //     $(this).toggleClass('pressed');

    // });

});



$(document).ready(function() {
    init();
});
