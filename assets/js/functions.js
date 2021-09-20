/**
 * Sets the value of the cookie language and reloads the navigator
 * @param {[string]} language value of the cookie language (en/fr)
 */
function setCookie(language) {
  var cookie = "language=" + language;
  document.cookie = cookie;
  console.log(getCookie(language));
  window.location.reload(false);
}

/**
 * Return the value of the cookie according to its name
 * @param  {[string]} cname name of the cookie
 * @return {[string]}       value of the cookie
 */
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var cookie = decodedCookie.split(';');
  return cookie[0].replace("language=", "");
}
