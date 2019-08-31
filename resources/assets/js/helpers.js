/**
 * Get a config option by path
 *
 * @param {String} path
 * @param {*} defValue
 * @returns {*}
 */
window.config = function (path, defValue = null) {
  return _.get(window.adminConfig, path, defValue);
};
