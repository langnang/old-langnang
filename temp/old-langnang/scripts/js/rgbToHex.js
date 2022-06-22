/**
 * 颜色RGB转十六进制
 * @param {Number} r 
 * @param {Number} g 
 * @param {Number} b 
 * @returns {String}
 */
const rgbToHex = (r, g, b) => "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);