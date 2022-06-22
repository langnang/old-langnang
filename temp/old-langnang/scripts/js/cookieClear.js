/**
 * 清除Cookie
 * 通过使用document.cookie访问cookie并将其清除，可以轻松清除网页中存储的所有cookie。
 * @returns 
 */
const cookieClear = () => document.cookie.split(';').forEach(cookie => document.cookie = cookie.replace(/^ +/, '').replace(/=.*/, `=;expires=${new Date(0).toUTCString()};path=/`));

