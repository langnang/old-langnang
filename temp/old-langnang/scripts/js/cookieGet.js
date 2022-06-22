/**
 * 获取 Cookie 值
 * @param {String} name 
 * @returns {String} 
 */
const cookieGet = name => `; ${document.cookie}`.split(`; ${name}=`).pop().split(';').shift();