jQuery(window).load(function() {
 
    
    
    jQuery.get( "/gdpr-location.php", function( data ) {
      
        if(data.gdpr){
            //Visitor from European Union
            
           
            
            //show the gdpr notification 
            gdprCookieNotice({
                locale: 'en', //This is the default value
                timeout: 500, //Time until the cookie bar appears
                expiration: 365, //This is the default value, in days
                domain: 'www.sursadevest.ro', //If you run the same cookie notice on all subdomains, define the main domain starting with a .
                implicit: true, //Accept cookies on scroll
                statement: 'https://www.sursadevest.ro/politica-de-confidentialitate/', //Link to your cookie statement page
                performance: [], //Cookies in the performance category.
                analytics: ['_ga','_gid','_gat','tk_ai'], //Cookies in the analytics category.
                marketing: ['_clsk','_clck',''] //Cookies in the marketing category.
});
            
            
            
            
        }else{
            var value = {performance: true, analytics: true, marketing: true};         
            var event = new CustomEvent("gdprCookiesEnabled", {detail: value});
            document.dispatchEvent(event);
        }
  });
    
});