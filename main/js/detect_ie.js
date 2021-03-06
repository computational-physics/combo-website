function getInternetExplorerVersion()
// Returns the version of Internet Explorer or a -1
// (indicating the use of another browser).
{
  var rv = -1; // Return value assumes failure.
  if (navigator.appName == 'Microsoft Internet Explorer')
  {
    var ua = navigator.userAgent;
    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
    if (re.exec(ua) != null)
      rv = parseFloat( RegExp.$1 );
  }
  return rv;
}
function checkVersion()
{
  var msg = "";
  var ver = getInternetExplorerVersion();

  if ( ver > -1 )
  {
    if ( ver < 9.0 ) 
    {
      msg = "You may encounter some layout issue when using IE8 or earlier versions. ";
       alert( msg );
    }
  }
}
$(function(){checkVersion()});