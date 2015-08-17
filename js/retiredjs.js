



// PureChat Tracking Code
(function () { var done = false;var script = document.createElement('script');script.async = true;script.type = 'text/javascript';script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';document.getElementsByTagName('HEAD').item(0).appendChild(script);script.onreadystatechange = script.onload = function (e) {if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {var w = new PCWidget({ c: '4d5dd09b-94d7-462a-8558-4aa34913a640', f: true });done = true;}};})();




// Intercom.io Tracking Code
  window.intercomSettings = {
        // TODO: The current logged in user's full name
        name: "John Doe",
        // TODO: The current logged in user's email address.
        email: "john.doe@example.com",
        // TODO: The current logged in user's sign-up date as a Unix timestamp.
        created_at: 1234567890,
        app_id: "z0vu62e0"
    };

(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/z0vu62e0';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
