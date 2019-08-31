export default {
  data: function() {
    return {
      errors: {},
    }
  },
  methods: {
    /**
     * @param {*} error
     * @param {Function} customErrorHandler
     * @param {*} form
     */
    handleError(error, customErrorHandler = null, form = null) {
      if (_.isFunction(customErrorHandler) && customErrorHandler(error)) {
        return;
      }

      if (this.isValidationError(error)) {
        return this.reportValidationError(error, form);
      }
      if (this.isAuthenticationError(error)) {
        return this.reportAuthenticationError(error);
      }
      if (this.isApiError(error)) {
        return this.reportApiError(error);
      }
      if (this.isHttpError(error)) {
        return this.reportHttpError(error);
      }

      return this.reportGeneralError(error);
    },

    /**
     * @param {*} error
     * @return {boolean}
     */
    isValidationError(error) {
      return this.isApiError(error, 422);
    },

    /**
     * @param {*} error
     * @return {boolean}
     */
    isAuthenticationError(error) {
      return this.isApiError(error, 401);
    },

    /**
     * @param {*} error
     * @param {Number} statusCode
     * @return {boolean}
     */
    isApiError(error, statusCode = null) {
      if (!_.has(error, 'response')) {
        return false;
      }
      if (statusCode) {
        return Number(statusCode) === _.get(error, 'response.status');
      }

      return true;
    },

    /**
     * @param {*} error
     * @return {boolean}
     */
    isHttpError(error) {
      return _.get(error, 'request');
    },

    /**
     * @param {*} error
     * @param {Object} form
     */
    reportValidationError(error, form) {
      this.reportError({
        message: _.get(error, 'response.data.message'),
      });

      this.errors = _.get(error, 'response.data.errors', {});

    },

    /**
     * @param {*} error
     */
    reportAuthenticationError(error) {
      this.reportError({
        message: _.get(error, 'response.data.message', 'You are not authenticated.'),
      });
    },

    /**
     * @param {*} error
     */
    reportApiError(error) {
      this.reportError({
        message: _.get(error, 'response.data.message', 'General api error.')
      });
    },

    /**
     * @param {*} error
     */
    reportHttpError(error) {
      this.reportError({
        message: 'Service is unavailable.'
      });
    },

    /**
     * @param {*} error
     */
    reportGeneralError(error) {
      this.reportError({
        message: 'General error.'
      });
    },

    /**
     * @param {Object} error
     */
    reportError(error) {
      this.$notify.error({
        title: 'Error',
        message: error.message
      });
    },

    /**
     * @param {Object} form
     * @param {String} field
     */
    getFormFieldByName(form, fieldName) {
      return _.find(form.fields, field =>  String(field.prop) === String(fieldName));
    }
  },
}